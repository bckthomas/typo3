const autoprefixer = require('gulp-autoprefixer'),
      cleancss = require('gulp-clean-css'),
      del = require('del'),
      gulp = require('gulp'),
      gulpStylelint = require('gulp-stylelint'),
      notify = require('gulp-notify'),
      rename = require('gulp-rename'),
      sass = require('gulp-sass')(require('sass')),
      sourcemaps = require('gulp-sourcemaps')
;

const privatePath = './Resources/Private/Src';
const publicPath = './Resources/Public';

const paths = {
  scss: privatePath + '/Composants',
  js: privatePath + '/Composants',
  sprites: privatePath + '/Icons',
  fonts: privatePath + '/Fonts',
  dist: {
      css: publicPath + '/Css',
      js: publicPath + '/JavaScript',
      sprites: publicPath + '/Icons',
      fonts: publicPath + '/Fonts',
  }
};

// Clean web assets
function clean() {
  return del([
      paths.dist.css,
      paths.dist.sprites,
      paths.dist.js
  ]);
}

function copyJs() {
  return gulp.src([
      paths.js + '/*/*.js',
    ])
    .pipe(rename({ dirname: '' })) // to delete relative path
    .pipe(gulp.dest(paths.dist.js));

}

function buildCss() {
  return gulp.src([
      paths.scss + '/**/*.scss'
    ], { since: gulp.lastRun('buildCss') })
    .pipe(gulpStylelint({
      fix: true,
      reporters: [{
        formatter: 'string',
        console: true
      }]
    }))
    .pipe(gulp.dest(function (file) {
      return file.base;
    }))
    .pipe(sourcemaps.init())
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
    // .pipe(replace('../../assets/images/', '../images/'))
    // .pipe(replace('../assets/fonts/', '../fonts/'))
    .pipe(autoprefixer()) // autoprefix (browserlist is defined in package.json
    .pipe(cleancss()) // minify autoprefixed CSS with gulp-clean-css. See https://github.com/jakubpawlowicz/clean-css#how-to-use-clean-css-api for options
    .pipe(rename({ extname: '.min.css' })) // rename it with suffix .min.css
    .pipe(rename({ dirname: '' })) // to delete relative path
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(paths.dist.css)); // output minified file in dist/ folder
}

function watch() {
  gulp.watch(paths.scss + '/**/*.scss', { interval: 100, usePolling: true }, gulp.series('buildCss'));
}

const build = gulp.series(clean, gulp.parallel(buildCss, copyJs));

exports.clean = clean;
exports.buildCss = buildCss;
exports.watch = watch;
exports.copyJs = copyJs;

exports.default = build;
