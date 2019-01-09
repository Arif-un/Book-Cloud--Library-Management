<?php
/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 2/28/2018
 * Time: 9:48 PM
 */

require_once "../model/teacher_info.php";
require_once "../model/template_info.php";
include "../model/mail-send-reg.php";

$obj= new teacher_info();

$id=$obj->get_last_id();
$teacher_id=$id['id']+1;
$_POST['t_id']=$_POST['dept']."2000".$teacher_id;

move_uploaded_file($_FILES['photo']['tmp_name'],"../resource/photos/teacher/".$_POST['email'].".png");
$_POST['photo']=$_POST['email'].".png";
$_POST['j_date']=date('Y-m-j', strtotime($_POST['j_date']));

$obj->prepare($_POST);
$obj->insert();

session_start();
$_SESSION['msg']='1';

regMailSend($_POST['email'],"Registerd Successfully",$_POST['name'],$_POST['t_id'],$_POST['pass']);
echo("<script>location.href = '../view/admin/teachers.php';</script>");
//header('Location:../view/admin/teachers.php');