var gulp = require('gulp');
var sass = require('gulp-sass');
var plugins = require('gulp-load-plugins')();

gulp.task('styles', function() {
  gulp.src('assets/sass/**/*.scss')
      .pipe(sass({ errLogToConsole: true }))
      .pipe(plugins.autoprefixer(autoprefixerOptions))
      .pipe(gulp.dest('assets/css/'));
});

var autoprefixerOptions = {
  browsers: ['last 2 versions', 'IE 9', '> 5%', 'Firefox ESR']
};

//Watch task
gulp.task('default',function() {
    gulp.watch('assets/sass/**/*.scss',['styles']);
});
