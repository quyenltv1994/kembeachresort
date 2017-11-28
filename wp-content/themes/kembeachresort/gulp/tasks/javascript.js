'use strict';

const gulp = require('gulp');
const watchify = require('watchify');
const browserify = require('browserify');
const babelify = require('babelify');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const source = require('vinyl-source-stream');
const notify = require('gulp-notify');
const insert = require('gulp-insert');


// Uglify
gulp.task('uglify', () => {

	const joinArray = (array, before, after) => {
		let string = '';
		for (let i = 0; i < array.length; i++) {
			string += before + array[i] + after;
		}
		return string;
	}

	return gulp.src([`${assets}js/**`, `!${assets}js/{min,min/**}`])
		.pipe(uglify({
			preserveComments: function(node, comment) {
				if (comment.value.substr(0, 2) === '!!') {
					return true;
				} else {
					return false;
				}
			},
			compress: {
				drop_console: true
			}
		}).on('error', notify.onError({
			message: '<%= error.message %>'
		})))
		.pipe(insert.prepend(prepend))
		.pipe(insert.append(joinArray(logs, 'console.log(', ');')))
		.pipe(gulp.dest(function(file) {
			return file.base.replace('/js/', '/js/min/');
		}));
});


// Browserify + es6
// const files = glob.sync()
const customOpts = {
	entries: [`${source}/es6/app.js`],
	debug: true
}

// Setup bundler
const bundler = watchify(browserify(customOpts))
// Add transform
bundler.transform(babelify, { presets: ['es2015'] });

function bundle() {
	notifyOptions.title   = 'Babel';
	notifyOptions.message = 'Le fichier <%= file.relative %> a été mis à jour';

	return bundler.bundle()
		.on('error', notify.onError({
			message: '<%= error.message %>'
		}))
		.pipe(source('app'))
		.pipe(rename({ extname: '.js' }))
		.pipe(gulp.dest(`${assets}js/`))
		.pipe(notify(notifyOptions));
}

gulp.task('js', bundle);
