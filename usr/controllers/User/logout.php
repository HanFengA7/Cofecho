<?php 
	header('Content-type:text/html; charset=utf-8');
	// 注销后的操作
	session_start();
	// 清除Session
	$username = $_SESSION['username'];  //用于后面的提示信息
	$_SESSION = array();
	session_destroy();
 
	// 清除Cookie
	setcookie('username', '', time()-99);
	setcookie('code', '', time()-99);
 
	// 提示信息
	$error_tip['1'] = "欢迎下次光临,$username";
    Cofecho_ErrorM::Error_A($error_tip['1'],'2','/');
?>