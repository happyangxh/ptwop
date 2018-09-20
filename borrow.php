<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/header.min.css">
    <link rel="stylesheet" href="./dist/css/footer.min.css">
    <link rel="stylesheet" href="./dist/css/borrow.min.css">
</head>
<body>
<!-- 引入表头 -->
  <?php
    require_once("header.php")
  ?>
  <!-- 自己的代码 -->
  <div class="container topcont">
    <div class="row">
        <div class="col-xs-12 col-sm-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">信用贷</h3>
              </div>
              <div class="panel-body">
                <p>可借金额 <i> ¥ 2,000.00</i></p>
                <p><a href="#">申请条件</a></p>
                <dl>
                  <dt>仅限成都地区</dt>
                  <dd><span>填写基本资料</span></dd>
                  <dd><span>身份认证</span></dd>
                  <dd><span>视频认证</span></dd>
                </dl>
                <button type="button" class="btn  btn-info"> <a href="borrow_apply.php?borrowType=1">立刻申请</a> </button>
              </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
          <div class="panel panel-default">
                <div class="panel-heading cad">
                  <h3 class="panel-title ">车易贷</h3>
                </div>
                <div class="panel-body">
                  <p>可借金额 <i> ¥ 2,000.00</i></p>
                  <p><a href="#">申请条件</a></p>
                  <dl>
                    <dt>仅限成都地区</dt>
                    <dd><span>填写基本资料</span></dd>
                    <dd><span>身份认证</span></dd>
                    <dd><span>视频认证</span></dd>
                  </dl>
                  <a href="borrow_apply.php?borrowType=2&menuid=3"><button type="button" class="btn  btn-info">立刻申请 </button></a>
                </div>
              </div>
        </div>
        <div class="col-xs-12 col-sm-4 module">
          <div class="panel panel-default">
                <div class="panel-heading cad2">
                  <h3 class="panel-title">房易贷</h3>
                </div>
                <div class="panel-body">
                  <p>可借金额 <i> ¥ 2,000.00</i></p>
                  <p><a href="#">申请条件</a></p>
                  <dl>
                    <dt>仅限成都地区</dt>
                    <dd><span>填写基本资料</span></dd>
                    <dd><span>身份认证</span></dd>
                    <dd><span>视频认证</span></dd>
                  </dl>
                  <button type="button" class="btn  btn-info"> <a href="borrow_apply.php?borrowType=3">立刻申请</a> </button>
                </div>
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
</body>
</html>