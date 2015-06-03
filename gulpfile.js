var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var jshint = require('gulp-jshint');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync');
var reload = browserSync.reload;

gulp.task('default', ['browser-sync', 'jshint', 'styles', 'watch']);

gulp.task('browser-sync', function(){
	browserSync({
		proxy:'http://localhost:8888/portfolio'
	});
});

gulp.task('styles', function() {
	return gulp.src('sass/*.scss')
		.pipe(sass({
			'sourcemap=none': true,
			errLogToConsole: true
		}))
		.pipe(concat('style.css'))
		.pipe(autoprefixer('last 2 version', 'safari 5'))
		.pipe(gulp.dest('./'))
		.pipe(reload({stream:true}))
});

gulp.task('watch', function() {
	gulp.watch('sass/*.scss', ['styles']);
	gulp.watch('js/*.js', ['jshint']);
	gulp.watch('**/*.html', reload);
});

gulp.task('jshint', function() {
	return gulp.src('js/*.js')
		.pipe(jshint())
		.pipe(reload({stream:true}))
});