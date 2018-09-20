<?php
    //连接数据库
    require_once("./coon.php");
    //构造sql语句
    $sql="select * from borrowinfo";
    //执行sql
    $result = mysqli_query($link,$sql);
   
    //遍历获取结果集
    $borrowDatd=[];
    // var_dump ($result);
    while($rs=mysqli_fetch_assoc($result)){
        array_push($borrowDatd,$rs);
    }
    //把结果集转换为json发给前端
    echo json_encode($borrowDatd);
?>