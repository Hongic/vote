<?php

require_once '../../conn/conn.php';
if (!empty($_POST['submit'])) {
    @session_start();
    $uedid = $_SESSION['uedid'];
    //$name = trim($_POST['user']);
    $pwd = md5($md5 . trim($_POST['pwd']));
    $sql = "update tb_admin set pwd='$pwd' where id='$uedid'";
    $result = $mysqli->query($sql);
    if (!$result) {
        echo "<script>alert('修改失败');history.go(-1);</script>";
    } else {
        echo "<script>location.href='./scan.php';</script>";
    }

    $mysqli->close();
} else {
    echo "<script>alert('非法操作');history.go(-1);</script>";
}
?>
