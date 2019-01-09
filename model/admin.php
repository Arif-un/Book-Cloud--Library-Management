<?php
/**
 * Copyright (c) arifunctg@gmail.com
 */

require_once "Database.php";



class admin
{
    private $name;
    private $username;
    private $email;
    private $password;


    public function chek($mail,$pass)
    {

        $db = new Database();

        $sql = "SELECT * FROM `admin` WHERE mail= ? AND pass= ? ";

        $stmt = $db->conn->prepare($sql);

        $stmt->execute(array($mail,$pass));

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
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

        $sql = "INSERT INTO `admin`(`name`, `mail`, `username`, `pass`) VALUES (?,?,?,?)";

        $stmt = $db->conn->prepare($sql);

        $stmt->execute(array($this->name,$this->email,$this->username,$this->password));
        var_dump($this->name,$this->email,$this->username,$this->password);
    }
}
