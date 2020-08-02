<?php
/**
 * (C)2020-2099 LychApe Studios All rights reserved.
 * Cofecho [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 **/
 
 /**
 * Cofecho_RouteM [ 0.2 ]
 * 路由管理器
 * [ Cofecho_RouteM::Go($file); ]
 **/
  
class Cofecho_RouteM{
    
    protected $routes = [];
    
    public static function Go($file){
        $router = new self();
        require $file;
        return $router;
    }
    
    public function define($routes){
        $this->routes = $routes;
    }
    
    public function direct($url){
        if(array_key_exists($url,$this->routes)){
            return $this->routes[$url];
        }else{
            $ERROEX = '     找不到  <kbd>' . $_SERVER['REQUEST_URI'] . '</kbd>   相关路径!';
            $Cofeecho_User_Class = new Cofeecho_User_Class();
            $page['body_class'] = 'mdui-loaded mdui-color-grey-50';
            $page['body_file'] = (Usr_Tp_PATH.'error.html');
            require(Usr_T_PATH.'main.php');
            die();
        }
        //throw new Exception("NO NO NO url!");
        
    }
    
}