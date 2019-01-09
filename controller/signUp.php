<?php
/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 2/17/2018
 * Time: 1:20 AM
 */

print_r($_POST);

require_once "../model/admin.php";
require_once "../model/student.php";
require_once "../model/teacher.php";
require_once "../path.php";

if ($_POST['role']==="admin") {
    $obj = new admin();

    $obj->reg_prepare_d($_POST['name'] , $_POST['email'], $_POST['username'], $_POST['pass']);

    $obj->reg_snd_d();

}

else if ($_POST['role']==="student") {
    $obj_s = new student();

    $obj_s->reg_prepare_d($_POST['name'] , $_POST['email'], $_POST['username'], $_POST['pass']);

    $obj_s->reg_snd_d();

}
else if ($_POST['role']==="teacher") {
    $obj_t = new teacher();

    $obj_t->reg_prepare_d($_POST['name'] , $_POST['email'], $_POST['username'], $_POST['pass']);

    $obj_t->reg_snd_d();

}

