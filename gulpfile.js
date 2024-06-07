const { src, dest, watch, series } = require('gulp')
const sass = require('gulp-sass')(require('sass'));

function buildStyles() {
  return src('public/**/*.scss')
    .pipe(sass())
    .pipe(dest('public'))
}

function watchTask() {
  watch(['public/**/*scss'], buildStyles);
}

exports.default = series(buildStyles, watchTask);