<?php
/**
 * Copyright (c) arifunctg@gmail.com
 */

/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 4/7/2018
 * Time: 12:08 PM
 */

include_once "../model/comment.php";

$object=new comment();

$object->insrtCmnt($_POST['comment'],$_POST['book_id'],$_POST['user_id'],$_POST['user_name'],$_POST['photo']);