<?php
/**
 * Copyright (c) arifunctg@gmail.com
 */

/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 4/7/2018
 * Time: 12:09 PM
 */
include_once "Database.php";
class comment
{
    public function insrtCmnt($cmnt, $book_id, $user_id,$user_name,$photo)
    {
        $db = new \Database();

        $sql = "INSERT INTO `comment`(`comment`, `book_id`, `user_id`,`user_name`, `user_photo`) VALUES (?,?,?,?,?)";

        $stmt = $db->conn->prepare($sql);

        $stmt->bindParam(1, $cmnt);
        $stmt->bindParam(2, $book_id);
        $stmt->bindParam(3, $user_id);
        $stmt->bindParam(4, $user_name);
        $stmt->bindParam(5, $photo);

        $stmt->execute();
    }

    public function allCmntByBook($book_id)
    {
        $db = new \Database();

        $sql = "SELECT * FROM `comment` WHERE `book_id`=? ORDER By id desc ";

        $stmt = $db->conn->prepare($sql);

        $stmt->bindParam(1, $book_id);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

}