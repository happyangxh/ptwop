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
<!-- 引入头部 -->
<?php
    require_once("header.php")
?>
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
<div class="container">
    <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading clearfix"> 
       <h3  class="pull-left">进行中借款</h3>
       <a href="#" class="pull-right">进行投资列表</a>
    </div>
    <!-- Table -->
    <table  class="table table-hover">
        <thead>
            <tr>
                <th>借款人</th>
                <th class="hidetitle">借款标题</th>
                <th>年利率</th>
                <th>金额</th>
                <th class="hidetitle">还款方式</th>
                <th>进度</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>张山</td>
            <td class="hidetitle">给我2000度过难关</td>
            <td>10.00%</td>
            <td>2,000.00</td>
            <td class="hidetitle">按月分期付款</td>
            <td>90.00%</td>
            <td><button class="btn btn-danger" type="submit">查看</button></td>
            </tr>
            <tr>
                <td>张山</td>
                <td class="hidetitle">给我2000度过难关</td>
                <td>10.00%</td>
                <td>2,000.00</td>
                <td class="hidetitle">按月分期付款</td>
                <td>90.00%</td>
                <td><button class="btn btn-danger" type="submit">查看</button></td>
            </tr>
        </tbody>
    </table>
    </div>
</div>
<!--最新咨询 -->
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3  class="pull-left">企业最新资讯</h3>
                    <a href="#" class="pull-right">更多咨询</a>
                </div>
                <div class="panel-body">
                   <ul>
                        <li><a href="#">央视力挺互联网金融</a><a href="#" class="pull-right">发表日期：2015-03-23</a></li>
                        <li><a href="#">央视力挺互联网金融</a><a href="#" class="pull-right">发表日期：2015-03-23</a></li>
                        <li><a href="#">央视力挺互联网金融</a><a href="#" class="pull-right">发表日期：2015-03-23</a></li>
                   </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3  class="pull-left">企业最新资讯</h3>
                    <a href="#" class="pull-right">更多咨询</a>
                </div>
                <div class="panel-body">
                   <ul>
                        <li><a href="#">央视力挺互联网金融</a><a href="#" class="pull-right">发表日期：2015-03-23</a></li>
                        <li><a href="#">央视力挺互联网金融</a><a href="#" class="pull-right">发表日期：2015-03-23</a></li>
                        <li><a href="#">央视力挺互联网金融</a><a href="#" class="pull-right">发表日期：2015-03-23</a></li>
                   </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3  class="pull-left">企业最新资讯</h3>
                    <a href="#" class="pull-right">更多咨询</a>
                </div>
                <div class="panel-body">
                   <ul>
                        <li><a href="#">央视力挺互联网金融</a><a href="#" class="pull-right">发表日期：2015-03-23</a></li>
                        <li><a href="#">央视力挺互联网金融</a><a href="#" class="pull-right">发表日期：2015-03-23</a></li>
                        <li><a href="#">央视力挺互联网金融</a><a href="#" class="pull-right">发表日期：2015-03-23</a></li>
                   </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3  class="pull-left">企业最新资讯</h3>
                    <a href="#" class="pull-right">更多咨询</a>
                </div>
                <div class="panel-body">
                   <ul>
                        <li><a href="#">央视力挺互联网金融</a><a href="#" class="pull-right">发表日期：2015-03-23</a></li>
                        <li><a href="#">央视力挺互联网金融</a><a href="#" class="pull-right">发表日期：2015-03-23</a></li>
                        <li><a href="#">央视力挺互联网金融</a><a href="#" class="pull-right">发表日期：2015-03-23</a></li>
                   </ul>
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
    <script src="./dist/js/p2p.min.js"></script>
</body>
</html>