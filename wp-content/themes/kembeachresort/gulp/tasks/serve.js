'use strict';

const gulp = require('gulp');
const browserSync  = require('browser-sync');


// browserSyncOptions
let browserSyncOptions = {
	watchTask: true,
	open: false,
	// server: {
	// 	baseDir: docRoot
	// },
	proxy: 'localhost.me'
}

// Watch options
const watchOptions = [
	// surveille les fichiers js
	`${assets}js/**`,
	`!${assets}js/{min,min/**}`,
	// surveille les dossiers et fichiers de template EE
	`${assets}tpl/default_site/**`
]


gulp.task('serve', ['sass', 'svg'], function() {

	const args = process.argv.splice(2)
	// Check fo --proxy arg and update
	// browserSyncOptions if it exists
	if (args.indexOf('--proxy') > -1) {
		const i = args.indexOf('--proxy') + 1
		browserSyncOptions.proxy = args[i]
	}

	browserSync.init(browserSyncOptions);
	console.log(__dirname);
	console.log(source);
	gulp.watch([`scss/**/*.scss`], { cwd: source }, ['sass']);
	gulp.watch([`es6/**`], { cwd: source }, ['js']);
	gulp.watch([`svg/raw/*.svg`], { cwd: source }, ['svg']);

	gulp.watch(watchOptions).on('change', browserSync.reload);

	gulp.watch([`css/**`, `!css/{min,min/**}`], { cwd: assets }, ['minify']);
	gulp.watch([`js/**`, `!js/{min,min/**}`], { cwd: assets }, ['uglify']);
});
