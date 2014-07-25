<?php
//  数据库的连接
$host = "localhost" ; //服务
$user = "hong" ; // 用户
$pwd = "1877888666" ; //密码
$db_name = "db_vote" ; // 数据库
$md5 = "jxx602" ; // MD5加密的附加字符
$session = "  _  O(∩_∩)O~" ;
$mysqli = new mysqli($host, $user, $pwd, $db_name) ;
$mysqli->query("set names utf8") ;
if ( mysqli_connect_errno() ) {
    echo "错误：" . mysqli_connect_error() ;
    exit ;
}
@header("Content-type:text/html;charset=utf-8") ;
?>
