import { defineConfig } from 'vite'
import path from 'path'
import eslint from 'vite-plugin-eslint'
import stylelint from 'vite-plugin-stylelint'
import viteImagemin from 'vite-plugin-imagemin'
import svgSprite from 'vite-plugin-svg-sprite'

export default defineConfig(({ mode }) => {
  const site = process.env.SITE
  if (!site) throw new Error('❌ Paramètre --site manquant')
  const themeRoot = `theme_${site}`
  const srcRoot = `${themeRoot}/Resources/Private/Src`
  const publicDir = `${themeRoot}/Resources/Public`

  return {
    root: srcRoot,
    base: './',
    build: {
      outDir: `../../Public`,
      emptyOutDir: true,
      rollupOptions: {
        input: {
          layout: path.resolve(srcRoot, 'Layout/layout.scss'),
          title1: path.resolve(srcRoot, 'Components/Title1/title1.scss'),
        },
        output: {
          entryFileNames: 'JavaScript/[name].min.js',
          assetFileNames: ({ name }) => {
            if (name && name.endsWith('.css')) return 'Css/[name][extname]'
            return '[name][extname]'
          },
        }
      },
      watch: {
        include: [`${srcRoot}/**/*`, `./ContentBlocks/**/*`],
        exclude: 'node_modules/**',
        chokidar: {
          usePolling: true,
          interval: 200,
        },
      }
    },
    css: {
      preprocessorOptions: {
        scss: {
          additionalData: '',
        }
      }
    },
    plugins: [
      eslint({
        cache: true,
        fix: true,
        include: [`${srcRoot}/**/*.js`],
        resolve: {
          alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
          }
        },
        exclude: [`${srcRoot}/svgs.js`]
      }),
      stylelint({
        configFile: path.resolve(__dirname, 'config', '.stylelintrc.json'),
        cache: true,
        fix: true,
        include: [`${srcRoot}/**/*.scss`, `${themeRoot}/ContentBlocks/**/*.scss`],
      }),
      viteImagemin({
        gifsicle: { interlaced: true, optimizationLevel: 2 },
        optipng: { optimizationLevel: 3 },
        mozjpeg: { progressive: true, quality: 75 }
      }),
      svgSprite({
        include: [`${srcRoot}/Icons/**/*.svg`],
        spriteFilename: 'sprite.svg',
        outputDir: path.resolve(publicDir, 'Icons'),
        symbolId: (filePath) => {
          const name = path.basename(filePath, '.svg')
          return `icon-${name}`
        }
      }),
    ]
  }
})
