const { src, dest, watch } = require('gulp');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const autoprefix = require('gulp-autoprefixer');
const concatCSS = require('gulp-concat-css');
const cleanCSS = require('gulp-clean-css');
const browserSync = require('browser-sync').create();

function adminCSS() {
	return src('src/css/admin.css')
		.pipe(autoprefix())
		.pipe(concatCSS('admin.css'))
		.pipe(cleanCSS({ format: { breaks: { afterComment: true } } }))
		.pipe(dest('./css/'))
		.pipe(browserSync.stream());
}

function css() {
	return src([
		'src/css/style.css',
		'node_modules/bootstrap/dist/css/bootstrap-grid.min.css',
		'src/css/custom.css',
	])
		.pipe(autoprefix())
		.pipe(concatCSS('style.css'))
		.pipe(cleanCSS({ format: { breaks: { afterComment: true } } }))
		.pipe(dest('./'))
		.pipe(browserSync.stream());
}

function js() {
	return src(['src/js/custom.js'])
		.pipe(babel({ presets: ['@babel/env'] }))
		.pipe(concat('script.js'))
		.pipe(uglify())
		.pipe(dest('./js/'))
		.pipe(browserSync.stream());
}

exports.default = () => {
	browserSync.init({
		proxy: 'http://localhost/cwc',
		port: 3000,
		open: false,
	});
	watch('./*.php').on('change', browserSync.reload);
	watch('src/css/admin.css', adminCSS);
	watch(['src/css/*.css', '!src/css/admin.css'], css);
	watch('src/js/*.js', js);
};
