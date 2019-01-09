<?php
/**
 * Copyright (c) arifunctg@gmail.com
 */

/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 4/3/2018
 * Time: 4:53 PM
 */

include_once "../model/bookRequest.php";
include_once "../model/nofications.php";

session_start();
$obj = new bookRequest();
$objct=new nofications();

$_POST['applier']=$_SESSION['name'];
$obj->insert($_POST);
$objct->createNotify("Book Request","Request for a new book",$_SESSION['std_id'],0);
header('Location:../view/student/bookRequest.php');