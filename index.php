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
#路由管理器
require_once(C_Manager_PATH.'RouteM.php');
Cofecho_RouteM::Go();
#PDO
require_once(Var_C_PATH.'Cofecho_DB_Class.php');
$Cofecho_DB_Class = new Cofecho_DB_Class($config);
$Cofecho_DB_Class -> query('SELECT * FROM `Cofecho_User` WHERE `uid` = 1');
$rs = $Cofecho_DB_Class->fetchAll();
//echo $rs[0]["username"];
$Cofecho_DB_Class -> close();
#载入模板
require(Usr_T_PATH.'index.html');