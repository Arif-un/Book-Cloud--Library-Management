<?php
/**
 * Copyright (c) arifunctg@gmail.com
 */

/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 2/13/2018
 * Time: 3:52 AM
 */

require_once "../model/admin.php";
require_once "../model/student.php";
require_once "../model/teacher.php";
require_once "../model/template_info.php";

session_start();

if ($_POST['role'] === "admin") {
    $obj = new admin();
    $rlt = $obj->chek($_POST['mail'], $_POST['pass']);
    if ($rlt[0]['mail'] == $_POST['mail'] && $rlt[0]['pass'] == $_POST['pass']) {
        //var_dump($obj);
        $_SESSION['mail'] = $_POST['mail'];
        $_SESSION['pass'] = $_POST['pass'];
        header('Location:../view/admin/index.php');
        exit();
    } else {
        //header('Location:../../index.php');
        exit();
    }
} else if ($_POST['role'] === "student") {

    $obj = new student();
    $rlt = $obj->chek($_POST['mail'], $_POST['pass']);

    if ($rlt['email'] == $_POST['mail'] && $rlt['password'] == $_POST['pass']) {
        //var_dump($obj);
        $_SESSION['mail'] = $_POST['mail'];
        $_SESSION['pass'] = $_POST['pass'];
        $_SESSION['std_id'] = $rlt['std_id'];
        $_SESSION['name'] = $rlt['full_name'];
        $_SESSION['photo']= $rlt['photo'];
//print_r($_SESSION['name']);
        header('Location:../view/student/index.php');
       exit();
    } else {
        header('Location:../../index.php');
        exit();
    }
} else if ($_POST['role'] === "teacher") {
    $obj = new teacher();
    $rlt = $obj->chek($_POST['mail'], $_POST['pass']);
    if ($rlt['email'] == $_POST['mail'] && $rlt['pass'] == $_POST['pass']) {
        //var_dump($obj);
        $_SESSION['mail'] = $rlt['email'];
        $_SESSION['pass'] = $rlt['pass'];
        $_SESSION['tcr_id'] = $rlt['teacher_id'];
        $_SESSION['name'] = $rlt['name'];
        $_SESSION['photo'] = $rlt['photo'];
        header('Location:../view/teacher/index.php');
        exit();
    } else {
        header('Location:../../index.php');
        exit();
    }
} else {
    header('Location:../../index.php');
    echo "WRONG";
    exit();
}