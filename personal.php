<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>个人中心</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/personal.min.css">
</head>
<body>
<!-- 引入表头 -->
  <?php
    require_once("header.php")
  ?>
  <!-- 自己的代码 --> 
  <div class="container personal">
    <div class="row">
      <div class="col-xs-12 col-sm-3">
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      投资项目
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      借款项目
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                      <p><a href="#">借款项目</a></p>
                      <p><a href="#">还款明细</a></p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      我的账户
                    </a>
                  </h4>
                </div>
                <div id="collapseThree"  role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    <p class="active"><a href="#">账户信息</a></p>
                    <p><a href="#">实名认证</a></p>
                    <p><a href="#">银行卡管理</a></p>
                    <p><a href="#">登录记录</a></p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree1">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree1" aria-expanded="false" aria-controls="collapseThree">
                    资产详情
                    </a>
                  </h4>
                </div>
                <div id="collapseThree1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree1">
                  <div class="panel-body">
                    <p><a href="#">账户流水</a></p>
                    <p><a href="#">充值明细</a></p>
                    <p><a href="#">提现记录</a></p>
                    <p><a href="#">收款明细</a></p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree2">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree">
                      个人资料
                    </a>
                  </h4>
                </div>
                <div id="collapseThree2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree2">
                  <div class="panel-body">
                    <p><a href="#">账户信息</a></p>
                    <p><a href="#">实名认证</a></p>
                    <p><a href="#">银行卡管理</a></p>
                    <p><a href="#">登录记录</a></p>
                  </div>
                </div>
              </div>
          </div>
      </div>
      <div class="col-xs-12 col-sm-9">
          <div class="panel panel-default panel-body">
              <div class=" clearfix ">
                  <div class="parderimg pull-left">
                      <img src="./images/head_icon.jpg" class="img-responsive" alt="Responsive image">
                  </div>
                  <div class="pull-left">
                      <p>昵 称：源代码教育</p>
                      <p>用户名：小强</p>
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
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./dist/js/p2p.min.js"></script>
</body>
</html>