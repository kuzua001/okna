/**
 * Created by Иван on 31.05.2017.
 */

const gulp = require('gulp');
const autoprefixer = require('gulp-autoprefixer');

gulp.task('autoprefixer', function() {
    return gulp.src('frontend/src/less/app.less')
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('frontend/dist/css'))
});