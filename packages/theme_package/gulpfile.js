const cleancss = del = require('del'),
      gulp = require('gulp'),
      notify = require('gulp-notify'),
      rename = require('gulp-rename'),
      sass = require('gulp-sass')(require('sass')),
      rollup = require('gulp-better-rollup')
      resolve = require('rollup-plugin-node-resolve'),
      commonjs = require('rollup-plugin-commonjs')
;

const privatePath = './Resources/Private/Src';
const publicPath = './Resources/Public';

const paths = {
  scss: privatePath + '/Components',
  js: privatePath + '/Components',
  dist: {
      css: publicPath + '/Css',
      js: publicPath + '/JavaScript',
  }
};

// Clean web assets
function clean() {
  return del([
      paths.dist.css,
      paths.dist.js
  ]);
}

function buildJs() {
  return gulp.src(paths.js + '/*/*.js')
    .pipe(rollup({ plugins: [resolve(), commonjs()] }, 'umd'))
    .pipe(rename({ dirname: '' })) // to delete relative path
    .pipe(gulp.dest(paths.dist.js));
}

function buildCss() {
  return gulp.src(paths.scss + '/**/*.scss')
    .pipe(gulp.dest(function (file) {
      return file.base;
    }))
    .pipe(sass({
      outputStyle: 'compressed', // possible values : nested, expanded, compact, compressed
    }))
    .on('error', function (err) {
      notify({
        title: 'Gulp Build CSS',
        message: 'Check the Task Runner or console for more details.'
      }).write(err);
      console.error(err);
      this.emit('end');
    })
    .pipe(rename({ extname: '.min.css' })) // rename it with suffix .min.css
    .pipe(rename({ dirname: '' })) // to delete relative path
    .pipe(gulp.dest(paths.dist.css)); // output minified file in dist/ folder
}

const build = gulp.series(clean, gulp.parallel(buildCss, buildJs));

exports.clean = clean;
exports.buildCss = buildCss;
exports.buildJs = buildJs;

exports.default = build;
