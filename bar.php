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
             <div class="col-xs-6 col-sm-9" id="perright">
                <div class="panel panel-default panel-body">
                  <button type="button" class="btn btn-primary btn-xs" id="btnOff">隐藏</button>
                <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">借款项目报表</h3>
                </div>
                <div class="panel-body">
                  <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
                  <div id="main" style="height:400px"></div>
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
    <script src="./lib/echarts/echarts-all.js"></script>
    <script src="./dist/js/bar.min.js"></script>
    <script>
      $.get("./api/barData.php",function (result) {
        option.legend.data=result.title; //修改统计的图例数据
        option.series[0].data=result.data; //修改统计的序列数据

        myChart.hideLoading(); //隐藏loading动画
        myChart.setOption(option); //把新的配置设置到报表中
    
},"json");
    </script>
</body>
</html>

