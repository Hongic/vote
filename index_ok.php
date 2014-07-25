<?php

header("Content-Type:text/html;   charset=utf-8") ;
include_once("./admin/conn/conn.php") ;
$endDate = "2013-05-31 17:00:00" ;  // 截止时期
$activeDate = date("Y-m-d H:i;s") ; // 当前时期
$date = date("Y-m-d") ;  // 当前的日期
//echo $date ;

if ( $activeDate <= $endDate ) {
    /*
     * 获取时间、IP、人物ID
     */
    $ip = $_SERVER["REMOTE_ADDR"] ;
    $r = base64_decode($_GET['vote']) ;                          //接收index的传值
//echo $r . "<br>" ;
    /*
     *  今天这个IP投了多少次票
     */

    $maxSQL = "select id from tb_ip where ip='$ip'and time='$date'" ;              //获取用户ip在数据库中最新的ip
    $maxResult = $mysqli->query($maxSQL) ;
    $maxRow = $maxResult->num_rows ;
// 10次以前可投
    if ( $maxRow < 10 && $maxRow >= 0 ) {
        //echo "<br>" . "开始投票" . "<br>" ;
        /*
         * 今天这个了IP可投一次
         */
        $nidSQL = "SELECT nid FROM `tb_ip` where nid='$r' and ip='$ip' and time='$date'" ;
        //var_dump($nidSQL) ;
        //exit() ;
        $nidResult = $mysqli->query($nidSQL) ;
        $nidRow = $nidResult->num_rows ;
        //exit() ;
        if ( $nidRow != 1 ) {
            // 成功是更新数据
            $up_peopleSQL = "update tb_people set votes=votes+1 where id='$r' " ;
            $up_peopleResult = $mysqli->query($up_peopleSQL) ;
            if ( $up_peopleResult ) {
                // echo "<br> Yes UP <br>" ;
                // 插入投票数据
                $in_ipSQL = "insert into tb_ip(ip,nid,time)values('$ip','$r','$date')" ;
                $in_ipResult = $mysqli->query($in_ipSQL) ;
                if ( $in_ipResult == true ) {
                    echo "<script>alert('Yes：你成功地给他（她）投票了 ！！');location.href='index.php';</script>" ;
                } else {
                    echo "<script>alert('ERROR：给他（她）投票失败 ！！！');location.href='index.php';</script>" ;
                }
            } else {
                echo "<script>alert('ERROR：给他（她）投票失败 ！！');location.href='index.php';</script>" ;
            }
        } else {
            echo "<script>alert('NO!NO!：今天你已经不能再给他（她）投票了 ！！');location.href='index.php';</script>" ;
        }

        // exit() ;
    } else {
        // 10次以后不可投
        echo "<script>alert('NO! NO!：今天你已经不能再给他（她）投票了 ！！');location.href='index.php';</script>" ;
    }
} else {
    echo "<script>alert('对不起，此次活动已经结束 ！！');location.href='index.php';</script>" ;
}
?>