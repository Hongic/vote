<?php

/*
 * 处理add.php 的数据
 */
include_once '../../conn/conn.php';
require_once '../../conn/session.php';
if (!empty($_POST)) {
// 获取提交的数据： 用户、密码
    $name = trim($_POST['user']);
    $re_sql = "select user from tb_admin where user='$name'";
    $re_result = $mysqli->query($re_sql);
    $re_name = $re_result->fetch_assoc();
    if ($name == $re_name['user']) {
        echo "<script>alert('" . $name . " -- 用户名已经存在!');location.href='./add.php';</script>";
        exit();
    }
    $pwd = md5($md5 . trim($_POST['pwd']));
    $time = date("Y-m-d");
    $sql = "insert into tb_admin(user,pwd,time) VALUES('$name','$pwd','$time')";
    $result = $mysqli->query($sql);

    if ($result) {
        /* 成功   */ 
        echo "<script>alert('添加成功O(∩_∩)O~');location.href='./scan.php';</script>";
    } else {
        /* 失败  */
        echo "<script>alert('-_-!失败了');location.href='./add.php';</script>";
    }

    $mysqli->close();
}
?>