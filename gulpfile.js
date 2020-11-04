/* Created by Sergey on 15.05.2017.*/

/*===========GULP==============*/
const gulp = require('gulp'),
	del = require('del'),
	notify = require('gulp-notify'),
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

var src = {
	css: 'assets/src/sass/',
	js: 'assets/src/js/',
	img: 'assets/src/img/',
	font: 'assets/src/fonts/'
},
dist = {
	css: '.',
	js: 'assets/dist/js/',
	img: 'assets/dist/img/',
	font: 'assets/dist/fonts/'
},
jsFiles = [
	src.js + 'jquery-3.3.1.js',
	src.js + 'js-plugins/swiper.jquery.min.js',
	src.js + 'js-plugins/jquery.matchHeight.js',
	src.js + 'js-plugins/smooth-scroll.js',
	src.js + 'js-plugins/segment.js',
	src.js + 'js-plugins/bootstrap.js',
	src.js + 'main.js'
];

gulp.task('clean', function(){
	var files = [
		'assets/dist/**',
		'!assets/dist',
		'styles.css',
		'styles.css.map'
	];
	return del(files);
});

gulp.task('sass', function(cb) {
    return gulp
			.src(src.css + 'style.scss')
	    .pipe(sass({outputStyle: 'compressed',linefeed: "crlf",errLogToConsole: true}).on('error', sass.logError))
			.pipe(prefixer({browsers: ['last 12 versions'],cascade: false}))
	    .pipe(gulp.dest(dist.css))
			.pipe(notify({message: 'sass task completed',onLast: true}));
	cb();
});

gulp.task('sass-dev', function(cb) {
	return gulp
		.src(src.css + 'style.scss')
		.pipe(sourcemaps.init())
		.pipe(sourcemaps.identityMap())
		.pipe(sass({linefeed: "crlf",errLogToConsole: true}))
		.pipe(prefixer({browsers: ['last 12 versions'],cascade: false}))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest(dist.css))
		// .pipe(plumber())
		// .pipe(sass({linefeed: "crlf",errLogToConsole: true}))
		.pipe(notify({message: 'sass-dev task completed',onLast: true}))
		.pipe(browserSync.reload({stream: true}));
	cb();
});

gulp.task('js', function(cb){
	return gulp
		.src(jsFiles)
		.pipe(concat('scripts.js'))
		.pipe(uglify())
		.pipe(gulp.dest(dist.js))
		.pipe(notify({message: 'js task completed', onLast: true}));
	cb();
});

gulp.task('js-dev', function(cb){
	return gulp
		.src(jsFiles, {sourcemaps: true})
		.pipe(concat('scripts.js'))
		.pipe(gulp.dest(dist.js, {sourcemaps: '.'}))
		.pipe(notify({message: 'js-dev task completed', onLast: true}))
		.pipe(browserSync.reload({stream: true}));
	cb();
});

gulp.task('font', function(cb){
	return gulp
		.src(src.font + '**/*')
		.pipe(gulp.dest(dist.font))
		.pipe(notify({message: 'font task completed', onLast: true}));
	cb();
});

gulp.task('img', function (cb) {
	return gulp
		.src(src.img + '**/*.+(png|jpg|jpeg|gif|svg)')
		.pipe(cache(imagemin({
			interlaced: true
		})))
		.pipe(gulp.dest(dist.img))
		.pipe(notify({message: 'img task completed', onLast: true}))
		.pipe(browserSync.reload({stream: true}));
	cb();
});

/*/!*===========Watch==============*!/*/

gulp.task('watch', function(cb) {

	browserSync.init({
		// server: "./html"
		// port: 80,
		proxy: "riowex.local"
	});

	gulp.watch(src.css + '**/*.scss', gulp.series('sass-dev'));
	gulp.watch(src.js + '**/*.js', gulp.series('js-dev'));
	// gulp.watch(src.img + '**/*.+(png|jpg|jpeg|gif|svg)', gulp.series('img'));
	cb();
});

/*/!*=============Join tasks==============*!/*/


gulp.task('dev', gulp.series('sass-dev', 'js-dev', 'font', 'watch'));

gulp.task('prd', gulp.series( 'clean', 'sass', 'js', 'img', 'font'));
