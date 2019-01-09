<?php
/**
 * Copyright (c) arifunctg@gmail.com
 */

/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 3/1/2018
 * Time: 4:14 PM
 */

require_once "../model/book_cat_aut_pub.php";
require_once "../model/template_info.php";

session_start();

if(array_key_exists('books_cat',$_POST)) {
    print_r($_POST);
    $books = new \books_category\books_cat();
    $books->prepare($_POST);
    $books->insert();

    $_SESSION['msg']='1';
    header('Location:../view/admin/books.php');
}
elseif (array_key_exists('author',$_POST)) {
    $books = new \author\author();
    move_uploaded_file($_FILES['photo']['tmp_name'],"../resource/photos/author/".$_POST['author'].".png");
    $_POST['photo']=$_POST['author'].".png";
    echo "<pre>";
    print_r($_POST);
    print_r($_FILES);
    $books->prepare($_POST);
    $books->insert();
    $_SESSION['msg']='1';
    header('Location:../view/admin/books.php');
}
elseif (array_key_exists('publisher',$_POST)) {
    print_r($_POST);
    $books = new \publisher\publisher();
    $books->prepare($_POST);
    $books->insert();
    $_SESSION['msg'] = '1';
    header('Location:../view/admin/books.php');
}
