<?php
/**
 * Copyright (c) arifunctg@gmail.com
 */

/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 3/18/2018
 * Time: 6:03 PM
 */

require_once "../model/teacher_info.php";
require_once "../model/student_info.php";

if (isset($_POST['chek_id'])) {
    $obj = new teacher_info();
    $val = $obj->teacher_reg($_POST);


    $objct = new student_info();
    $valu = $objct->std_reg($_POST);

    //print_r($val);
    //print_r($valu);
    $final_val = array_merge($val, $valu);
    //print_r($final_val);
    if (empty($final_val)) {
        echo "no";
    } else {
        if (isset($final_val[0]["std_id"])) {
            echo "std";
        } else if (isset($final_val[0]["teacher_id"])) {
            echo "tcr";
        } else {
            echo "none";
        }
    }
}

if (isset($_POST['email'])) {
    print_r($_POST);
    if ($_POST['role'] == "Student") {
        include_once "../model/student_info.php";
        $obj = new student_info();
        $obj->reg_update($_POST);
        header('Location:../view/student/index.php');
        exit();
    } else if ($_POST['role'] == "Teacher") {
        include_once "../model/template_info.php";
        $obj = new teacher_info();
        $obj->reg_update($_POST);
        header('Location:../view/teacher/index.php');
        exit();
    }
}
