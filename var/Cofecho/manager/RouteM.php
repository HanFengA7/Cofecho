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
 * [ Cofecho_RouteM::Go(); ]
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
        }
        throw new Exception("NO NO NO url!");
        
    }
    
    
}