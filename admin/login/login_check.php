<?php

/*
 * ˵�� ��½��说明： 登陆验证
 */
include_once '../conn/conn.php';
if (!empty($_POST)) {
//获取提交的数据： 用户、密码
    $name = trim($_POST['username']);

    $pwd = md5($md5 . trim($_POST['password']));
    $sql = "select * from tb_admin where user='$name' and pwd='$pwd'";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();
    //var_dump($row);

    if ($row) {
        @session_start();
        $_SESSION['admin'] = $name;

        //exit();
        header("location:../content/index.htm");
    } else {
        echo "<script>alert('用户名或密码错误！！');history.go(-1);</script>";
    }
} else {
    echo "<script>alert('非法操作');history.go(-1);</script>";
}
?>
