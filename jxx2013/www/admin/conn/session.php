<?php

/*
 * session
 */

@session_start() ;
//header("Content-type:text/html;charset=utf-8") ;
if ( !isset($_SESSION['admin']) && empty($_SESSION['admin']) ) {
    echo "<script>alert('你还没有登录，请先登录:）');location.href='../../login/index.html';</script>" ;
    exit() ;
}
?>
