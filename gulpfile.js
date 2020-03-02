const gulp = require('gulp'),
			sass = require('gulp-sass'),
			autoprefixer = require('gulp-autoprefixer'),
			browserSync = require('browser-sync'),
			terser = require('gulp-terser'),
			stripCssComments = require('gulp-strip-css-comments'),
			concat = require('gulp-concat'),
			cssnano = require('gulp-cssnano'),
			rename = require('gulp-rename'),
			del = require('del'),
			imagemin = require('gulp-imagemin'),
			pngquant = require('imagemin-pngquant');

/******** Static Server + watching scss/html files ********/
gulp.task('serve', function () {

	browserSync({
		//proxy: 'photographer_wp',
		server: {
			baseDir: 'app',
		},
		notify: false,
		open: true,
		tunnel: false,
	});

	gulp.watch("app/sass/*.sass", gulp.series('sass'));
	gulp.watch("app/sass/libs.sass", gulp.series('css-libs'));
	gulp.watch(['app/*.html', 'app/**/*.php', 'app/js/*.js',], gulp.series('codeReload'));

});
/******** /Static Server + watching scss/html files ********/

/******** Code livereload ********/
gulp.task('codeReload', function() {
		return gulp.src([
			'app/**/*.html',
			'app/**/*.php',
			'app/js/*.js',
			])
		.pipe(browserSync.reload({ stream: true }))
});
/******** /Code livereload ********/


/******** JS mix ********/
gulp.task('scripts', () => {
	return gulp.src([
		'app/libs/jquery/dist/jquery.min.js',
		'app/libs/slick-carousel/slick/slick.js',
		'app/libs/lc-lightbox-lite/js/lc_lightbox.lite.min.js',
		'app/libs/inputmask/dist/jquery.inputmask.min.js',
	])

		.pipe(concat('libs.min.js'))
		.pipe(terser())
		.pipe(gulp.dest('app/js'));
})
/******** /JS mix ********/

/******** CSS mix ********/
gulp.task('css-libs', function () {
	return gulp.src('app/css/libs.css')

		.pipe(cssnano())
		.pipe(stripCssComments())
		.pipe(rename({ suffix: '.min' }))
		.pipe(gulp.dest('app/css'));
})
/******** /CSS mix ********/


/******** Sass ********/
gulp.task('sass', function () {
	return gulp.src("app/sass/*.sass")
		.pipe(sass({
			outputStyle: "expanded",
		}))
		.pipe(gulp.dest("app/css"))
		.pipe(autoprefixer({ browsers: ['last 15 versions', '> 1%', 'ie 8', 'ie 7'], cascade: true }))
		.pipe(browserSync.stream());
});
/******** /Sass ********/


/******** Clean dist folder ********/
gulp.task('clean', function (cleaning) {
	cleaning();
	return del.sync('dist');
})
/******** /Clean dist folder ********/


/******** Imagemin - compress images ********/
gulp.task('img', function () {
	return gulp.src('app/images/**/*')
		.pipe(imagemin({
			interlaced: true,
			progressive: true,
			svgoPlugins: [{ removeViewBox: false }],
			use: [pngquant()]
		}))
		.pipe(gulp.dest('dist/images'));
})
/******** /Imagemin - compress images ********/

/******** Build ********/
gulp.task('build', done => {
	var buildCss = gulp.src([
		'app/css/main.css',
		'app/css/libs.min.css',
	])
		.pipe(gulp.dest('dist/css'));

	var cssFonts = gulp.src('app/css/fonts/**/*')
			.pipe(gulp.dest('dist/css/fonts'));

	var buildSvg = gulp.src('app/images/**/*.svg')
		.pipe(gulp.dest('dist/images'));

	var buildFonts = gulp.src('app/fonts/**/*')
		.pipe(gulp.dest('dist/fonts'));

	var buildJs = gulp.src([
		'app/js/script.js',
		'app/js/libs.min.js',
	])
		.pipe(gulp.dest('dist/js'));

	var buildHtml = gulp.src('app/*.html')
		.pipe(gulp.dest('dist'));

	var buildPHP = gulp.src('app/*.php')
		.pipe(gulp.dest('dist'));

	done();
})
/******** /Build ********/

gulp.task('start', gulp.series('serve', 'css-libs', 'scripts'));
gulp.task('done', gulp.series('clean', 'build', 'sass', 'scripts', 'img'));
gulp.task('libs', gulp.series('css-libs', 'scripts'));