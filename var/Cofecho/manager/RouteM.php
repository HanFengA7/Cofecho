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
    
    protected $routes = [
       'GET' => [],
       'POST' => []
    ];
    
    public static function Go($file){
        $router = new self();
        require $file;
        return $router;
    }

    public function get($url,$controller){
        $this->routes['GET'][$url] = $controller;
    }

    public function post($url,$controller){
        $this->routes['POST'][$url] = $controller;
    }
    
    public function all($url,$controller){
        $this->routes['GET'][$url] = $controller;
        $this->routes['POST'][$url] = $controller;
    }
    
    public function define($routes){
        $this->routes = $routes;
    }
    
    public function direct($url,$methodType){
        if(array_key_exists($url,$this->routes[$methodType])){
            return $this->routes[$methodType][$url];
        }else{
            $ERROEX = '     找不到  <kbd>' . $_SERVER['REQUEST_URI'] . '</kbd>   相关路径!';
            $Cofecho_User_Class = new Cofecho_User_Class();
            $page['body_class'] = 'mdui-loaded mdui-color-grey-50';
            $page['body_file'] = (Usr_Tp_PATH.'error.html');
            require(Usr_T_PATH.'main.php');
            die();
        }
        //throw new Exception("NO NO NO url!");
        
    }
    
}