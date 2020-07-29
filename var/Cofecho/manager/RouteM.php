<?php
/**
 * (C)2020-2099 LychApe Studios All rights reserved.
 * Cofecho [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 **/
 
 /**
 * Cofecho_RouteM [ 0.1 ]
 * 路由管理器
 * [ Cofecho_RouteM::Go(); ]
 **/
  
final class Cofecho_RouteM{
    
    public static function Go(){
        self::_set_const();
    }
    
    private static function _set_const(){
        
    	#UserLogin_Route
    	if($_GET["User"] == "Login" or $_GET["User"] == "login")
    	{
            #载入模板
            $page['body_class'] = 'mdui-color-grey-50';
            $page['body_file'] = (Usr_Tp_PATH.'login.html');
            require(Usr_T_PATH.'main.php');
            exit();
    	}
    	
    }
}