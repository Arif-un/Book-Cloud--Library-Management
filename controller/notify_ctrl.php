<?php
/**
 * Copyright (c) arifunctg@gmail.com
 */

/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 4/7/2018
 * Time: 5:20 PM
 */

include_once "../model/nofications.php";
$obj=new nofications();


if(isset($_POST['seenId'])){
    $obj->seenNotification($_POST['seenId']);
    echo "success";
}

