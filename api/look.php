<?php
    //开启会话
    session_start();
    //检测是否存在
    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"]; //读取name
        $result = ["isSuccess"=>true,"msg"=>"登录成功","username"=>$username];
        echo json_encode($result);
    }else{
        $result = ["isSuccess"=>false,"msg"=>"登录失败"];
        echo json_encode($result);
    } 
?>