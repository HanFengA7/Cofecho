<?php
/**
 * (C)2020-2099 LychApe Studios All rights reserved.
 * Cofecho [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 **/
 
 /**
  * Cofecho_ErroM  [ 0.1 ]
  * 错误管理器
  **/
 class Cofecho_ErrorM
 {
    /**
     * Cofecho_ErroM::Error_A($error_tip,$refresh,$url);
     **/
    public static function Error_A($error_tip,$refresh,$url)
    {  
        header("refresh:$refresh; url=$url");
        $ERROEX = $error_tip;
        $page['body_file'] = (Usr_Tp_PATH.'error.html');
        require(Usr_T_PATH.'main.php');
        exit;
    }
    
    /**
     * Cofecho_ErroM::Error_B($error_tip,$url);
     **/
    public static function Error_B($error_tip,$url)
    {  
        header("url=$url");
        $ERROEX = $error_tip;
        $page['body_file'] = (Usr_Tp_PATH.'error.html');
        require(Usr_T_PATH.'main.php');
        exit;
    }

    /**
     * $ErrorM -> Error_C($error_tip,$timeout);
     **/
    public function Error_C($error_tip,$timeout)
    {  
        echo ('<script>mdui.snackbar({
            message: '.$error_tip.',
            position: "right-top",
            timeout: '.$timeout.'
            });</script>');
        exit;
    }
    
    /**
     * $ErrorM -> Error_C_no($error_tip,$timeout);
     **/
    public function Error_C_no($error_tip,$timeout)
    {  
        echo ('<script>mdui.snackbar({
            message: '.$error_tip.',
            position: "right-top",
            timeout: '.$timeout.'
            });</script>');
    }

 }