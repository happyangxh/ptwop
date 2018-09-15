<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
    <link rel="stylesheet" href="./dist/css/loginreg.min.css">
</head>
<body>
<!-- 引入表头 -->
  <?php
    require_once("nav.php")
  ?>
   <nav class="navbar navbar-default">
      <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <a class="navbar-brand" href="#">
                  <img src="./images/logo.png" alt="">
              </a>
              <span>用户登录</span>
          </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
      </div><!-- /.container-fluid -->
  </nav>
  <!-- 自己的代码 -->
  <div class="container" id="reg">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">用户登录</h3>
        </div>
        <div class="panel-body">
        <p class="text-center">请输入用户名和密码</p>
            <form class="form-horizontal" id="loginForm" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">用户名</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="username" placeholder="请输入用户名">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">密&emsp;码</label>
                    <div class="col-sm-9">
                    <input type="password" class="form-control" name="password" placeholder="请输入密码">
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" class="btn btn-success">立即登录</button>
                      <a href="./register.php">新用户，马上注册</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
 
 <!-- 蒙城 -->
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body" id="loginContent">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭弹窗</button>
      </div>
    </div>
  </div>
</div>

  <!-- 引入尾部 -->
  <?php
    require_once("footer.php")
  ?>
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
    <script src="./dist/js/p2p.min.js"></script>
</body>
</html>