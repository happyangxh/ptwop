<?php
    //接收前端发过来的数据
    //username=yangxinghui&password=123456&confirmPass=123456&phone=15928157446&email=2653226431%40qq.com
    $username = $_POST['username'];
    $password =md5($_POST['password']);
    $phone = $_POST['phone'];
    $email = $_POST['email'];
   
    //连接数据库   
    require_once("./coon.php");
    
    //构造sql语句
    $sql = "insert into userinfo(username,pwd,mobile,email) values ('$username','$password',' $phone','$email')";
    
    //执行sql语句
    $resut = mysqli_query($link,$sql);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        

    if($resut){
        $rsArray=["isSuccess"=>true,"msg"=>"用户注册成功!"];
          //json_encode() 把关联数组转换为json格式
          echo json_encode($rsArray);
    }else{
        $rsArray=["isSuccess"=>false,"msg"=>"用户注册失败!"];
        echo json_encode($rsArray);
    }
    //关闭数据库
    mysqli_close($link);