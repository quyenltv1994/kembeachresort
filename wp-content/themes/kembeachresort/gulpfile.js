'use strict';

var gulp 			= require('gulp'),
	sass 			= require('gulp-sass'),
	autoprefixer 	= require('gulp-autoprefixer'),
	concat 			= require('gulp-concat'),
	uglify 			= require('gulp-uglify'),
	jshint 			= require('gulp-jshint'),
	cssnano 		= require('gulp-cssnano'),
	rename 			= require('gulp-rename'),
	babel 			= require('gulp-babel'),
	browserSync 	= require('browser-sync').create();

var paths = {
	source	: './source',
	dist	: './dist',
	vendor	: './dist/assets/vendor',
	bundles	: './dist/assets/bundles',
	min		: './dist/assets/min',
	js 		: './source/js',
	scss	: './source/scss'
}

gulp.task('sass', function () {
	return gulp.src([
			paths.vendor + '/bootstrap/dist/css/bootstrap.css',
			paths.vendor + '/font-awesome/css/font-awesome.css',
			paths.vendor + '/swiper/dist/css/swiper.css',
			paths.vendor + '/animate/animate.css',
			paths.vendor + '/clone/style.css',
			paths.scss + '/*.scss'
		])
		.pipe(sass())
		.pipe(autoprefixer({
			browsers: ['last 10 versions']
		}))
		.pipe(concat('style.css'))
		.pipe(gulp.dest(paths.bundles))
		.pipe(rename('style.min.css'))
		.pipe(cssnano({zindex: false}))
		.pipe(gulp.dest(paths.min))
		.pipe(browserSync.stream());
});

gulp.task('babeljs', function () {
	return gulp.src( paths.js + '/*.js' )
		.pipe(babel({
			presets: ['es2015']
		}))
		.pipe(gulp.dest( paths.js + '/dist' ));
});

gulp.task('js', function () {
	return gulp.src([
			paths.vendor + '/bootstrap/dist/js/bootstrap.js',
			paths.vendor + '/bxslider/jquery.bxslider.min.js',
			paths.vendor + '/swiper/dist/js/swiper.js',
			paths.vendor + '/wow-js-svg-fix/dist/wow.js',
			paths.vendor + '/lodash/dist/lodash.js',
			paths.js + '/dist/*.js'
		])
		.pipe(concat('script.js'))
		.pipe(gulp.dest(paths.bundles))
		.pipe(rename('script.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest(paths.min));
});

gulp.task('jshint', function () {
	return gulp.src(paths.js + '/*.js')
		.pipe(jshint({
			esversion: 6
		}))
		.pipe(jshint.reporter('default'))
});

gulp.task('jsreload', ['jshint', 'babeljs', 'js'], function (done) {
	browserSync.reload();
	done();
});

gulp.task('cssreload', ['sass'], function (done) {
	browserSync.reload();
	done();
});

gulp.task('default', ['jshint', 'babeljs', 'js', 'sass'], function() {

	browserSync.init({
        proxy: "goldenriver.me"
    });

	gulp.watch([
		paths.scss + '/*.scss',
		paths.scss + '/*/*.scss',
		paths.scss + '/*/*/*.scss'
	], {cwd: './'}, ['cssreload']);

	gulp.watch([paths.js + '/*.js'], {cwd: './'}, ['jsreload']);

});