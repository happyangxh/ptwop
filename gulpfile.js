//引入模块
let gulp = require('gulp');

let less = require("gulp-less"); //编译
let path = require("path");
let cleanCSS = require("gulp-clean-css"); // 压缩文件
let rename = require("gulp-rename");  //重命名
let livereload = require("gulp-livereload"); //刷新
let uglify  = require("gulp-uglify"); // 压缩js文件
//js支持es6
let babel = require("gulp-babel");
//配置任务
gulp.task('lesslive', function () {
  return gulp.src('./src/less/*.less')
    .pipe(less({
      paths: [ path.join(__dirname, 'less', 'includes') ]
    }))
    .pipe(cleanCSS({compatibility: 'ie8'})) //压缩文件
    .pipe(rename(function (path) {
      // path.dirname += "/ciao"; //目录名
      path.basename += ".min"; //文件名
      // path.extname = ".md"; //后缀名
    }))
    .pipe(gulp.dest('./dist/css')) //输出路劲

    .pipe(livereload()); //开启热刷新
});
//压缩js
gulp.task("uglifyJS",function () {
  gulp.src('./src/js/*.js') //源文件
        .pipe(babel({
          presets: ['@babel/env']
      }))
      .pipe(uglify()) //插件方法调用
      .pipe(rename(function (path) {
          path.basename += ".min"; //文件名： 原来的文件名+新增的文件
        })) //重命名
      .pipe(gulp.dest('./dist/js')); //输出目标
});

//观察任务
gulp.task("default",function(){

  livereload.listen(); //热刷新

  gulp.watch('./src/less/*.less', ['lesslive']); //观察者
  gulp.watch('./src/js/*.js', ['uglifyJS']); //观察者
})
