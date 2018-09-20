<?php
  require_once ("nav.php");
?>
<!-- logo导航 -->
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    
      <a class="navbar-brand" href="#">
          <img src="./images/logo.png" alt="">
      </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=" navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav menu " id="menu">
        <li><a href="index.php?menuid=1">首页</a></li>
        <li><a href="invest.php?menuid=2">我要投资</a></li>
        <li  class="active"><a href="borrow.php?menuid=3">我要借款</a></li>
        <li><a href="personal.php?menuid=4">个人中心</a></li>
        <li><a href="#">新手指引</a></li>
        <li><a href="#">关于我们</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<script src="./lib/jquery/jquery.min.js"></script>
<script>
  //获取地址
  let requrl = location.href;
  //分割地址
  let reqarr = requrl.split('=')[1];
  //菜单id
  $("#menu li").eq(reqarr-1).addClass('active').siblings('li').removeClass('active');
</script>