<?php
/**
 * (C)2020-2099 TanCan All rights reserved.
 * Cofecho [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 **/
if ($GET['C'] == "hello") {
    die();
}
#载入模板
$Cofeecho_User_Class = new Cofeecho_User_Class();
$page['body_class'] = 'mdui-loaded mdui-color-grey-50';
$page['body_file'] = (Usr_Tp_PATH.'index.html');
require(Usr_T_PATH.'main.php');
