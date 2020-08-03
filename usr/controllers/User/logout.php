<?php 
/**
 * (C)2020-2099 TanCan All rights reserved.
 * Cofecho [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 **/
	header('Content-type:text/html; charset=utf-8');
	$Cofeecho_User_Class = new Cofeecho_User_Class();

	if($Cofeecho_User_Class->Check_Logon() == 1){
		// 注销后的操作
		session_start();
		// 清除Session
		$username = $_SESSION['username'];  //用于后面的提示信息
		$_SESSION = array();
		session_destroy();
		// 提示信息
		$error_tip['1'] = "欢迎下次光临,$username";
		Cofecho_ErrorM::Error_A($error_tip['1'],'2','/');
	}else{
		header('location:/');
		exit;
	}
?>