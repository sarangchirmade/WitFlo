var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var pkg = require('./package.json');

// Copy third party libraries from /node_modules into /vendor
gulp.task('vendor', function() {

  // Bootstrap
  gulp.src([
      './node_modules/bootstrap/dist/**/*',
      '!./node_modules/bootstrap/dist/css/bootstrap-grid*',
      '!./node_modules/bootstrap/dist/css/bootstrap-reboot*'
    ])
    .pipe(gulp.dest('./vendor/bootstrap'))

  // jQuery
  gulp.src([
      './node_modules/jquery/dist/*',
      '!./node_modules/jquery/dist/core.js'
    ])
    .pipe(gulp.dest('./vendor/jquery'))



//popper.js
gulp.src([
    './node_modules/popper.js/dist/*',
    '!./node_modules/popper.js/dist/esm/*',
    '!./node_modules/popper.js/dist/umd/*'
  ])
  .pipe(gulp.dest('./vendor/popper'))

})

// Default task
gulp.task('default', ['vendor']);

// Configure the browserSync task
gulp.task('browserSync', function() {
  browserSync.init({
    // server: {
    //   baseDir: "./"
    // }
    proxy:"http://localhost/demo/"
  });
});

// Dev task
gulp.task('watch', ['browserSync'], function() {
  gulp.watch('./assets/css/*.css', browserSync.reload);
  gulp.watch('./*.php', browserSync.reload);
});
