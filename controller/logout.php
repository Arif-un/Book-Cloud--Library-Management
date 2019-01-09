<?php
/**
 * Copyright (c) arifunctg@gmail.com
 */

/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 3/26/2018
 * Time: 8:55 PM
 */


session_start();
session_unset();
session_destroy();
session_write_close();
setcookie(session_name(),'',0,'/');
session_regenerate_id(true);
header('Location:../index.php');