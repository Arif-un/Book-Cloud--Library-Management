<?php
/**
 * Copyright (c) arifunctg@gmail.com
 */

/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 4/3/2018
 * Time: 4:53 PM
 */
include_once "Database.php";
class bookRequest{

    public function insert($data){
        $db = new Database();

        $query = "INSERT INTO `book_request`( `book_name`, `sbn`, `author`, `publisher`, `publish_year`, `request_by`, `description`) VALUES (?,?,?,?,?,?,?)";

        $statement=$db->conn->prepare($query);

        $statement->bindParam(1,$data['book_name']);
        $statement->bindParam(2,$data['sbn']);
        $statement->bindParam(3,$data['author']);
        $statement->bindParam(4,$data['publisher']);
        $statement->bindParam(5,$data['pub_year']);
        $statement->bindParam(6,$data['applier']);
        $statement->bindParam(7,$data['des']);

        $statement->execute();

    }

    public function req($name){
        $db = new Database();

        $query = "SELECT * FROM `book_request` WHERE `request_by`='$name'";

        $statement=$db->conn->prepare($query);

        $statement->execute();
        $rs = $statement->fetchAll(pdo::FETCH_OBJ);
        return $rs;
    }

    public function allreq(){
        $db = new Database();

        $query = "SELECT * FROM `book_request` ";

        $statement=$db->conn->prepare($query);

        $statement->execute();
        $rs = $statement->fetchAll(pdo::FETCH_OBJ);
        return $rs;
    }
}