import { dest, src, watch, parallel, series, lastRun } from 'gulp';
import { sass } from 'gulp5-sass-plugin';
import postcss from 'gulp-postcss';
import autoprefixer from 'autoprefixer';
import minify from 'postcss-minify';
import postcssInlineSvg from 'postcss-inline-svg';
import postcssSvgo from 'postcss-svgo';
import svgo from 'gulp-svgmin';
import sourcemaps from 'gulp-sourcemaps';
import stylelint from 'gulp-stylelint-esm';
import svgSprite from 'gulp-svg-sprite';
import eslint from 'gulp-eslint';
import uglify from 'gulp-uglify';
import rename from '@sequencemedia/gulp-rename';
import browserSync from 'browser-sync';
import { deleteAsync } from 'del';
import replace from 'gulp-replace';

const server = browserSync.create();

// Folders
// src can be an array of paths
const paths = {
  styles: {
    src: 'src/**/*.scss',
    dest: 'dist/css'
  },
  svgs: {
    src: 'src/assets/svgs/**/*.svg',
    dest: 'dist/images/',
    assetsPath: ['./src/assets/svgs']
  },
  images: {
    src: 'src/assets/images/**/*',
    dest: 'dist/images/',
  },
  fonts: {
    src: 'src/assets/fonts/**/*',
    dest: 'dist/fonts/',
  },
  scripts: {
    src: 'src/**/*.js',
    dest: 'dist/js/'
  }
};

// Better log error
const handleError = (pluginName) => function (err) {
  console.error(`\n[${pluginName}] Error in file: ${err.relativePath}`);
  console.error(`Line: ${err.line}, Column: ${err.column}`);
  console.error(`Message: ${err.messageOriginal}\n`);
  this.emit("end");
};

// SCSS compile
export const styles = () =>
  src(paths.styles.src, { sourcemaps: true, since: lastRun('styles') })
    .pipe(
      stylelint({
        fix: true,
        failAfterError: false,
        configFile: 'config/.stylelintrc.json',
        reporters: [{
          formatter: 'string',
          console: true
        }]
      })
    )
    .pipe(
      sass({silenceDeprecations: ['import', 'color-functions', 'global-builtin', 'mixed-decls'], outputStyle: 'compressed' }).on('error', handleError('SASS'))
    )
    .pipe(postcss([
      autoprefixer(),
      postcssInlineSvg({
        paths: paths.svgs.assetsPath,
        removeFill: true,
        removeStroke: true
      }),
      postcssSvgo(),
    ]))
    .pipe(postcss([
      minify()
    ]))
    .pipe(replace('../../../assets/', '../../assets/'))
    .pipe(rename({extname: '.min.css'}))
    .pipe(rename({dirname: paths.styles.dest}))
    .pipe(dest('./', { sourcemaps: './' }));

// Images
export const images = () =>
  src(paths.images.src, {encoding: false})
  .pipe(dest(paths.images.dest));

// Fonts
export const fonts = () =>
  src(paths.fonts.src, {encoding: false})
  .pipe(dest(paths.fonts.dest));

// Sprite SVG
export const svgs = () =>
    src(paths.svgs.src)
      .pipe(
        svgo({
          multipass: true,
          full: true,
          plugins: [
            {
              name: 'removeAttrs',
              params: {
                attrs: '(fill|fill-rule|clip-rule)'
              }
            }
          ]
        })
      )
      .pipe(
        svgSprite({
          mode: {
            symbol: {
              sprite: '../sprite.svg'
            }
          }
        })
      )
      .on('error', function(error) {
        console.error(error)
      })
      .pipe(dest(paths.svgs.dest));

// Lint + JS compile
export const scripts = () =>
  src(paths.scripts.src, { since: lastRun('scripts') })
    .pipe(eslint({
      overrideConfigFile: 'config/.eslint.config.js',
      fix: true
    }))
    .pipe(eslint.fix())
    .pipe(eslint.format())
    .pipe(eslint.failAfterError())
    .pipe(uglify())
    .pipe(rename({ extname: '.min.js' }))
    .pipe(rename({dirname: paths.scripts.dest}))
    .pipe(dest('./'));

// Live-reload
export const serve = () => {
  server.init({
    files: [
      {
        match: [paths.theme.src]
      }
    ],
    proxy: 'web:80',
    notify: false,
    open: false
  });
  watch(paths.styles.src, styles);
  watch(paths.svgs.src, svgs);
  watch(paths.scripts.src, scripts);
  watch('*.html').on('change', server.reload);
};

// Main tasks
export const build = series(parallel(styles, scripts));
export const buildProd = series(parallel(styles, images, fonts, svgs, scripts));
export const clean = () => deleteAsync(['dist']);
export const spy = parallel(build, serve);

// Default task
export default spy;
