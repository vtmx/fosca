// Modules
var gulp        = require('gulp');
var sass        = require('gulp-sass');
var browserSync = require('browser-sync').create();

// PHP
gulp.task('php', function() {
    gulp.src('')
	.pipe(browserSync.stream());
});

// Sass
gulp.task('sass', function () {
  return gulp.src(['src/scss/**/*.scss'])
    .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
    .pipe(gulp.dest('dist/css'))
    .pipe(browserSync.stream());
});

// JS
gulp.task('js', function () {
    gulp.src('')
    .pipe(browserSync.stream());
});

// BrowserSync
gulp.task('browser-sync', function() {
    browserSync.init({
       proxy: "http://localhost/fosca/"
   });

   gulp.watch(['*.php'], ['php']);
   gulp.watch('src/scss/**/*.scss', ['sass']);
   gulp.watch('dist/js/**/*.js', ['js']);
});

// Tasks
gulp.task('default', ['php', 'sass', 'js', 'browser-sync']);
