<?php
    $router->define([
        '' => Usr_C_PATH.'Index/index.php',

        'Panel' => Usr_C_PATH.'Panel/index.php',
        'Panel/AC-Write' => Usr_C_PATH.'Panel/AC-write.php',
        'Panel/AC-List' => Usr_C_PATH.'Panel/AC-write.php',

        'User/Login' => Usr_C_PATH.'User/login.php',
        'User/Logout' => Usr_C_PATH.'User/logout.php',
        'User/Info' => Usr_C_PATH.'User/info.php'
    ]);