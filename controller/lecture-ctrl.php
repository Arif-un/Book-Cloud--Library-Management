<?php
/**
 * Copyright (c) arifunctg@gmail.com
 */

/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 4/3/2018
 * Time: 11:15 AM
 */
session_start();
include_once "../model/lecture.php";
$obj = new lecture();

/*echo "<pre>";
print_r($_POST);
print_r($_FILES['photo']);
print_r($_FILES['pdf']);*/

move_uploaded_file($_FILES['photo']['tmp_name'],"../resource/photos/lecture/".$_POST['lec_title'].".png");
move_uploaded_file($_FILES['pdf']['tmp_name'],"../resource/photos/lecture/".$_POST['lec_title'].".pdf");

$_POST['photo']=$_POST['lec_title'].".png";
$_POST['file']=$_POST['lec_title'].".pdf";
$_POST['uploader']=$_SESSION['name'];

/*print_r($_POST['photo']);
print_r($_POST['file']);
print_r($_POST['uploader']);*/

$obj->inset($_POST);
header('Location:../view/student/lectures.php');


