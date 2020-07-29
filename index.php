<?php
/**
 * (C)2020-2099 TanCan All rights reserved.
 * Cofecho [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 **/
session_start();

#路径管理器
require_once('./var/Cofecho/manager/PathM.php');
Cofecho_PathM::Go();

#Class
require_once(Var_C_PATH.'Cofecho_User_Class.php');

#路由管理器
$page['body_class'] = 'mdui-loaded dui-color-grey-50';
require_once(C_Manager_PATH.'RouteM.php');
Cofecho_RouteM::Go();

#载入模板
$Cofeecho_User_Class = new Cofeecho_User_Class();
$page['body_class'] = 'mdui-color-grey-50';
$page['body_file'] = (Usr_Tp_PATH.'index.html');
require(Usr_T_PATH.'main.php');

