'use strict';

const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync');
const sourcemaps = require('gulp-sourcemaps');
const cleanCSS = require('gulp-clean-css');
const notify = require('gulp-notify');
const sass = require('gulp-sass');
const gulp = require('gulp');


// // Sass compilation
gulp.task('sass', () => {
	notifyOptions.title   = 'Sass';
	notifyOptions.message = 'Le fichier <%= file.relative %> a été mis à jour';

	return gulp
		.src(`${source}scss/**/*.scss`)
		.pipe(sourcemaps.init())
		.pipe(sass({
			outputStyle: 'expanded'
		}).on('error', notify.onError({
			message: '<%= error.message %>'
		})))
		.pipe(autoprefixer({
			browsers : ['last 4 versions', '> 0.2%', 'Firefox ESR']
		}))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(assets + 'css/'))
		.pipe(browserSync.stream())
		.pipe(notify(notifyOptions));
});


// Minify CSS
gulp.task('minify', () => {
	return gulp.src([`${assets}css/**`, `!${assets}css/{min,min/**}`])
		.pipe(cleanCSS({
			level: {
				2: {
					all: true
				}
			}
		}))
		.pipe(gulp.dest(function(file) {
			return file.base.replace('/css/', '/css/min/');
		}));
});
