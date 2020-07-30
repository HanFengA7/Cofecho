<?php
/**
 * (C)2020-2099 TanCan All rights reserved.
 * Cofecho [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 **/
session_start();

include('./var/config/config.php');

#路径管理器
require_once('./var/Cofecho/manager/PathM.php');
Cofecho_PathM::Go();

#Class
require_once(Var_C_PATH.'Cofecho_User_Class.php');

#路由管理器
require_once(C_Manager_PATH.'RouteM.php');
$routes_url = trim($_SERVER['REQUEST_URI'],'/');
require Cofecho_RouteM::Go(Var_PATH.'/config/routes.php')->direct($routes_url);

