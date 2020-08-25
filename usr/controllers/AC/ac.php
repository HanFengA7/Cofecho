<?php
/**
 * (C)2020-2099 TanCan All rights reserved.
 * Cofecho [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 **/
$Cofecho_DB_Class = new Cofecho_DB_Class();
$Cofecho_Nkan_Class = new Cofecho_Nkan_Class();
$ErrorM = new Cofecho_ErrorM();

#载入模板
$page['body_class'] = 'mdui-loaded';
$page['body_file'] = (Usr_Tp_PATH.'ac.html');
require(Usr_T_PATH.'main.php');

