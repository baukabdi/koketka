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
		proxy: 'koketka',
		//server: { baseDir: 'app' },
		notify: false,
		open: true,
		tunnel: false,
	});

	var pagePath = ['app/*.html', 'app/**/*.php', 'app/assets/js/*.js',]

	gulp.watch("app/assets/sass/*.sass", gulp.series('sass'));
	gulp.watch("app/assets/sass/libs.sass", gulp.series('css-libs'));
	gulp.watch(pagePath, gulp.series('codeReload'));
});

gulp.task('watch', function () {
    gulp.watch('../css/**/*.less', gulp.series('less'))
});
/******** /Static Server + watching scss/html files ********/

/******** Code livereload ********/
gulp.task('codeReload', function() {
		return gulp.src([
			'app/assets/**/*.html',
			'app/assets/**/*.php',
			'app/assets/js/*.js',
			])
		.pipe(browserSync.reload({ stream: true }))
});
/******** /Code livereload ********/


/******** JS mix ********/
var scriptsPath = [
		'app/assets/js/jquery.min.js',
		'app/assets/js/popper.min.js',
		'app/assets/js/bootstrap.min.js',
		'app/assets/js/bootstrap-select.min.js',
		'app/assets/js/jquery.inputmask.min.js',
		'app/assets/js/slick.min.js',
		'app/assets/js/jquery.fancybox.min.js',
		'app/assets/js/fotorama.js',
		'app/assets/js/bootstrap-multiselect.js',
		'app/assets/js/jquery.range-min.js',
		'app/assets/js/script.js',
];

gulp.task('scripts', () => {
	return gulp.src(scriptsPath)

		.pipe(concat('libs.min.js'))
		.pipe(terser())
		.pipe(gulp.dest('app/assets/js'));
})
/******** /JS mix ********/

/******** CSS mix ********/
gulp.task('css-libs', function () {
	return gulp.src('app/assets/css/libs.css')

		.pipe(cssnano())
		.pipe(stripCssComments())
		.pipe(rename({ suffix: '.min' }))
		.pipe(gulp.dest('app/assets/css'));
})
/******** /CSS mix ********/

/******** Sass ********/
gulp.task('sass', function () {
	return gulp.src("app/assets/sass/*.sass")
		.pipe(sass({
			outputStyle: "expanded",
		}))
		.pipe(gulp.dest("app/assets/css"))
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
	return gulp.src('app/assets/images/**/*')
		.pipe(imagemin({
			interlaced: true,
			progressive: true,
			svgoPlugins: [{ removeViewBox: false }],
			use: [pngquant()]
		}))
		.pipe(gulp.dest('dist/assets/images'));
})
/******** /Imagemin - compress images ********/

/******** Build ********/
gulp.task('build', done => {
	var buildCss = gulp.src([
		'app/assets/css/bootstrap.min.css',
		'app/assets/css/bootstrap-select.min.css',
		'app/assets/css/normalize.css',
		'app/assets/css/font-awesome.min.css',
		'app/assets/css/slick.css',
		'app/assets/css/jquery.fancybox.min.css',
		'app/assets/css/fotorama.css',
		'app/assets/css/bootstrap-multiselect.css',
		'app/assets/css/jquery.range.css',
		'app/assets/css/main.css',
	])
		.pipe(gulp.dest('dist/assets/css'));

	var cssImages = gulp.src([
				'app/assets/css/**.png',
				'app/assets/css/**.jpg',
		])
	.pipe(gulp.dest('dist/assets/css'));

	var cssFonts = gulp.src('app/assets/css/fonts/**/*')
			.pipe(gulp.dest('dist/assets/css/fonts'));

	var buildSvg = gulp.src('app/assets/images/**/*.svg')
		.pipe(gulp.dest('dist/assets/images'));

	var buildFonts = gulp.src('app/assets/fonts/**/*')
		.pipe(gulp.dest('dist/assets/fonts'));

	var buildJs = gulp.src(scriptsPath)
		.pipe(gulp.dest('dist/assets/js'));

	var buildHtml = gulp.src('app/*.html')
		.pipe(gulp.dest('dist'));

	var buildPHP = gulp.src('app/*.php')
		.pipe(gulp.dest('dist'));

	var buildTXT = gulp.src('app/*.txt')
		.pipe(gulp.dest('dist'));

	done();
})
/******** /Build ********/

gulp.task('start', gulp.series('serve', 'css-libs', 'scripts'));
gulp.task('libs', gulp.series('css-libs', 'scripts'));
gulp.task('done', gulp.series('clean', 'build', 'sass', 'libs', 'img'));



gulp.task('fa-min', function () {
	return gulp.src('fa/font-awesome.css')

		.pipe(cssnano())
		.pipe(rename({ suffix: '.min' }))
		.pipe(gulp.dest('fa'));
})
