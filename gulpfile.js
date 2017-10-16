/**
 * Created by Иван on 31.05.2017.
 */

const gulp         = require('gulp');
//const rev          = require('gulp-rev');
//const revManifest  = require('gulp-revmanifest');
const del          = require('del');
const less         = require('gulp-less');
const typescript   = require('gulp-typescript');
const autoprefixer = require('gulp-autoprefixer');
const plugins = require('gulp-load-plugins')();


gulp.task('clean', function () {
    return del(
    	[
    		'frontend/web/js/built/**/*',
			'frontend/web/css/built/**/*'
		]
	);
});

gulp.task('compile', ['clean'], function () {
	var tscConfig    = require('./frontend/tsconfig.json');

    return gulp
        .src('frontend/web/src/ts/**/*.ts')
        .pipe(typescript(tscConfig.compilerOptions))
		// .pipe(rev())
		.pipe(gulp.dest('frontend/web/js/built'))
		.pipe(gulp.src('frontend/web/src/less/**/*.less'))
		.pipe(less({
			paths: [ 'frontend/web/src/less/' ]
		}))
		.pipe(gulp.dest('frontend/web/css/built'));
		// .pipe(revManifest())
		// .pipe(gulp.dest('frontend/web/js/rev'))
});


gulp.task('clean-back', function () {
	return del(
		[
			'backend/web/js/built/**/*',
			'backend/web/css/built/**/*'
		]
	);
});

gulp.task('compile-back', ['clean-back'], function () {
	var tscConfig    = require('./backend/tsconfig.json');

	return gulp
		.src('backend/web/src/ts/**/*.ts')
		.pipe(typescript(tscConfig.compilerOptions))
		.pipe(gulp.dest('backend/web/js/built'))
		.pipe(gulp.src('backend/web/src/less/**/*.less'))
		.pipe(less({
			paths: [ 'backend/web/src/less/' ]
		}))
		.pipe(gulp.dest('backend/web/css/built'));
});

gulp.task('default', ['compile', 'compile-back']);