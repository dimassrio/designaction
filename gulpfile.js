var gulp = require('gulp');
	sass = require('gulp-sass');
	browserSync = require('browser-sync');
	watch = require('gulp-watch');
	util = require('gulp-util');
	notify = require('gulp-notify');
	sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function(){
	return gulp.src('assets/sass/style.scss')
	.pipe(sourcemaps.init())
	.pipe(sass())
	.pipe(sourcemaps.write())
	.pipe(gulp.dest('.'))
	.pipe(browserSync.stream())
	.pipe(notify('sass complete'));
});

gulp.task('serve', ['sass'], function() {

    browserSync.init({
        proxy: "designAction.app"
    });

    gulp.watch("assets/sass/*.scss", ['sass']);
    gulp.watch("*").on('change', browserSync.reload);
});

gulp.task('default', ['serve']);