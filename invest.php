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
    <link href="./lib/page/jquery.pagination.css" rel="stylesheet" />
    <link rel="stylesheet" href="./dist/css/invest.min.css">
</head>
<body>
<!-- 引入表头 -->
  <?php
    require_once("header.php")
  ?>
  <!-- 自己的代码 -->
  <div class="container">
    <h4>投资列表</h4>
    <div class="titleList">
      <span>状态</span>
      <div class="btn-group" role="group" aria-label="...">
        <button type="button" class="btn btn-default active">全部</button>
        <button type="button" class="btn btn-default">招标中</button>
        <button type="button" class="btn btn-default">还款中</button>
      </div>
    </div>
    <table class="table el-table table-hover">
			<thead>
				<tr>
					<th>借款人</th>
					<th width="180px">借款标题</th>
					<th>年利率</th>
					<th>金额</th>
					<th>还款方式</th>
					<th>进度</th>
					<th width="80px">操作</th>
				</tr>
			</thead>
			<tbody id="content">
      </tbody>
    </table>
    <div id="page" class="m-pagination"></div>      
  </div>
  <!-- 引入尾部 -->
  <?php
  require_once("footer.php")
  ?>
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./lib/tmpl/jquery.tmpl.min.js"></script>
    <script src="./lib/page/jquery.pagination-1.2.7.min.js"></script>
    <!-- 制作模板 -->
    <script type="text/html" id="contentList">
      <tr>
          <td>zs</td>
          <td>${borrowTitle}</td>
          <td> ${currentRate}%</td>
          <td>${borrowAmount}</td>
          <td> ${repayment}</td>
          <td>100.00%</td>
          <td><a class="btn btn-danger btn-sm" href="borrow_info.html?id=7">查看</a></td>
        </tr>
    </script>
    <script>
      // //发送ajax到后台请求数据
      // $.post('./api/investList.php',function(data){
      //   //渲染
      //   let htmlStr = $("#contentList").tmpl(data);
      //   //把渲染的html更新到页面
      //   $("#content").html(htmlStr);
      // },"json")

      //分页
      $("#page").page({
            debug: false, //开启调试
            showInfo: false, //显示调试信息
            showJump: true, //开启跳转功能
            pageSize:5, //开启每页的数据条数
            showPageSizes: true, //用户自定义每页大小
            remote: {
                url: './api/investAll.php', //请求的数据
                //成功的回调
                success: function (data) {
                  //渲染
                  let htmlStr = $("#contentList").tmpl(data.list);
                  //把渲染的html更新到页面
                  $("#content").html(htmlStr);
                }
            }
        });

        $("#page").on("pageClicked", function (event, pageIndex) {
            // $("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
        }).on('jumpClicked', function (event, pageIndex) {
            // $("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
        }).on('pageSizeChanged', function (event, pageSize) {
            // $("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
        });
    </script>
</body>
</html>