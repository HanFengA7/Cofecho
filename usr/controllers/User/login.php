<?php
/**
 * (C)2020-2099 TanCan All rights reserved.
 * Cofecho [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 **/

$Cofeecho_User_Class = new Cofeecho_User_Class();

#Login	
if ($Cofeecho_User_Class->Check_Logon() == 1) {

	header('location:/Panel');

} else {

$DB_s_username = $Cofeecho_User_Class->QInfo_Root('username');
$DB_s_password = $Cofeecho_User_Class->QInfo_Root('password');
$error_tip['1'] = '  用户名或密码不能为空,请重新填写登录信息!';
$error_tip['2'] = '  用户名或密码错误,请重新填写登录信息!';

if (isset($_POST['login'])) {
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
		if (($username == '') || ($password == '')) {
            Cofecho_ErrorM::Error_A($error_tip['1'],'3','/User/Login');
		} elseif (($username != $DB_s_username ) || ($Cofeecho_User_Class->Password_V($password) !=1 )) {
			Cofecho_ErrorM::Error_A($error_tip['2'],'3','/User/Login');
			//Cofecho_ErroM::Error_C($error_tip['2'],'5000');
		} elseif (($username = $DB_s_username) && ( $Cofeecho_User_Class->Password_V($password) == 1 )) {
			$_SESSION['username'] = $username;
			$_SESSION['islogin'] = 1;
			$_SESSION['LCodeKey'] = md5($_SESSION['username'],$_SESSION['islogin']);
			header('location:/Panel');
		}
    }
#载入模板
$page['body_class'] = 'mdui-loaded mdui-color-grey-50';
$page['body_file'] = (Usr_Tp_PATH.'login.html');
require(Usr_T_PATH.'main.php');
}