<?php
/**
 * Copyright (c) arifunctg@gmail.com
 */

/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 3/27/2018
 * Time: 3:56 PM
 */

include_once "../model/borrow_book.php";
include_once "../model/nofications.php";
$obj = new \borrow\borrow_book();
$objct = new nofications();

if (isset($_POST['borrow_req'])) {
    $obj->borrow_req($_POST['book_id'], $_POST['user_id'], 0);
    $objct->createNotify("Borrow Requests", "Request for borrow a Book !!", $_POST['user_id'], 0);
    echo "success";
}
if (isset($_GET['delete'])) {
    $obj->delete_req($_GET['delete']);
    $objct->createNotify("Request Decline", "Request for borrow a Book has been decline !!", $_GET['user_id'], 1);
    header('Location:../view/admin/borrow-book.php');
}
if (isset($_GET['updateID'])) {
    date_default_timezone_set('Asia/Dhaka');
    $borrowDate = date('Y-m-d h:i:s');
    $returnDate = date('Y-m-d h:i:s', strtotime($borrowDate . ' + 10 days'));
    $status = 1;
    $id = base64_decode(urldecode($_GET['updateID']));

    $obj->acceptBorrowReq($borrowDate, $returnDate, $status, $id);
    $obj->minusBook($_GET['bookID']);

    $objct->createNotify("Borrow Request Accepted","Your book borrow request has been accepted now you can pick your book for 10 days",$_GET['user_id'],1);
    header('Location:../view/admin/borrow-book.php');
}
if (isset($_GET['returnBookId'])) {
    $obj->plusBook($_GET['book_id']);
    $obj->returnBook($_GET['returnBookId']);
    $objct->createNotify("Book Returnd Successfully","Your borrowed book has been returned successfully",$_GET['user_id'],1);
    header('Location:../view/admin/borrow-book.php');
}
if (isset($_GET['renewId'])) {
    $obj->renweId($_GET['renewId']);
    $objct->createNotify("Book Renewed","Your borrowed book has been renewed",$_GET['user_id'],1);
    header('Location:../view/admin/borrow-book.php');
}
if (isset($_POST['getMailById'])) {
    $rs = $obj->getMailById($_POST['getMailById']);
    print_r($rs[0]->email);
}