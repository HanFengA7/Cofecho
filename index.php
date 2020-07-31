<?php
/**
 * (C)2020-2099 TanCan All rights reserved.
 * Cofecho [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 **/
session_start();
require('./var/config/config.php');

#管理器
require('./var/Cofecho/manager/PathM.php');
    Cofecho_PathM::Go();
require(C_Manager_PATH.'RouteM.php');
require(C_Manager_PATH.'ErrorM.php');
    
#Class
require(Var_C_PATH.'Cofecho_Request_Class.php');
require(Var_C_PATH.'Cofecho_DB_Class.php');
require(Var_C_PATH.'Cofecho_User_Class.php');

#Code
    require Cofecho_RouteM::Go(Var_PATH.'/config/routes.php')
            ->direct(Cofecho_Request_Class::url());