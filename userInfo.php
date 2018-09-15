<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>个人资料</title>
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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">个人资料</h3>
                </div>
                <div class="panel-body">
                <form class="form-horizontal">
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
                    <label for="inputPassword3" class="col-sm-3 control-label">确认密码</label>
                    <div class="col-sm-9">
                    <input type="password" class="form-control" name="confirmPass" placeholder="请输入确认号码"">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">电话号码</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="phone" placeholder="请输入电话号码""">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">邮&emsp;箱</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="email" placeholder="请输入邮箱号">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-success">立即注册</button>
                    </div>
                </div>
            </form>
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