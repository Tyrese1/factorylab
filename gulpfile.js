var gulp      =    require('gulp'),
    concat    =    require('gulp-concat'),
    uglify    =    require('gulp-uglify');


gulp.task('scripts',function(){
  return gulp.src(
    [
      'public/bower_components/jquery/dist/jquery.min.js',
      'public/bower_components/bootstrap/dist/js/bootstrap.min.js'
    ]
  )
  .pipe(concat('app.js'))
  .pipe(gulp.dest('public/js'));
});

gulp.task('styles',function(){
  return gulp.src(
    [
      'public/bower_components/bootstrap/dist/css/bootstrap.min.css',
    ]
  )
  .pipe(concat('app.css'))
  .pipe(gulp.dest('public/css'));
});

gulp.task('default', ['styles','scripts']);
