import { defineConfig } from 'vite';
import path from 'path';
import fs from 'fs';
import VitePluginSvgSpritemap from '@spiriit/vite-plugin-svg-spritemap';
import { viteStaticCopy } from 'vite-plugin-static-copy';
import fg from 'fast-glob';
import stylelint from 'stylelint';
import eslint from 'eslint';

const site = process.env.SITE;
if (!site) throw new Error('❌ Paramètre --site manquant');
const themeRoot = `theme_${site}`;
const srcRoot = `${themeRoot}/Resources/Private/Src`;


const fontsSrc = path.resolve(srcRoot, 'Fonts');
const fontsDest = 'fonts';

console.log('🛠️ Config static copy:');
console.log('📁 Source:', fontsSrc);
console.log('📂 Destination:', fontsDest);

if (!fs.existsSync(fontsSrc)) {
  console.warn('⚠️ Le dossier Fonts est introuvable à', fontsSrc);
} else {
  const fontFiles = fs.readdirSync(fontsSrc);
  console.log(`✅ ${fontFiles.length} fichier(s) détecté(s) dans Fonts :`, fontFiles);
}

function getFrontFiles(dir, extensions = ['.scss', '.js']) {
  const files = {};

  function walk(currentDir) {
    fs.readdirSync(currentDir, { withFileTypes: true }).forEach((file) => {
      const fullPath = path.join(currentDir, file.name);

      if (file.isDirectory()) {
        walk(fullPath);
      } else if (
        extensions.some(ext => file.name.endsWith(ext)) &&
        !file.name.startsWith('_')
      ) {
        const relativePath = path.relative(path.resolve(__dirname, srcRoot), fullPath);
        const nameWithoutExt = relativePath.replace(/\.(scss|js)$/, '');
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
    outDir: '../../Public',
    emptyOutDir: true,
    sourcemap: true,
    rollupOptions: {
      input: {
        ...frontFilesEntries,
      },
      output: {
        assetFileNames: (assetInfo) => {
          const assetName = Array.isArray(assetInfo.names) ? assetInfo.names[0] : assetInfo.name;
          if (assetName.endsWith('.css')) {
            return 'css/[name].min.css';
          }
          return '[name].[ext]';
        },
        entryFileNames: (chunkInfo) => {
          const name = path.basename(chunkInfo.name, path.extname(chunkInfo.name));
          if (chunkInfo.facadeModuleId.endsWith('.js')) {
            return `js/${name}.min.js`;
          }
          return '[name]';
        }
      },
    },
  },
  css: {
    postcss: path.resolve(__dirname, 'config/postcss.config.cjs'),
    devSourcemap: true,
    preprocessorOptions: {
      scss: {
        sourceMap: true,
        api: 'modern-compiler',
      },
    },
  },
  plugins: [
    customEslintPlugin(themeRoot),
    stylelintPlugin(themeRoot),
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
    VitePluginSvgSpritemap('Icons/**/*.svg', {
      output: {
        filename: 'icons/sprite.svg',
        use: false,
        view: false,
      },
      styles: false,
      prefix: false,
      svgo: true
    }),
  ]
});

function stylelintPlugin(themeRoot) {
  return {
    name: 'vite:stylelint-custom',
    async buildStart() {
      const files = await fg([themeRoot + '/Resources/Private/Src/**/*.scss']);

      if (!files.length) {
        console.log('[stylelint] Aucun fichier SCSS trouvé.');
        return;
      }

      const result = await stylelint.lint({
        files,
        fix: true,
        configFile: path.resolve(__dirname, '.stylelintrc.json'),
        formatter: 'string',
      });

      if (result.errored) {
        console.warn('\n⚠️  Stylelint errors:');
        console.warn(result.output);
      } else {
        console.log('✅ Stylelint: Aucun problème détecté.');
      }
    }
  };
}

function customEslintPlugin(themeRoot) {
  return {
    name: 'vite:custom-eslint',
    async buildStart() {
      const eslintCli = new eslint.ESLint({
        overrideConfigFile: path.resolve(__dirname, './.eslint.config.js'), // 👈 chemin relatif à config/
        fix: true
      });

      const files = await fg([themeRoot + '/Resources/Private/Src/**/*.js']);
      const results = await eslintCli.lintFiles(files);
      await eslint.ESLint.outputFixes(results);

      const formatter = await eslintCli.loadFormatter('stylish');
      const resultText = formatter.format(results);

      if (resultText) {
        console.warn('\n⚠️ ESLint results:\n' + resultText);
      } else {
        console.log('✅ ESLint: Aucun problème détecté.');
      }
    }
  };
}
