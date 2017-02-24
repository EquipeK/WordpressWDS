var gulp = require('gulp');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var sass = require('gulp-sass');
var nano = require('gulp-cssnano');
var imagemin = require('gulp-imagemin');


gulp.task('scripts', function () {
    return gulp.src('dev/js/*.js')
    .pipe(concat('scripts.js'))
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('js'));
});

gulp.task('sass', function () {
    return gulp.src('dev/sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(concat('style.css'))
    .pipe(nano())
    .pipe(gulp.dest('./'));
});
 
gulp.task('images', function () {
    gulp.src('dev/images/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/images'))
});

// Run everything
gulp.task('watch',function()
{
    gulp.watch('dev/js/*.js', ['scripts']);
    gulp.watch('dev/sass/**/*.scss', ['sass']);
    gulp.watch('dev/images/*', ['images']);
});