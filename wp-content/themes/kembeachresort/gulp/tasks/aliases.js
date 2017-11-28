'use strict';

const gulp = require('gulp');
const insert = require('gulp-insert');


gulp.task('default', ['sass', 'svg', 'serve']);


// Compress
gulp.task('compress', ['minify', 'uglify'], function() {


	function joinArray(array, before, after) {
		let string = '';
		for (let i = 0; i < array.length; i++) {
			string += before + array[i] + after;
		}
		return string;
	}


	return gulp.src(`${assets}js/min/vendors/console.js`)
		.pipe(insert.append(joinArray(logs, 'console.log("', '");')))
		.pipe(gulp.dest(function(file) {
			return file.base;
		}));
});