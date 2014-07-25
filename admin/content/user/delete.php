<?php

/*
 * 删除数据
 */
require_once '../../conn/session.php';
require_once '../../conn/conn.php';
$deid = $_GET['deid'];
$sql = "delete from tb_admin where id='$deid' ";
$result = $mysqli->query($sql);
if ($result) {
    echo "<script>alert('删除成功');location.href='./scan.php';</script>";
} else {
    echo "<script>alert('删除失败');history.go(-1);</script>";
}
?>
