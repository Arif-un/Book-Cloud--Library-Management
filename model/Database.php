<?php
/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 2/13/2018
 * Time: 1:36 AM
 */


class Database
{
    public $conn;

    public function __construct()
    {
        $server = "localhost";
        $username = "root";
        $password = "";

        try {
            $this->conn = new PDO("mysql:host=$server;dbname=book-cloud", $username, $password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //echo "Connected successfully";
        }
        catch (PDOException $err) {
            echo "Connection failed: " . $err->getMessage();
        }
    }

}