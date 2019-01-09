<?php
/**
 * Copyright (c) arifunctg@gmail.com
 */

/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 4/3/2018
 * Time: 12:59 PM
 */
include_once "Database.php";
class lecture
{
    public function inset($data)
    {
        $db = new Database();

        $sql = "INSERT INTO `lectures`(`name`, `description`, `uploader`, `pic`, `file`) VALUES (?,?,?,?,?)";

        $stmt = $db->conn->prepare($sql);
        $stmt->bindParam(1, $data['lec_title']);
        $stmt->bindParam(2, $data['des']);
        $stmt->bindParam(3, $data['uploader']);
        $stmt->bindParam(4, $data['photo']);
        $stmt->bindParam(5, $data['file']);
        $stmt->execute();

    }
    public function allLec()
    {
        $db = new Database();

        $sql = "SELECT * from `lectures`";

        $stmt = $db->conn->prepare($sql);

        $stmt->execute();
        $r=$stmt->fetchAll(pdo::FETCH_ASSOC);

        return $r;

    }

    public function allLecByUpldr($uploader)
    {
        $db = new Database();

        $sql = "SELECT * from `lectures` WHERE `uploader` = '$uploader'";

        $stmt = $db->conn->prepare($sql);

        $stmt->execute();
        $r=$stmt->fetchAll(pdo::FETCH_ASSOC);
        return $r;

    }
}