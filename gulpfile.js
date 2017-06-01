/**
 * Created by Иван on 31.05.2017.
 */

const gulp         = require('gulp');
const del          = require('del');
const typescript   = require('gulp-typescript');
const autoprefixer = require('gulp-autoprefixer');
const tscConfig    = require('./tsconfig.json');


gulp.task('clean', function () {
    return del('frontend/dist/js/**/*');
});

gulp.task('compile', ['clean'], function () {
    return gulp
        .src('frontend/src/ts/**/*.ts')
        .pipe(typescript(tscConfig.compilerOptions))
        .pipe(gulp.dest('frontend/dist/js/'));
});

gulp.task('default', ['compile']);

gulp.task('autoprefixer', function() {
    return gulp.src('frontend/src/less/app.less')
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('frontend/dist/css'))
});