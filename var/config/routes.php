<?php
$Suffix['1'] = '.php';
$Suffix['2'] = '.html';

$router->all('',(Usr_C_PATH.'Index/index'.$Suffix['1']));

$router->get('Panel',(Usr_C_PATH.'Panel/index'.$Suffix['1']));
$router->all('Panel/AC-Write',(Usr_C_PATH.'Panel/AC-write'.$Suffix['1']));
$router->get('Panel/AC-List',(Usr_C_PATH.'Panel/AC-list'.$Suffix['1']));

$router->all('User/Login',(Usr_C_PATH.'User/login'.$Suffix['1']));
$router->get('User/Logout',(Usr_C_PATH.'User/logout'.$Suffix['1']));
$router->get('User/Info',(Usr_C_PATH.'User/info'.$Suffix['1']));

$router->all('AC',(Usr_C_PATH.'AC/ac'.$Suffix['1']));