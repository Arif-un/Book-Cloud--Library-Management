<?php
/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 2/26/2018
 * Time: 7:31 PM
 */

include_once "../model/student_info.php";
include_once "../model/template_info.php";
include "../model/mail-send-reg.php";

$obj= new student_info();
$rs=$obj->chek($_POST['email']);
if($rs==true){echo "true";}
else{echo "false";}

$id=$obj->get_last_id();
echo "<pre>";

$stdnt_id=$id['id']+1;
print_r($_POST['std_id']=$_POST['dept']. "100".$stdnt_id);
move_uploaded_file($_FILES['photo']['tmp_name'],"../resource/photos/student/".$_POST['email'].".jpg");
$_POST['photo']=$_POST['email'].".jpg";

$obj->prepare($_POST);
$obj->insert();


print_r($_POST);
print_r($_FILES['photo']['type']);

session_start();
$_SESSION['msg']='1';

regMailSend($_POST['email'],"Registerd Successfully",$_POST['name'],$_POST['std_id'],$_POST['password']);
echo("<script>location.href = '../view/admin/students.php';</script>");
//header('Location:../view/admin/students.php');
