$.get('./api/look.php',function(data){
    //判断
    if(!data.isSuccess){
        alert('登录失败');
      location.href="login.php";
    }
},'json')