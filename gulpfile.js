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
	img: 'assets/src/img/'
},
dist = {
	css: '.',
	js: 'assets/dist/js/',
	img: 'assets/dist/img/'
},
jsFiles = [
	src.js + 'jquery-3.3.1.js',
	src.js + 'js-plugins/swiper.jquery.min.js',
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
    gulp.src('./sass/style.scss')
    .pipe(sass({outputStyle: 'compressed',linefeed: "crlf",errLogToConsole: true}).on('error', sass.logError))
		.pipe(prefixer({browsers: ['last 12 versions'],cascade: false}))
    .pipe(gulp.dest('.'))
		.pipe(notify({message: 'sass task completed',onLast: true}));
	cb();
});

gulp.task('sass-dev', function(cb) {

	gulp
		.src('./sass/style.scss')
		.pipe(sourcemaps.init())
		.pipe(sourcemaps.identityMap())
		.pipe(sass({linefeed: "crlf",errLogToConsole: true}))
		.pipe(prefixer({browsers: ['last 12 versions'],cascade: false}))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('.'))
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
		.pipe(notify({message: 'js-dev task completed', onLast: true}));
	cb();
});

gulp.task('js-dev', function(cb){
	return gulp
		.src(jsFiles, {sourcemaps: true})
		.pipe(concat('scripts.js'))
		.pipe(gulp.dest(dist.js, {sourcemaps: '.'}))
		.pipe(notify({message: 'js task completed', onLast: true}));
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

gulp.task('img', function (cb) {
	gulp.src('assets/src/img/**/*.+(png|jpg|jpeg|gif|svg)')
		.pipe(cache(imagemin({
			interlaced: true
		})))
		.pipe(gulp.dest('assets/dist/img'));
	cb();
});


/*/!*=============Join tasks==============*!/*/


gulp.task('dev', gulp.parallel('sass-dev', 'js-dev', 'watch'));

gulp.task('prd', gulp.series( 'clean', 'sass', 'js', 'img'));
