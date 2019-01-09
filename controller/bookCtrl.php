<?php
/**
 * Copyright (c) arifunctg@gmail.com
 */

/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 3/2/2018
 * Time: 4:42 PM
 */


require_once "../model/books.php";
require_once "../model/template_info.php";

session_start();

$cat_name = implode(',', $_POST['cat']);
$aut_name = implode(',', $_POST['authorName']);

$_POST['cat']=$cat_name;
$_POST['authorName']=$aut_name;

move_uploaded_file($_FILES['photo']['tmp_name'],"../resource/photos/book/".$_POST['sbn'].".png");
$_POST['photo']=$_POST['sbn'].".png";

echo "<pre>";
$obj= new \books\books();

print_r($_POST);
print_r($_FILES);

$obj->prepare($_POST);
$obj->insert();
$_SESSION['msg']='1';
header('Location:../view/admin/books.php');
