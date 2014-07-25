<?php
/*
 * 修改数据
 */
require_once '../../conn/session.php' ;
require_once '../../conn/conn.php' ;
header("Content-type:text/html;charset=utf-8") ;

if ( !empty($_POST['submit']) ) {
    @session_start() ;
    $edid = $_SESSION['edid'] ;
    $name = trim($_POST['name']) ;
    $face = trim($_POST['face']) ;
    $sex = trim($_POST['sex']) ;
    $xibie = trim($_POST['xibie']) ;
    $class = trim($_POST['class']) ;
    $picture = trim($_FILES['picture']['name']) ;
    $type = substr($picture, -4, 4) ;
    $title = trim($_POST['title']) ;
    $info = trim($_POST['info']) ;
    $dir = "../uploads/" ;

    if ( empty($picture) ) {
        $resSQL = "select picture from tb_people where id='$edid'" ;
        $res = $mysqli->query($resSQL) ;
        $ro = $res->fetch_assoc() ;
        $filename = $ro['picture'] ;
    } else {
        $filename = date("YmdHis") . $type ;
        $mf = move_uploaded_file($_FILES['picture']['tmp_name'], $dir . $filename) ;
    }


    //$mf = move_uploaded_file($_FILES['picture']['tmp_name'], $dir . $filname);

    $sql = "update tb_people set name='$name',sex='$sex',face='$face',xibie='$xibie',class='$class',picture='$filename',title='$title',info='$info' where id ='$edid'" ;
    //var_dump($sql);
    //exit();
    $result = $mysqli->query($sql) ;
    $_SESSION['edid'] = "" ;
    if ( !$result ) {
        echo "<script>alert('更新失败');history.go(-1);</script>" ;
    } else {
        echo "<script>location.href='./scan.php';</script>" ;
    }

    $mysqli->close() ;
} else {
    echo "<script>alert('非法操作');history.go(-1);</script>" ;
}
?>

