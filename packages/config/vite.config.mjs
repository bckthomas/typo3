import { defineConfig } from "vite"
import path from "path"
import fs from "fs"
import stylelint from 'vite-plugin-stylelint'
import VitePluginSvgSpritemap from '@spiriit/vite-plugin-svg-spritemap'
import { viteStaticCopy } from 'vite-plugin-static-copy'

const site = process.env.SITE
if (!site) throw new Error('❌ Paramètre --site manquant')
const themeRoot = `theme_${site}`
const srcRoot = `${themeRoot}/Resources/Private/Src`
const publicRoot = `${themeRoot}/Resources/Public`


const fontsSrc = path.resolve(srcRoot, 'Fonts')
const fontsDest = 'fonts'

console.log('🛠️ Config static copy:')
console.log('📁 Source:', fontsSrc)
console.log('📂 Destination:', fontsDest)

if (!fs.existsSync(fontsSrc)) {
  console.warn('⚠️ Le dossier Fonts est introuvable à', fontsSrc)
} else {
  const fontFiles = fs.readdirSync(fontsSrc)
  console.log(`✅ ${fontFiles.length} fichier(s) détecté(s) dans Fonts :`, fontFiles)
}

function getFrontFiles(dir, extensions = [".scss", ".js"]) {
  const files = {};

  function walk(currentDir) {
    fs.readdirSync(currentDir, { withFileTypes: true }).forEach((file) => {
      const fullPath = path.join(currentDir, file.name);

      if (file.isDirectory()) {
        walk(fullPath);
      } else if (
        extensions.some(ext => file.name.endsWith(ext)) &&
        !file.name.startsWith("_")
      ) {
        const relativePath = path.relative(path.resolve(__dirname, srcRoot), fullPath);
        const nameWithoutExt = relativePath.replace(/\.(scss|js)$/, "");
        const fileName = path.basename(nameWithoutExt) + path.extname(file.name);
        files[fileName] = fullPath;
      }
    });
  }

  walk(dir);
  return files;
}

const frontFilesEntries  = getFrontFiles(srcRoot);

export default defineConfig({
  root: srcRoot,
  base: './',
  build: {
    manifest: 'manifest.json',
    outDir: `../../Public`,
    emptyOutDir: true,
    sourcemap: true,
    rollupOptions: {
      input: {
        ...frontFilesEntries,
      },
      output: {
        assetFileNames: (assetInfo) => {
          const assetName = Array.isArray(assetInfo.names) ? assetInfo.names[0] : assetInfo.name;
          if (assetName.endsWith(".css")) {
            return `css/[name].min.css`;
          }
          return "[name].[ext]";
        },
        entryFileNames: (chunkInfo) => {
          const name = path.basename(chunkInfo.name, path.extname(chunkInfo.name));
          if (chunkInfo.facadeModuleId.endsWith(".js")) {
            return `js/${name}.min.js`;
          }
          return "[name]";
        }
      },
    },
  },
  css: {
    postcss: path.resolve(__dirname, "config/postcss.config.js"),
    devSourcemap: true,
    preprocessorOptions: {
      scss: {
        sourceMap: true,
        api: 'modern-compiler',
      },
    },
  },
  plugins: [
    viteStaticCopy({
      targets: [
        {
          src: path.resolve(srcRoot, 'Fonts/**/*'),
          dest: 'assets/fonts',
        },
        {
          src: path.resolve(srcRoot, 'Images/**/*'),
          dest: 'assets/images',
        }
      ],
    }),
    VitePluginSvgSpritemap(`${srcRoot}/Icons/**/*.svg`, {
      output: {
        filename: 'icons/sprite.svg',
        use: false,
        view: false,
      },
      styles: false,
      prefix: false,
      svgo: true
    }),
    stylelint({
      configFile: '.stylelintrc.json',
      cache: true,
      fix: true,
      include: [`${srcRoot}/**/*.scss`, `${themeRoot}/ContentBlocks/**/*.scss`],
    }),
  ]
});



//     plugins: [
//       eslint({
//         cache: true,
//         fix: true,
//         include: [`${srcRoot}/**/*.js`],
//         exclude: [`${srcRoot}/svgs.js`]
//       }),
//       stylelint({
//         configFile: path.resolve(__dirname, 'config', '.stylelintrc.json'), // Assure-toi que le fichier de config de Stylelint est bien spécifié
//         cache: true,
//         fix: true,
//         include: [`${srcRoot}/**/*.scss`, `${themeRoot}/ContentBlocks/**/*.scss`],
//       }),
//       viteImagemin({
//         gifsicle: { interlaced: true, optimizationLevel: 2 },
//         optipng: { optimizationLevel: 3 },
//         mozjpeg: { progressive: true, quality: 75 }
//       }),
//       svgSprite({
//         include: [`${srcRoot}/Icons/**/*.svg`],
//         spriteFilename: 'sprite.svg',
//         outputDir: path.resolve(publicDir, 'Icons'),
//         symbolId: (filePath) => {
//           const name = path.basename(filePath, '.svg')
//           return `icon-${name}`
//         }
//       }),
//     ]
//   }
// })
