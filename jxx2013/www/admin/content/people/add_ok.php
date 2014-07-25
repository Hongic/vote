<?php

/*
 * 处理add.php数据
 */
include_once '../../conn/conn.php';
if (!empty($_POST['submit'])) {
    $name = trim($_POST['name']);
    $sex = trim($_POST['sex']);
    $picture = trim($_FILES['picture']['name']);
    $type=substr($picture,-4,4);
    $title = trim($_POST['title']);
    $info = trim($_POST['info']);
    $dir = "../uploads/";
    $filname = date("YmdHis") . $type;
    $mf = move_uploaded_file($_FILES['picture']['tmp_name'], $dir . $filname);
    $sql = "insert into tb_people(`name`,sex,picture,title,info) VALUES('$name','$sex','$filname','$title','$info')";
    $result = $mysqli->query($sql);

    $pid = $mysqli->insert_id;
    $up_sql = "insert into tb_bbs(pid) values('$pid')";
    //var_dump($up_sql);
    $up_result = $mysqli->query($up_sql);

    // var_dump($up_result);
    // exit();
    if ($result) {
        echo "<script>alert('添加成功');location.href='./scan.php';;</script>";
    } else {
        echo "<br>" . "错误";
    }

    $mysqli->close();
} else {
    echo "<script>alert('非法操作');history.go(-1);</script>";
}
?>
