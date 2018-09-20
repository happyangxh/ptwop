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
          <div class="panel panel-default">
            <div class="panel-heading">借款项目</div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>标题</th>
                            <th>时间</th>
                            <th>借款金额(元)	</th>
                            <th>期限	</th>
                            <th>利率	</th>
                            <th>状态</th>
                        </tr>
                    </thead>
                    <tbody id="borrowData">
                        
                    </tbody>
                </table>
            </div>
          </div>
      </div>
    </div>
  </div>
  <!-- 引入尾部 -->
  <?php
  require_once("footer.php")
  ?> 
  <script src="./lib/tmpl/jquery.tmpl.min.js"></script>
    <script type="text/html" id="borrowTmpl">
         <tr>
            <td>
                ${borrowTitle}
            </td>
            <td>${submitDatetime}</td>
            <td>${borrowAmount}</td>
            <td>${monthes2Return}</td>
            <td>${currentRate}%</td>
            <td>
                <label class="text-muted">待发布</label>
            </td>
        </tr>
    </script>
    <script src='./dist/js/borrowAdd.min.js'></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./dist/js/personal.min.js"></script>
    <script>
      let userid = location.href;
      let valid = userid.split("=")[1];
      $("#vals").val(valid);
      //borrowlist列表自动加载
        $.get('./api/borrowList.php',function(data){
            //渲染
            let htmlStr = $("#borrowTmpl").tmpl(data);
            //把渲染后的html渲染到页面
            $("#borrowData").html(htmlStr);
        },"json")
    </script>
</body>
</html>

