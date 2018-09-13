<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/less/index.min.css">
</head>
<body>
<!-- 开始导航 -->
<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"> <span class="glyphicon glyphicon-phone-alt"></span> 028-86261949</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav"></ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">首页</a></li>
        <li><a href="#">小强</a></li>
        <li><a href="#">赶快充值</a></li>
        <li><a href="#">注销</a></li>
        <li><a href="#">帮助</a></li>
        <li><a href="#" data-toggle="tooltip" data-placement="bottom" data-html="true" title=" <img src= './images/contract.png' alt=''>">联系客服</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
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
      <ul class="nav navbar-nav menu ">
        <li class="active"><a href="#">首页</a></li>
        <li><a href="#">我要投资</a></li>
        <li><a href="#">我要借款</a></li>
        <li><a href="#">个人中心</a></li>
        <li><a href="#">新手指引</a></li>
        <li><a href="#">关于我们</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!--轮播 -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="./images/banner01.jpg" alt="...">
      <div class="carousel-caption">

      </div>
    </div>
    <div class="item">
      <img src="./images/banner01.jpg" alt="...">
      <div class="carousel-caption">

      </div>
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- 三大主流 -->
<div class="container tablelist">
    <div class="row">
        <div class="col-xs-12 col-sm-4">
            <h4>投资理财</h4>
            <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
        </div>
        <div class="col-xs-12 col-sm-4">
            <h4>投资理财</h4>
            <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
        </div>
        <div class="col-xs-12 col-sm-4">
            <h4>投资理财</h4>
            <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
        </div>
    </div>
</div>

<!-- 进行中借款列表 -->
<div class="container lefth3">
  <div class="row">
      <!-- <div class="col-xs-6 col-sm-12"> -->
        <div class="pull-left"><h3>进行中借款</h3></div>
        <div class="pull-right"><a href="#">进行投资列表</a></div>
        <table  class="table table-hover">
            <thead>
                <tr>
                    <th>借款人</th>
                    <th>借款标题</th>
                    <th>年利率</th>
                    <th>金额</th>
                    <th>还款方式</th>
                    <th>进度</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <td>张山</td>
                <td>给我2000度过难关</td>
                <td>10.00%</td>
                <td>2,000.00</td>
                <td>按月分期付款</td>
                <td>90.00%</td>
                <td><button class="btn btn-danger" type="submit">查看</button></td>
                </tr>
                <tr>
                    <td>张山</td>
                    <td>给我2000度过难关</td>
                    <td>10.00%</td>
                    <td>2,000.00</td>
                    <td>按月分期付款</td>
                    <td>90.00%</td>
                    <td><button class="btn btn-danger" type="submit">查看</button></td>
                </tr>
            </tbody>
        </table>
      <!-- </div> -->
  </div>
   

</div>
<!--最新咨询 -->
<div class="container lefth3 newlist">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="pull-left"><h3>企业最新资讯</h3></div>
          <div class="pull-right"><a href="#">更多咨询</a></div>
          <table  class="table table-hover">
              <tbody>
              <tr>
                    <td><a href="#">央视力挺互联网金融</a></td>
                    <td><a href="#">发表日期：2015-03-23</a></td>
                  </tr>
                  <tr>
                      <td><a href="#">央视力挺互联网金融</a></td>
                      <td><a href="#">发表日期：2015-03-23</a></td>
                  </tr>
                  <tr>
                      <td><a href="#">央视力挺互联网金融</a></td>
                      <td><a href="#">发表日期：2015-03-23</a></td>
                  </tr>
              </tbody>
          </table>
        </div>
        <div class="col-xs-12 col-sm-6">
        <div class="pull-left"><h3>用户反馈</h3></div>
          <div class="pull-right"><a href="#">更多咨询</a></div>
          <table  class="table table-hover">
              <tbody>
                <tr>
                    <td><a href="#">央视力挺互联网金融</a></td>
                    <td><a href="#">发表日期：2015-03-23</a></td>
                  </tr>
                  <tr>
                      <td><a href="#">央视力挺互联网金融</a></td>
                      <td><a href="#">发表日期：2015-03-23</a></td>
                  </tr>
                  <tr>
                      <td><a href="#">央视力挺互联网金融</a></td>
                      <td><a href="#">发表日期：2015-03-23</a></td>
                  </tr>
              </tbody>
          </table>
        </div>
    </div>
</div>
<!--理想检验 -->
<div class="container lefth3 newlist">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="pull-left"><h3>理财经验</h3></div>
          <div class="pull-right"><a href="#">更多咨询</a></div>
          <table  class="table table-hover">
              <tbody>
              <tr>
                    <td><a href="#">央视力挺互联网金融</a></td>
                    <td><a href="#">发表日期：2015-03-23</a></td>
                  </tr>
                  <tr>
                      <td><a href="#">央视力挺互联网金融</a></td>
                      <td><a href="#">发表日期：2015-03-23</a></td>
                  </tr>
                  <tr>
                      <td><a href="#">央视力挺互联网金融</a></td>
                      <td><a href="#">发表日期：2015-03-23</a></td>
                  </tr>
              </tbody>
          </table>
        </div>
        <div class="col-xs-12 col-sm-6">
        <div class="pull-left"><h3>活动分享</h3></div>
          <div class="pull-right"><a href="#">更多咨询</a></div>
          <table  class="table table-hover">
              <tbody>
                <tr>
                    <td><a href="#">央视力挺互联网金融</a></td>
                    <td><a href="#">发表日期：2015-03-23</a></td>
                  </tr>
                  <tr>
                      <td><a href="#">央视力挺互联网金融</a></td>
                      <td><a href="#">发表日期：2015-03-23</a></td>
                  </tr>
                  <tr>
                      <td><a href="#">央视力挺互联网金融</a></td>
                      <td><a href="#">发表日期：2015-03-23</a></td>
                  </tr>
              </tbody>
          </table>
        </div>
    </div>
</div>
<div class="container-fluid footer">
  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8">
          <p>专业Java培训、PHP培训、UI培训、iOS培训、高级Web前端培训机构</p>
          <p>版权所有： 2006-2015成都源代码教育咨询有限公司</p>
          <p>地  址： 成都市高新区府城大道西段399号天府新谷1号楼620-625</p>
          <p>电  话： 028-86261949  / 400-808-6840  邮箱： yuandaima@itsource.cn</p>
          <p> <a href="#">蜀ICP备14030149号-1  </a> <a href="#">蜀公网安备510114990541</a> </p>
        </div>
        <div class="col-xs-12 col-sm-2">
            <h5>官方微博：</h5>
            <a href=""><img src="../images/tecent.png" alt="" class="img-responsive"></a>
            <a href=""><img src="../images/sina.png" alt="" class="img-responsive"></a>
        </div>
        <div class="col-xs-12 col-sm-2">
            <h5>官方微信：</h5>
            <img src="./images/wx.jpg" alt="..." class="img-rounded"> 
        </div>
    </div>
  </div>
 
</div>
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./src/js/p2p.js"></script>
</body>
</html>