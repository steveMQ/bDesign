var gulp = require('gulp');
var gulpless = require('gulp-less');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var concat = require('gulp-concat');

gulp.task('less', function() {
  gulp.src('less/main.less')
  .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
  .pipe(gulpless())
  .pipe(gulp.dest('build'));
});

//remember to run 'gulp javascript'
gulp.task('javascript', function () {
  gulp.src([
    'bower_components/jquery/dist/jquery.js',
    'bower_components/bootstrap/dist/js/bootstrap.js'
  ])
  .pipe(concat('vendor.js'))
  .pipe(gulp.dest('build'))
});

guild.task('build', ['less', 'javascript']);

gulp.task('default', ['build'], function() {
  gulp.watch(
    ['less/partials/*.less', 'less/main.less'],
    ['less']
  );
});
