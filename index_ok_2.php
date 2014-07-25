<?php

header("Content-Type:text/html;   charset=utf-8") ;
include_once("./admin/conn/conn.php") ;
$endDate = "2013-05-07" ;  // 截止日期
$data = date("Y-m-d") ;
//echo $data ;
//if ( $data == $endDate ) {
$ip = $_SERVER["REMOTE_ADDR"] ;
$r = base64_decode($_GET['vote']) ;                          //接收index的传值
echo $r ;
$sql = "select * from tb_ip where ip='$ip'and time='$data'" ;              //获取用户ip在数据库中最新的ip
$result = $mysqli->query($sql) ;
$row = $result->num_rows ;

$rows = $result->fetch_assoc() ;


//$row1['nid'] = !empty($row1['nid']) ? $row1['nid'] : "0" ;

if ( $row < 1 ) {

    $query1 = "update tb_people set votes=votes+1 where id=$r and time='$data'" ;
    $result1 = $mysqli->query($query1) ;

    $query2 = "insert into tb_ip(ip,nid,time)values('$ip','$r','$data')" ;

    $result2 = $mysqli->query($query2) ;

    echo "<script>alert('投票成功！');</script>" ;
    echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">" ;
} else {
    $query2 = "selcet * tb_ip  where nid=$r and time='$data'" ;
    $result2 = $mysqli->query($sql) ;
    $row2 = $result2->num_rows ;
    echo $row2 ;
    if ( $row2 > 0 ) {
        echo "<center><h2>" ;
        echo "您" ;
        echo "<h2></center>" ;
        echo "<script>alert('确定');history.go(-1)</script>" ;
    }
    exit();
}

if ( $row < 9 && $row > 1 ) {
    $query1 = "update tb_people set votes=votes+1 where id=$r" ;
    $result1 = $mysqli->query($query1) ;

    $query2 = "insert into tb_ip(ip,nid,time)values('$ip','$r','$data')" ;

    $result2 = $mysqli->query($query2) ;

    echo "<script>alert('投票成功！');</script>" ;
    echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">" ;
} else {
    echo "<center><h2>" ;
    echo "您已经投了10次了，明天再来吧！" ;
    echo "<h2></center>" ;
    echo "<script>alert('确定');history.go(-1)</script>" ;
}
/*
  } else {
  echo '投票时间已经结束' ;
  } */
?>