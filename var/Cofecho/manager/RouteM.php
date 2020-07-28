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
        
        #RouteTest
    	if($_GET["Route"] == "Yes" )
    	{
    	    echo("Cofecho_RouteM Yes!");
    	}
    	
    	#XXX
    	if($_GET["XXX"] == "XXX")
    	{
            //code
    	    exit();
    	}
        
    }
}