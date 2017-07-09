/**
 * Created by Иван on 31.05.2017.
 */

const gulp         = require('gulp');
const del          = require('del');
const typescript   = require('gulp-typescript');
const autoprefixer = require('gulp-autoprefixer');
const plugins = require('gulp-load-plugins')();


gulp.task('clean', function () {
    return del('frontend/web/js/built/**/*');
});

gulp.task('compile', ['clean'], function () {
	var tscConfig    = require('./frontend/tsconfig.json');

    return gulp
        .src('frontend/web/src/ts/**/*.ts')
        .pipe(typescript(tscConfig.compilerOptions))
        .pipe(gulp.dest('frontend/web/js/built'));
});


gulp.task('clean-back', function () {
	return del('backend/web/js/built/**/*');
});

gulp.task('compile-back', ['clean-back'], function () {
	var tscConfig    = require('./backend/tsconfig.json');

	return gulp
		.src('backend/web/src/ts/**/*.ts')
		.pipe(typescript(tscConfig.compilerOptions))
		.pipe(gulp.dest('backend/web/js/built'));
});

gulp.task('default', ['compile']);