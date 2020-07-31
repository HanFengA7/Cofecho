<?php
/**
 * (C)2020-2099 LychApe Studios All rights reserved.
 * Cofecho [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 **/
 
class Cofecho_Request_Class
{
    
    /**
     * Cofecho_Request_Class::url();
     */
    public static function url()
    {   
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/'
        );
    }
}