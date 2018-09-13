//引入模块
let gulp = require('gulp');

let less = require("gulp-less"); //编译
let path = require("path");
let cleanCSS = require("gulp-clean-css"); // 压缩文件
let rename = require("gulp-rename");  //重命名
let livereload = require("gulp-livereload"); //刷新


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
    .pipe(gulp.dest('./dist/css/less')) //输出路劲

    .pipe(livereload()); //开启热刷新
});



//观察任务
gulp.task("default",function(){

  livereload.listen(); //热刷新

  gulp.watch('./src/less/*.less', ['lesslive']); //观察者
})
