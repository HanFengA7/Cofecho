<?php
/**
 * (C)2020-2099 TanCan All rights reserved.
 * Cofecho [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 **/
 
require_once(Var_C_PATH.'Cofecho_DB_Class.php');

/**
 * [Cofeecho_User_Class]
 */
class Cofeecho_User_Class extends Cofecho_DB_Class
{
    protected $userinfo;
    
    /**
     * 构造函数
     */
    public function __construct()
    {   
        parent::__construct();
    }
    
    function QInfo_Root($userinfo){
        $sql = 'SELECT * FROM `Cofecho_User` WHERE `uid` = 1';
        parent::query($sql);
        $rs = parent::fetchAll();
        return $rs[0][$userinfo];
    }
}