<?php

/*
 * 说明：退出系统的类
 */

session_start();
$_SESSION['admin'] = "";
unset($_SESSION['admin']);
echo "<script>alert('成功退出系统！');location.href='../login/index.html';</script>";
?>
