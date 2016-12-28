/**
 * Created by van on 2016/2/20.
 */


var gulp = require('gulp'),
    minifyCSS = require('gulp-minify-css'),
    sass = require('gulp-sass'),
    spriter = require('gulp-css-spritesmith'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    sourcemaps = require('gulp-sourcemaps');


gulp.task('spriterCss', function () {
    return gulp.src('./src/css/global.css')
        .pipe(spriter({
            'imagepath': './src/sprite/',
            'spritedest': './src/img/',
            'spritepath':'../img/'
        }))
        //产出路径
        .pipe(gulp.dest('./'));
});


gulp.task('moveImg', function () {
    return gulp.src('./src/img/*')
        //产出路径
        .pipe(gulp.dest('./dest/img/'));
});


// gulp.task('spritercss', function () {
//     var timestamp = +new Date();
//     //需要自动合并雪碧图的样式文件
//     return gulp.src('./src/css/spriter.css')
//         .pipe(spriter({
//             // 生成的spriter的位置
//             'spriteSheet': './dest/img/sprite.png',
//             // 生成样式文件图片引用地址的路径
//             // 如下将生产：backgound:url(../images/sprite20324232.png)
//             'pathToSpriteSheetFromCSS': '../img/sprite.png'
//         }))
//         //产出路径
//         .pipe(gulp.dest('./dest/css'));
// });


gulp.task('minifyjs', function() {
    return gulp.src('./src/js/*.js')
        .pipe(concat('xstarp.js'))    //合并所有js到main.js
        .pipe(uglify())    //压缩
        .pipe(gulp.dest('./dest/js'));  //输出
});


//todo  lib怎么引用   (配置项通过xstartjs 去引用)



gulp.task('minifycss', function() {
    return gulp.src('./src/css/*.css')
        .pipe(concat('xstarp.css'))
        .pipe(minifyCSS())    //压缩
        .pipe(gulp.dest('./dest/css'));  //输出
});

gulp.task('sassToCss',function (){
        return gulp.src("./src/sass/global.scss")
            .pipe(sourcemaps.init())
            .pipe(sass().on('error', sass.logError))
            .pipe(sourcemaps.write())
            // .pipe(minifyCSS())
            .pipe(gulp.dest("./src/css/"));
});




gulp.task('watch',function (){
    var watcher=gulp.watch('./src/sass/global.scss',['sassToCss','spriterCss']);
    watcher.on('change', function(event) {
        console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
    });
});



/*
sass编译成css
css里面的雪碧图合成
img拷贝到dest,
压缩js,并拷贝到dest
压缩css,并拷贝到dest
 */
gulp.task('dest', [ 'sassToCss','spriterCss','moveImg','minifyjs','minifycss']);