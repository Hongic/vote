<?php

/*
 * ˵�����˳�ϵͳ����
 */

session_start();
$_SESSION['admin'] = "";
unset($_SESSION['admin']);
echo "<script>alert('�ɹ��˳�ϵͳ��');location.href='../login/index.html';</script>";
?>
