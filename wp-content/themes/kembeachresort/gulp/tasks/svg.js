'use strict';

const gulp = require('gulp');
const notify = require('gulp-notify');
const rename = require('gulp-rename');
const svgstore = require('gulp-svgstore');

// Sprite SVG
gulp.task('svg', function () {
	notifyOptions.title   = 'SVG Store';
	notifyOptions.message = 'Le fichier <%= file.relative %> a été mis à jour';

	return gulp
		.src(`${source}svg/raw/*.svg`)
		.pipe(rename({ prefix: 'svg-' }))
		.pipe(svgstore({
			inlineSvg: true
		}))
		.pipe(rename('sprite.svg'))
		.pipe(gulp.dest(`${assets}svg/`))
		.pipe(notify(notifyOptions));
});