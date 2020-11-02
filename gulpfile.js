/* Created by Sergey on 15.05.2017.*/

/*===========GULP==============*/
const gulp = require('gulp'),
	sass = require('gulp-sass'),
	plumber = require('gulp-plumber'),
	browserSync = require('browser-sync'),
	imagemin = require('gulp-imagemin'),
	prefixer = require('gulp-autoprefixer'), // automatically prefixes to css properties
	uglify = require('gulp-uglify'),
	concat = require('gulp-concat'),
	zip = require('gulp-zip'),
	replace = require('gulp-replace'),
	sourcemaps = require('gulp-sourcemaps'),
	cache = require('gulp-cache');


/*===========Compile SCSS==============*/

//
// gulp.task('sass', function(cb) {
//
//     gulp.src('./sass/**/*.scss')
// 		.pipe(sourcemaps.init())
// 		.pipe(sourcemaps.identityMap())
//     .pipe(sass(
// 			{
// 				linefeed: "crlf"
// 			}
// 		))
// 		.pipe(prefixer(
// 			{
// 				browsers: ['last 12 versions'],
// 				cascade: false
// 			}
// 		))
// 		.pipe(sourcemaps.write())
//     .pipe(gulp.dest('./css'))
//     .pipe(plumber())
//     .pipe(sass({errLogToConsole: true}))
//     .pipe(browserSync.reload({
//         stream: true
//     }));
// 	cb();
// });

gulp.task('sass', function(cb) {
    gulp.src('./sass/style.scss')
    .pipe(sass({outputStyle: 'compressed',linefeed: "crlf",errLogToConsole: true}).on('error', sass.logError))
		.pipe(prefixer({browsers: ['last 12 versions'],cascade: false}))
    .pipe(gulp.dest('.'));
	cb();
});

gulp.task('sass-dev', function(cb) {

    gulp.src('./sass/style.scss')
		.pipe(sourcemaps.init())
		.pipe(sourcemaps.identityMap())
    .pipe(sass({linefeed: "crlf",errLogToConsole: true}))
		.pipe(prefixer({browsers: ['last 12 versions'],cascade: false}))
		.pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('.'))
    // .pipe(plumber())
    // .pipe(sass({linefeed: "crlf",errLogToConsole: true}))
    .pipe(browserSync.reload({stream: true}));
	cb();
});

/*/!*===========Watch==============*!/*/

gulp.task('watch', function(cb) {

	browserSync.init({
		server: "./html"
	});

	gulp.watch('html/sass/**/*.scss', gulp.series('sass'));
	cb();
});

/*/!*===========Minimization IMAGE==============*!/*/

gulp.task('images', function (cb) {
	gulp.src('html/img/**/*.+(png|jpg|jpeg|gif|svg)')
		.pipe(cache(imagemin({
			interlaced: true
		})))
		.pipe(gulp.dest('html/img'));
	cb();
});


/*/!*=============Join tasks==============*!/*/


gulp.task('dev', gulp.parallel('sass-dev', 'watch'));

gulp.task('build', gulp.series( 'sass', 'images'));
