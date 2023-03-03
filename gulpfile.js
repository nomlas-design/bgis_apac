const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();

// Compile SCSS files to CSS
function style() {
  return gulp
    .src('./scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./css'))
    .pipe(browserSync.stream());
}

// Watch files for changes and reload the browser
function watch() {
  browserSync.init({
    proxy: 'http://bgis-apac-2022.local/',
    notify: false,
  });

  gulp.watch('./scss/**/*.scss', style);
  gulp.watch('./**/*.php').on('change', browserSync.reload);
  gulp.watch('./js/**/*.js').on('change', browserSync.reload);
}

exports.style = style;
exports.watch = watch;
