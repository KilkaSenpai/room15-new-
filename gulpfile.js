var gulp         = require('gulp'),
    sass         = require('gulp-sass'),
    browserSync  = require('browser-sync'),
    concat       = require('gulp-concat'), 
    uglify       = require('gulp-uglifyjs'), 
    del          = require('del'),
    autoprefixer = require('gulp-autoprefixer'),
    size         = require('gulp-filesize'),
    concatCss    = require('gulp-concat-css');

gulp.task('sass-watch', function(){ 
    return gulp.src('wp-content/themes/room15/assets/scss/main.scss')
        .pipe(sass()) 
        .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true })) 
        .pipe(gulp.dest('wp-content/themes/room15/assets/css'))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('scripts-watch', function() {
    return gulp.src(['wp-content/themes/room15/assets/js/*.js', 'wp-content/themes/room15/assets/js/libs/**/*.js'])
    .pipe(browserSync.reload({ stream: true }));
});

gulp.task('html-watch', function() {
    return gulp.src('wp-content/themes/room15/assets/*.html')
    .pipe(browserSync.reload({ stream: true }));
});

gulp.task('browser-sync', function() {
    browserSync({ 
        proxy: "room15.loc",
        notify: false
    });
});

gulp.task('clean', async function() {
    return del.sync('dist/'); 
});


gulp.task('prebuild', async function() {

    var minCss = gulp.src('wp-content/themes/room15/assets/css/**/*.css')
        .pipe(concatCss('style.min.css'))
        .pipe(gulp.dest('dist/css'));

    var minJs = gulp.src([
            'wp-content/themes/room15/assets/js/main.js'
        ])
        .pipe(concat('main.min.js'))
        .pipe(uglify()) 
        .pipe(gulp.dest('dist/js'));

    var buildHtml = gulp.src('wp-content/themes/room15/assets/*.html') 
        .pipe(gulp.dest('dist'));    

    var buildJs = gulp.src('wp-content/themes/room15/assets/js/**/*') 
        .pipe(gulp.dest('dist/js'))
        .pipe(size());

    var buildCss = gulp.src(['wp-content/themes/room15/assets/css/**/*'])
        .pipe(gulp.dest('dist/css'))
        .pipe(size());

    var builImg = gulp.src('wp-content/themes/room15/assets/img/**/*')
        .pipe(gulp.dest('dist/img'));

    var buildFonts = gulp.src('wp-content/themes/room15/assets/fonts/**/*') 
        .pipe(gulp.dest('dist/fonts'));

});

gulp.task('watch', function() {
    gulp.watch('wp-content/themes/room15/assets/scss/**/*.scss', gulp.parallel('sass-watch'));
    gulp.watch('wp-content/themes/room15/assets/*.html', gulp.parallel('html-watch')); 
    gulp.watch(['wp-content/themes/room15/assets/js/**/*.js', 'wp-content/themes/room15/assets/js/libs/**/*.js'], gulp.parallel('scripts-watch'));
});

gulp.task('default', gulp.parallel('sass-watch', 'scripts-watch', 'html-watch', 'browser-sync', 'watch'));
gulp.task('build', gulp.parallel('clean', 'prebuild'));