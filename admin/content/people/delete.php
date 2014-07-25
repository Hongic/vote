<?php

/*
 * 删除数据
 */
require_once '../../conn/session.php';
require_once '../../conn/conn.php';
$deid = $_GET['deid'];
$sql = "delete from tb_people where id='$deid' ";
$result = $mysqli->query($sql);
$bbs = "delete from tb_bbs where pid='$edid'";
$bbs_res = $mysqli->query($bbs);

if ($result || $bbs_res) {
    echo "<script>alert('删除成功');location.href='./scan.php';</script>";
} else {
    echo "<script>alert('删除失败');history.go(-1);</script>";
}
?>
