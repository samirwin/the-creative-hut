var gulp = require('gulp');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var rename = require("gulp-rename");
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');  

gulp.task('styles', function() {
	gulp.src('sass/**/*.scss')
    	.pipe(sass().on('error', sass.logError))
    	.pipe(gulp.dest('./css/'))
    	.pipe(cleanCSS())
		.pipe(rename('style.min.css'))
		.pipe(gulp.dest('./css/'));
});

gulp.task('scripts', function() {  
    gulp.src('js/lib/**/*.js')
        .pipe(concat('scripts.js'))
        .pipe(gulp.dest('js/'))
        .pipe(rename('scripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js/'));
});

gulp.task('default',function() {
	gulp.watch('sass/**/*.scss',['styles']);
	gulp.watch('js/lib/**/*.js',['scripts']);
});