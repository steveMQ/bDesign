var gulp = require('gulp');
var gulpless = require('gulp-less');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');

gulp.task('less', function() {
  gulp.src('less/main.less')
  .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
  .pipe(gulpless())
  .pipe(gulp.dest('less'));
});

gulp.task('default', ['less'], function() {
  gulp.watch('less/partials/*.less', ['less']);
});
