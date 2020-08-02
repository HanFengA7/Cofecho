<?php
    $router->define([
        '' => Usr_C_PATH.'Index/index.php',
        'Panel' => Usr_C_PATH.'Panel/index.php',
        'Panel/Write' => Usr_C_PATH.'Panel/write.php',
        'User/Login' => Usr_C_PATH.'User/login.php',
        'User/Logout' => Usr_C_PATH.'User/logout.php'
    ]);