<?php 

include_once "Database.php";

class Dashboard_state{
    
    public function count_books()
    {
        $db = new Database();

        $sql = "SELECT count(id) as books from books";

        $stmt = $db->conn->prepare($sql);

        $stmt->execute();
        $rs=$stmt->fetch(pdo::FETCH_ASSOC);

        return $rs;
    }

    public function count_stock()
    {
        $db = new Database();

        $sql = "SELECT sum(quantity) as stock from books";

        $stmt = $db->conn->prepare($sql);

        $stmt->execute();
        $rs=$stmt->fetch(pdo::FETCH_ASSOC);

        return $rs;
    }

    public function count_publisher()
    {
        $db = new Database();

        $sql = "SELECT count(*) as publisher FROM `publisher`";

        $stmt = $db->conn->prepare($sql);

        $stmt->execute();
        $rs=$stmt->fetch(pdo::FETCH_ASSOC);

        return $rs;
    }

    public function count_author()
    {
        $db = new Database();

        $sql = "SELECT count(*) as author FROM `author`";

        $stmt = $db->conn->prepare($sql);

        $stmt->execute();
        $rs=$stmt->fetch(pdo::FETCH_ASSOC);

        return $rs;
    }

    public function count_student()
    {
        $db = new Database();

        $sql = "SELECT count(*) as student FROM `student_info`";

        $stmt = $db->conn->prepare($sql);

        $stmt->execute();
        $rs=$stmt->fetch(pdo::FETCH_ASSOC);

        return $rs;
    }

    public function count_teacher()
    {
        $db = new Database();

        $sql = "SELECT count(*) as teacher FROM `teacher_info`";

        $stmt = $db->conn->prepare($sql);

        $stmt->execute();
        $rs=$stmt->fetch(pdo::FETCH_ASSOC);

        return $rs;
    }

    public function count_borrow_book()
    {
        $db = new Database();

        $sql = "SELECT count(*) as borrow_book FROM `borrow_book` WHERE status='0'";

        $stmt = $db->conn->prepare($sql);

        $stmt->execute();
        $rs=$stmt->fetch(pdo::FETCH_ASSOC);

        return $rs;
    }

    public function count_book_req()
    {
        $db = new Database();

        $sql = "SELECT count(*) as book_request FROM `book_request`";

        $stmt = $db->conn->prepare($sql);

        $stmt->execute();
        $rs=$stmt->fetch(pdo::FETCH_ASSOC);

        return $rs;
    }

}