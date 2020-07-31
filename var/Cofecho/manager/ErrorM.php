<?php
/**
 * (C)2020-2099 LychApe Studios All rights reserved.
 * Cofecho [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 **/
 
 /**
  * Cofecho_ErroM
  */
 class Cofecho_ErrorM
 {
    public static function Error_A($error_tip,$refresh,$url)
    {  
        header("refresh:$refresh; url=$url");
        $ERROEX = $error_tip;
        $page['body_file'] = (Usr_Tp_PATH.'error.html');
        require(Usr_T_PATH.'main.php');
        exit;
    }
 }