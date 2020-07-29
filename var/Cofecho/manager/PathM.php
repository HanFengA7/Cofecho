<?php
/**
 * (C)2020-2099 TanCan All rights reserved.
 * Cofecho [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 **/
  
/**
 * Cofecho_PathM [ 0.1 ]
 * 路径管理器
 * [ Cofecho_PathM::Go(); ]
 **/
 
 final class Cofecho_PathM{
    public static function Go(){
        self::_set_const();
    }
    private static function _set_const(){
        
        #var_Path
        $Path = str_replace('\\','/',__FILE__); 
        define('Cofecho_PATH', dirname($Path));     #[/var/Cofecho/manager]
        	define('C_Manager_PATH', Cofecho_PATH . '/');   #[/var/Cofecho/manager/]
        	
        #Root_PATH
        define('ROOT_PATH', '.');   #[.]
        define('APP_PATH', ROOT_PATH . '/');    #[./]
        
        #var_PATH
        define('Var_PATH', APP_PATH . 'var');   #[./var]
        
            define('Var_C_PATH', Var_PATH . '/Cofecho/class/');   #[./var/Cofecho/class/]
            define('Var_M_PATH', Var_PATH . '/Cofecho/manager/');   #[./var/Cofecho/manager/]
            
        #usr_PATH
        define('Usr_PATH', APP_PATH . 'usr');   #[./usr]
        
            define('Usr_T_PATH', Usr_PATH . '/themes/');    #[./usr/themes/]
              define('Usr_Ts_PATH', Usr_T_PATH . 'static/');    #[./usr/themes/static/]
                define('Usr_Tsc_PATH', Usr_Ts_PATH . 'css/');   #[./usr/themes/static/css/]
                define('Usr_Tsj_PATH', Usr_Ts_PATH . 'js/');    #[./usr/themes/static/js/]
              define('Usr_Tp_PATH', Usr_T_PATH . 'page/');    #[./usr/themes/page/]
                define('Usr_Tpi_PATH', Usr_Tp_PATH . 'inc/');    #[./usr/themes/page/inc/]
                
            define('Usr_M_PATH', Usr_PATH . '/modules/');    #[./usr/modules/]
              define('Usr_M_S__PATH', Usr_M_PATH . 'system/');  #[./usr/modules/system/]
              define('Usr_M_S_U__PATH', Usr_M_PATH . '/system/user/');  #[./usr/modules/system/user/]
              define('Usr_M_S_U_C__PATH', Usr_M_PATH . '/system/user/class/');  #[./usr/modules/system/user/class/]
              
        include(Var_PATH.'/config.php');
    }
}
?>