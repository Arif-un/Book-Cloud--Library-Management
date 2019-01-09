<?php
/**
 * Copyright (c) arifunctg@gmail.com
 */

/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 3/2/2018
 * Time: 4:42 PM
 */

namespace borrow {
    require_once "Database.php";

    use PDO;

    class borrow_book
    {


        public function borrow_req($book_id, $user_id, $status)
        {
            $db = new \Database();

            $sql = "INSERT INTO `borrow_book`(`book_id`, `user_id`, `status`) VALUES (?,?,?)";

            $stmt = $db->conn->prepare($sql);

            $stmt->bindParam(1, $book_id);
            $stmt->bindParam(2, $user_id);
            $stmt->bindParam(3, $status);

            $stmt->execute();
        }

        public function delete_req($id)
        {
            $db = new \Database();

            $sql = "DELETE FROM `borrow_book` WHERE id=?";

            $stmt = $db->conn->prepare($sql);

            $stmt->bindParam(1, $id);

            $stmt->execute();
        }

        public function acceptBorrowReq($borrow_date, $return_d, $status, $id)
        {
            $db = new \Database();

            $sql = "UPDATE `borrow_book` SET `borrow_date`=?,`return_date`=?,`status`=? WHERE `id`=?";

            $stmt = $db->conn->prepare($sql);

            $stmt->bindParam(1, $borrow_date);
            $stmt->bindParam(2, $return_d);
            $stmt->bindParam(3, $status);
            $stmt->bindParam(4, $id);

            $stmt->execute();
        }

        public function all_book_req($status)
        {
            $db = new \Database();

            $sql = "SELECT a.id,b.id as book_id,b.name,c.name as user_name,a.user_id,a.borrow_date,a.return_date,a.submit_date,a.extra_day,a.fine,a.returned_date,a.status from borrow_book a,books b,teacher_info c where b.id=a.book_id AND c.teacher_id=a.user_id AND a.status='$status'
UNION 
SELECT a.id,b.id as book_id,b.name,c.full_name as user_name,a.user_id,a.borrow_date,a.return_date,a.submit_date,a.extra_day,a.fine,a.returned_date,a.status from borrow_book a,books b,student_info c where b.id=a.book_id AND c.std_id=a.user_id AND a.status='$status'
";

            $stmt = $db->conn->prepare($sql);

            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function all_book_req_by_user($status,$user_id)
        {
            $db = new \Database();

            $sql = "SELECT
    a.id,
    b.id AS book_id,
    b.name,
    c.name AS user_name,
    a.user_id,
    a.borrow_date,
    a.return_date,
    a.submit_date,
    a.extra_day,
    a.fine,
    a.returned_date,
    a.status
FROM
    borrow_book a,
    books b,
    teacher_info c
WHERE
    b.id = a.book_id AND c.teacher_id = a.user_id AND a.status = '$status' AND a.user_id = '$user_id'
UNION
SELECT
    a.id,
    b.id AS book_id,
    b.name,
    c.full_name AS user_name,
    a.user_id,
    a.borrow_date,
    a.return_date,
    a.submit_date,
    a.extra_day,
    a.fine,
    a.returned_date,
    a.status
FROM
    borrow_book a,
    books b,
    student_info c
WHERE
    b.id = a.book_id AND c.std_id = a.user_id AND a.status = '$status' AND a.user_id = '$user_id'
";

            $stmt = $db->conn->prepare($sql);

            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }


        public function minusBook($book_id)
        {
            $db = new \Database();

            $sql = " UPDATE `books` SET `quantity`= `quantity`-1 WHERE `id`='$book_id'";

            $stmt = $db->conn->prepare($sql);

            $stmt->execute();

        }

        public function plusBook($book_id)
        {
            $db = new \Database();

            $sql = " UPDATE `books` SET `quantity`= `quantity`+1 WHERE `id`='$book_id'";

            $stmt = $db->conn->prepare($sql);

            $stmt->execute();

        }

        public function returnBook($id)
        {
            $db = new \Database();

            $sql = "UPDATE `borrow_book` SET `returned_date`=CURRENT_TIMESTAMP,`status`=2 WHERE `id`='$id'";

            $stmt = $db->conn->prepare($sql);

            $stmt->bindParam(1, $id);

            $stmt->execute();
        }

        public function getDateDifference()
        {
            $db = new \Database();

            $sql = "SELECT id,dateDiff(CURRENT_DATE,return_date) AS difference FROM borrow_book WHERE `status`= 1";

            $stmt = $db->conn->prepare($sql);

            $stmt->bindParam(1, $id);

            $stmt->execute();
            $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $rs;
        }

        public function fineANDExtraday($extraDay, $fine, $id)
        {
            $db = new \Database();

            $sql = "UPDATE `borrow_book` SET `extra_day`=?,`fine`=? WHERE id= ?";

            $stmt = $db->conn->prepare($sql);

            $stmt->bindParam(1, $extraDay);
            $stmt->bindParam(2, $fine);
            $stmt->bindParam(3, $id);

            $stmt->execute();
        }

        public function renweId($id)
        {
            $db = new \Database();

            $sql = "UPDATE `borrow_book` SET `return_date`=DATE_ADD(return_date,INTERVAL 10 day) WHERE `id`=?";

            $stmt = $db->conn->prepare($sql);

            $stmt->bindParam(1, $id);

            $stmt->execute();
        }

        public function getMailById($id)
        {
            $db = new \Database();

            $sql = "SELECT email FROM `teacher_info` WHERE teacher_id = '$id'
                    UNION
                    SELECT email FROM student_info WHERE std_id = '$id'";

            $stmt = $db->conn->prepare($sql);

            $stmt->execute();
            $reslt = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $reslt;
        }

    }
}
