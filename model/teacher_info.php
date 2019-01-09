<?php
/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 2/28/2018
 * Time: 10:02 PM
 */
require_once "Database.php";
class teacher_info{

    protected $name;
    protected $id;
    protected $mobile;
    protected $email;
    protected $pass;
    protected $dept;
    protected $j_date;
    protected $photo;

    public function prepare($data){
        $this->name=$data['name'];
        $this->id=$data['t_id'];
        $this->mobile=$data['mobile'];
        $this->email=$data['email'];
        $this->pass=$data['pass'];
        $this->dept=$data['dept'];
        $this->j_date=$data['j_date'];
        $this->photo=$data['photo'];
    }

    public function insert()
    {
        $db = new Database();

        $sql = "INSERT INTO `teacher_info`(`name`,teacher_id, `mobile`, `email`, `pass`, `dept`, `j_date`, `photo`) VALUES (?,?,?,?,?,?,?,?)";

        $stmt = $db->conn->prepare($sql);

        $stmt->bindParam(1,$this->name);
        $stmt->bindParam(2,$this->id);
        $stmt->bindParam(3,$this->mobile);
        $stmt->bindParam(4,$this->email);
        $stmt->bindParam(5,$this->pass);
        $stmt->bindParam(6,$this->dept);
        $stmt->bindParam(7,$this->j_date);
        $stmt->bindParam(8,$this->photo);

        $stmt->execute();

    }

    public function get_last_id()
    {
        $db = new Database();

        $sql = "SELECT id FROM `teacher_info` ORDER BY id DESC LIMIt 1";

        $stmt = $db->conn->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function all_teacher()
    {
        $db = new \Database();

        $sql = "SELECT * FROM `teacher_info`";

        $stmt = $db->conn->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function teacher_reg($id)
    {
        $db = new \Database();

        $sql = "SELECT teacher_id FROM `teacher_info` WHERE teacher_id=?";

        $stmt = $db->conn->prepare($sql);
        $stmt->bindParam(1,$id['chek_id']);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function reg_update($data)
    {
        $db = new Database();

        $sql = "UPDATE `teacher_info` SET `name`=?,`email`=?,`pass`=? WHERE teacher_id=?";

        $stmt = $db->conn->prepare($sql);

        $stmt->bindParam(1,$data['name']);
        $stmt->bindParam(2,$data['email']);
        $stmt->bindParam(3,$data['pass']);
        $stmt->bindParam(4,$data['id']);

        $stmt->execute();

    }


}