<?php
/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 4/7/2018
 * Time: 5:01 PM
 */
include_once "Database.php";
class nofications
{

    public function createNotify($title,$body,$user_id,$status)
    {
        $db = new Database();

        $sql = "INSERT INTO `notifications`(`title`, `body`, `user_id`, `status`) VALUES (?,?,?,?)";

        $stmt = $db->conn->prepare($sql);

        $stmt->bindParam(1,$title);
        $stmt->bindParam(2,$body);
        $stmt->bindParam(3,$user_id);
        $stmt->bindParam(4,$status);
        $stmt->execute();
    }

    public function allNotifications($status)
    {
        $db = new Database();

        $sql = "SELECT * FROM `notifications` WHERE `status` = '$status' ORDER BY created_time DESC ";

        $stmt = $db->conn->prepare($sql);
        $stmt->execute();
        $rs=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $rs;
    }

    public function allNotificationsById($status,$id)
    {
        $db = new Database();

        $sql = "SELECT * FROM `notifications` WHERE `status` = '$status' AND `user_id` = '$id' ORDER BY created_time DESC ";

        $stmt = $db->conn->prepare($sql);
        $stmt->execute();
        $rs=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $rs;
    }

    public function seenNotification($id)
    {
        $db = new Database();

        $sql = "UPDATE `notifications` SET `seen`= 1 WHERE `id` ='$id'";

        $stmt = $db->conn->prepare($sql);
        $stmt->execute();
    }

    public function notifyCount($status)
    {
        $db = new Database();

        $sql = "SELECT COUNT(id) as unseen FROM `notifications` WHERE seen = 0 AND `status` = '$status'";

        $stmt = $db->conn->prepare($sql);
        $stmt->execute();
        $rs=$stmt->fetch(PDO::FETCH_OBJ);
        return $rs;
    }

    public function notifyCountById($status,$id)
    {
        $db = new Database();

        $sql = "SELECT COUNT(id) as unseen FROM `notifications` WHERE seen = 0 AND `status` = '$status' and `user_id`='$id'";

        $stmt = $db->conn->prepare($sql);
        $stmt->execute();
        $rs=$stmt->fetch(PDO::FETCH_OBJ);
        return $rs;
    }

}