<?php
    //接收前端发过来的数据
    //username=yangxinghui&password=123456&confirmPass=123456&phone=15928157446&email=2653226431%40qq.com
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    // echo $password;
   
    //连接数据库   
   require_once("./coon.php");
    
    //构造sql语句
    $sql = "select * from userinfo where username = '$username' and pwd = '$password'";
    //echo $sql;
    
    //执行sql语句
    $resut = mysqli_query($link,$sql);      
    
    //结果集
    $re = mysqli_fetch_assoc($resut);
    
    // var_dump($re);  //得到是一个关联数组
    if($re != null){
        //开启会话session
        session_start();
        //创建变量
        $_SESSION["username"] = $re["username"];
        $_SESSION["userid"] = $re["userid"];
        
        $rsArray=["isSuccess"=>true,"msg"=>"用户登录成功!"];
          //json_encode() 把关联数组转换为json格式
          echo json_encode($rsArray);
    }else{
        $rsArray=["isSuccess"=>false,"msg"=>"用户登录失败!"];
        echo json_encode($rsArray);
    }
    mysqli_free_result($resut); //释放结果集
    // //关闭数据库
    require_once('./close.php');

