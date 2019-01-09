<?php
/**
 * Copyright (c) arifunctg@gmail.com
 */

/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 2/17/2018
 * Time: 1:29 AM
 */
include_once "Database.php";
class teacher
{
    Protected $name;
    Protected $username;
    Protected $email;
    Protected $password;


    public function chek($mail,$pass)
    {
        $db = new Database();

        $sql = "SELECT * FROM `teacher_info` WHERE email= ? AND pass= ? ";

        $stmt = $db->conn->prepare($sql);

        $stmt->execute(array($mail,$pass));

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;

    }

    public function reg_prepare_d($name,$username,$email,$pass){
        $this->name=$name;
        $this->username=$username;
        $this->email=$email;
        $this->password=$pass;
    }

    public function reg_snd_d(){
        $db = new Database();

        $sql = "INSERT INTO `teacher`(`name`, `mail`, `username`, `pass`) VALUES (?,?,?,?)";

        $stmt = $db->conn->prepare($sql);

        $stmt->execute(array($this->name,$this->email,$this->username,$this->password));
    }
}