require('es6-promise').polyfill();

var gulp = require('gulp'),
    plumber = require('gulp-plumber'),
    notify = require('gulp-notify'),
    sass = require('gulp-sass'),
    cssnano = require('gulp-cssnano'),
    autoprefixer = require('gulp-autoprefixer'),
    rename = require('gulp-rename'),
    uglify = require('gulp-uglify'),
    browserSync = require('browser-sync');

var plumberErrorHandler = {
   errorHandler: notify.onError({
      title: 'Gulp',
      message: 'Error: <%= error.message %>'
   })
};

gulp.task('sass', function() {
   gulp.src('./assets/scss/style.scss')
      .pipe(plumber(plumberErrorHandler))
      .pipe(sass())
      .pipe(autoprefixer({
         browsers: ['last 2 versions']
      }))
      .pipe(cssnano())
      .pipe(rename('style.min.css'))
      .pipe(gulp.dest('./build/css'));
});

gulp.task('scripts', function(){
    gulp.src('./assets/js/*.js')
      .pipe(uglify())
      .pipe(rename({
        extname: '.min.js'
      }))
      .pipe(gulp.dest('./build/js'))
});

gulp.task('browser-sync', function() {
   var files = [
      './build/css/*.css',
      './build/js/*.js',
      './*.php',
      './**/*.php',
   ];

    browserSync.init(files, {
        proxy: 'http://localhost/mashumoe/',
    });

    gulp.watch(files).on('change', browserSync.reload);
});

gulp.task('watch', function() {
   gulp.watch('./assets/scss/*.scss', ['sass']);
   gulp.watch('./assets/js/*.js', ['scripts']);
});

gulp.task('default', ['watch', 'browser-sync']);