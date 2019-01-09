<?php
/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 2/26/2018
 * Time: 8:52 PM
 */

require_once "Database.php";

class student_info{
    protected $student_id;
    protected $name;
    protected $phone;
    protected $mail;
    protected $dpt;
    protected $batch;
    protected $session;
    protected $shift;
    protected $program;
    protected $photo;
    protected $pass;

    public function prepare($data){
        $this->student_id=$data['std_id'];
        $this->name=$data['name'];
        $this->phone=$data['phone'];
        $this->mail=$data['email'];
        $this->dpt=$data['dept'];
        $this->batch=$data['batch'];
        $this->session=$data['session'];
        $this->shift=$data['shift'];
        $this->program=$data['program'];
        $this->photo=$data['photo'];
        $this->pass=$data['password'];
    }

    public function chek($mail)
    {
        $db = new Database();

        $sql = "SELECT COUNT(id) FROM `student_info` WHERE email=?";

        $stmt = $db->conn->prepare($sql);

        $stmt->execute(array($mail));

        $result = $stmt->fetch(PDO::FETCH_COLUMN);
        if($result=='0'){
        return false;
        }
        else{ return true;}

    }


    public function get_last_id()
    {
        $db = new Database();

        $sql = "SELECT id FROM `student_info` ORDER BY id DESC LIMIt 1";

        $stmt = $db->conn->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insert()
    {
        $db = new Database();

        $sql = "INSERT INTO `student_info`(`std_id`, `full_name`, `mobile`, `email`, `password`, `batch`, `dept`, `session`, `shift`, `program`, `photo`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $db->conn->prepare($sql);

        $stmt->bindParam(1,$this->student_id);
        $stmt->bindParam(2,$this->name);
        $stmt->bindParam(3,$this->phone);
        $stmt->bindParam(4,$this->mail);
        $stmt->bindParam(5,$this->pass);
        $stmt->bindParam(6,$this->batch);
        $stmt->bindParam(7,$this->dpt);
        $stmt->bindParam(8,$this->session);
        $stmt->bindParam(9,$this->shift);
        $stmt->bindParam(10,$this->program);
        $stmt->bindParam(11,$this->photo);

        $stmt->execute();

    }

    public function all_srudents()
    {
        $db = new \Database();

        $sql = "SELECT * FROM `student_info`";

        $stmt = $db->conn->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function std_reg($id)
    {
        $db = new \Database();

        $sql = "SELECT std_id FROM `student_info` WHERE std_id=?";

        $stmt = $db->conn->prepare($sql);
        $stmt->bindParam(1,$id['chek_id']);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function reg_update($data)
    {
        $db = new Database();

        $sql = "UPDATE `student_info` SET `full_name`=?,`email`=?,`password`=? WHERE std_id=?";

        $stmt = $db->conn->prepare($sql);

        $stmt->bindParam(1,$data['name']);
        $stmt->bindParam(2,$data['email']);
        $stmt->bindParam(3,$data['pass']);
        $stmt->bindParam(4,$data['id']);

        $stmt->execute();
    }

}