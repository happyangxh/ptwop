<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable="no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>个人中心</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/personal.min.css">
    <link rel="stylesheet" href="./dist/css/borrowright.min.css">
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
      <div class="col-xs-12 col-sm-9 "  id="perright">
          <button type="button" class="btn btn-primary btn-xs" id="btnOff">隐藏</button>
          <div class="borrow_title">
              <h3>信用借款</h3>
              <p>授信额度：<span>2000 </span>  可借金额：<span>2000</span></p>
          </div>
          <div class="borrow_content">
          <form class="form-inline" id="borrowForm">
              <div class="form-group">
                  <label class="col-sm-3">借款类型</label>
                  <div class="input-group col-sm-3">
                    <select class="form-control" id="vals" name="borrowType">
                      <option value="1">信用贷</option>
                      <option value="2">车易贷</option>
                      <option value="3">房易贷</option>
                    </select>
                  </div>
               </div>
              
              
              <div class="form-group">
                <label class="col-sm-3">借款金额</label>
                <div class="input-group col-sm-3">
                  <input type="text" class="form-control col-sm-6" name="borrowAmount" id="exampleInputAmount" placeholder="">
                  <div class="input-group-addon">元</div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-3">借款利息</label>
                <div class="input-group col-sm-3">
                  <input type="text" name="currentRate" class="form-control col-sm-6" id="exampleInputAmount" placeholder="">
                  <div class="input-group-addon">%</div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-3">借款期限</label>
                <div class="input-group col-sm-3">
                  <select class="form-control col-sm-6" name="monthes2Return">
                    <option>1</option>
                    <option>3</option>
                    <option>6</option>
                    <option>9</option>
                    <option>12</option>
                    <option>24</option>
                  </select>
                    <div class="input-group-addon">月</div>
                </div>
              </div>

                <div class="form-group">  
                  <label class="col-sm-3">还款方式</label>
                  <div class="input-group col-sm-3">
                    <label class="radio-inline">
                      <input type="radio" checked="checked" name="repayment" id="inlineRadio1" value="按月分期"> 按月分期
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="repayment" id="inlineRadio2" value="按月到期"> 按月到期
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3">最小投标</label>
                  <div class="input-group  col-sm-3">
                    <input type="text" name="minAmount" class="form-control col-sm-6" id="exampleInputAmount" placeholder="">
                    <div class="input-group-addon">元</div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3">最大投标</label>
                  <div class="input-group  col-sm-3">
                    <input type="text" name="maxAmount" class="form-control col-sm-6" id="exampleInputAmount" placeholder="">
                    <div class="input-group-addon">元</div>
                  </div>
                </div>
              <div class="form-group">
                  <label class="col-sm-3 ">投标奖金</label>
                  <div class="input-group  col-sm-3">
                    <input type="text" name="rewardAmount" class="form-control col-sm-6" id="exampleInputAmount" placeholder="">
                    <div class="input-group-addon">%</div>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3">招标天数</label>
                <div class="input-group col-sm-3">
                  <select class="form-control col-sm-6" name="disableDays">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                  </select>
                    <div class="input-group-addon">天</div>
                </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-3">借款标题</label>
                  <div class="input-group col-sm-6">
                    <input type="text" name="borrowTitle" class="form-control" id="exampleInputAmount" placeholder="">
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-3">借款描述</label>
                  <div class="input-group col-sm-6">
                    <textarea class="form-control" rows="3" name="description"></textarea>
                  </div>
              </div>

              <p class="text-center"> <button type="button" class="btn btn-primary" id="btn">提交按钮</button></p>
            </form>
          </div>
             
      </div>
    </div>
  </div>
  <!-- 引入尾部 -->
  <?php
  require_once("footer.php")
  ?> 
    <script src='./dist/js/borrowAdd.min.js'></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./dist/js/personal.min.js"></script>
    <script>
      let userid = location.href;
      let valid = userid.split("=")[1];
      $("#vals").val(valid);
    </script>
</body>
</html>

