<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable="no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>个人中心</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/personal.min.css">
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./dist/js/look.min.js"></script>
</head>
<body>
<!-- 引入表头 -->
  <?php
    require_once("header.php");
  ?>
  <!-- 自己的代码 --> 
  <div class="container personal">
    <div class="row">
      <?php
          require_once('left.php')
      ?>
      <div class="col-xs-12 col-sm-9" id="perright">
          <div class="panel panel-default panel-body">
          <button type="button" class="btn btn-primary btn-xs" id="btnOff">隐藏</button>
              <div class=" clearfix ">
                  <div class="parderimg pull-left">
                      <img src="./images/head_icon.jpg" class="img-responsive" alt="Responsive image">
                  </div>
                  <div class="pull-left">
                      <p>昵 称：源代码教育</p>
                      <p>用户名：<span id="name"></span></p>
                      <p>最后登录时间：2016-10-25 15:30:10</p>
                  </div>
              </div>
              <div class="cimg">
                <div class="col-xs-12 col-sm-4">
                  <p>总金额：<span>10000元</span> </p>
                </div>
                <div class="col-xs-12 col-sm-4">
                  <p>可用金额：<span>8000元</span> </p>
                </div>
                <div class="col-xs-12 col-sm-4">
                  <p>冻结金额：<span>2000元</span> </p>
                </div>
              </div>
              <div class="text-center">
                <button type="button" class="btn btn-lg btn-primary">账户充值</button>
                <button type="button" class="btn  btn-lg btn-danger">账户提现</button>
              </div>
              <div class="messagespadd">
                  <div class="col-xs-12 col-sm-4">
                    <div class="leftpadd">
                      <h5>实名认证</h5>
                      <p>未认证 <a href="#">马上认证</a></p>
                    </div>
                    <p>实名认证之后才能在平台投资</p>
                  </div>
                  <div class="col-xs-12 col-sm-4">
                    <div class="leftpadd1">
                      <h5>实名认证</h5>
                      <p>未认证 <a href="#">查看</a></p>
                    </div>
                    <p>可以收到系统操作信息,并增加安全性</p>
                  </div>
                  <div class="col-xs-12 col-sm-4">
                    <div class="leftpadd2">
                      <h5>实名认证</h5>
                      <p>未认证 <a href="#">查看</a></p>
                    </div>
                    <p>您可以设置邮箱来接收重要信息</p>
                  </div>
                  <div class="col-xs-12 col-sm-4">
                    <div class="leftpadd3">
                      <h5>实名认证</h5>
                      <p>未认证 <a href="#">查看</a></p>
                    </div>
                    <p>实名认证之后才能在平台投资</p>
                  </div>
              </div>
          </div>  
      </div>
    </div>
  </div>
  <!-- 引入尾部 -->
  <?php
  require_once("footer.php")
  ?> 
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./dist/js/personal.min.js"></script>
    <script>
      $.get('./api/look.php',function(data){
         console.log(data)
          if(data.isSuccess){
            $('#name').text(data.username)
          }
      },"json");
    </script>
</body>
</html>