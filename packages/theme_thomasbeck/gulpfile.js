const gulp = require('gulp'),
      sourcemaps = require('gulp-sourcemaps'),
      gulpStylelint = require('gulp-stylelint'),
      sass = require('gulp-sass')(require('sass')),
      autoprefixer = require('gulp-autoprefixer'),
      rename = require('gulp-rename'),
      cleancss = require('gulp-clean-css'),
      notify = require('gulp-notify'),
      del = require('del')
;

const privatePath = './Resources/Private/Src';
const publicPath = './Resources/Public';

const paths = {
  scss: privatePath + '/Scss',
  js: privatePath + '/Js',
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

const build = gulp.series(clean, gulp.parallel(buildCss));

exports.clean = clean;
exports.buildCss = buildCss;

exports.default = build;
