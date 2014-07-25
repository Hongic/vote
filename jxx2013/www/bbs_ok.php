<?php
header("Content-Type:text/html;   charset=utf-8");
include_once './admin/conn/conn.php';
if (empty($_POST['submit'])) {
    echo "非法操作";
    exit();
} else {
    $visitor = trim($_POST['visitor']);
    $info = trim($_POST['info']);
    $pid = $_POST['pid'];
    $time = date("Y-m-d H:i:s");
    $bbs = "insert into tb_bbs(pid,visitor,info,time) values('$pid','$visitor','$info','$time')";


    $result = $mysqli->query($bbs);


    if ($result) {
        echo "<script>alert('发表成功！！');location.href='./every.php?vid=" . $pid . "'</script>";
    } else {
        echo "<script>alert('发表失败了！！');history.go(-1);</script>";
    }
}
?>