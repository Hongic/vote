<?php

header("Content-Type:text/html;charset=utf-8") ;
include_once("./admin/conn/conn.php") ;

$data = date("Y-m-d H:i:s") ;
$ip = $_SERVER["REMOTE_ADDR"] ;
$r = $_POST['r'] ;                          //接收index的传值

$sql = "select * from tb_ip where ip='$ip' order by id desc limit 1" ;              //获取用户ip在数据库中最新的ip
$result = $mysqli->query($sql) ;
$row = mysqli_num_rows($result) ;
$p = $result->fetch_assoc() ;
if ( $row > 0 ) {                                 //如果存在相同IP
    $zero1 = date("y-m-d H:i:s") ;
    $zero2 = $p['time'] ;
    $cha = strtotime($zero1) - strtotime($zero2) ;
    $max = 6 ;  // 间隔的时间小时
    if ( $cha < $max * 60 * 60 ) {                               //时间差小于10小时则输出多少小时后才能投票
        // echo "<script>alert(" . "您" . floor(24 - (($cha / 60) / 60)) . "小时" . "\n" . round(60 - (round($cha / 60) % 60)) . "分钟后才能继续投票" . "<h2></center>" . ");history.go(-1)</script>" ;
        $hour = floor($max - (($cha / 60) / 60)) ; // 小时

        $min = round(60 - (round($cha / 60) % 60)) ;  // 分钟
        $str = '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0 您已经投过票  \n\n \0\0\0\0\0\0\0\0请您  ' . $hour . ' 小时  ' . $min . ' 分钟后再投票' ;


        echo "<script>alert('" . $str . "');location.href='index.php'</script>" ;
    } else {
        $query1 = "update tb_people set votes=votes+1 where id=$r" ;
        $result1 = $mysqli->query($query1) ;
        if ( $result1 ) {
            $query2 = "insert into tb_ip(ip,time)values('$ip','$data')" ;
            $result2 = $mysqli->query($query2) ;
        }
        echo "<script>alert('投票成功！');</script>" ;
        echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">" ;
    }
} else {                              //不存在相同IP
    $query3 = "update tb_people set votes=votes+1 where id=$r" ;
    $result3 = $mysqli->query($query3) ;

    if ( $result3 ) {
        $query4 = "insert into tb_ip(ip,time)values('$ip','$data')" ;
        $result4 = $mysqli->query($query4) ;
    }
    echo "<script>alert(':） 恭喜你投票成功！');</script>" ;
    echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">" ;
}
?>