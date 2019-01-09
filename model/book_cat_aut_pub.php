<?php
/**
 * Copyright (c) arifunctg@gmail.com
 */

/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 3/1/2018
 * Time: 4:15 PM
 */

namespace books_category {
    require_once "Database.php";
    use PDO;
    class books_cat
    {

        protected $boos_cat;

        public function prepare($data)
        {
            $this->boos_cat = $data['books_cat'];
        }

        public function insert()
        {
            $db = new \Database();

            $sql = "INSERT INTO `books_category`(`cat_name`) VALUES (?)";

            $stmt = $db->conn->prepare($sql);

            $stmt->bindParam(1, $this->boos_cat);

            $stmt->execute();

        }

        public function get_all_cat()
        {
            $db = new \Database();

            $sql = "SELECT * FROM `books_category`";

            $stmt = $db->conn->prepare($sql);

            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function get_cat_name($id)
        {
            $db = new \Database();

            $sql = "SELECT cat_name FROM `books_category`WHERE id=?";

            $stmt = $db->conn->prepare($sql);

            $stmt->bindParam(1, $id);

            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }


    }

}


namespace author {
    require_once "Database.php";
    use PDO;
    class author
    {

        protected $author;
        protected $details;
        protected $photo;

        public function prepare($data)
        {
            $this->author = $data['author'];
            $this->details = $data['author_details'];
            $this->photo = $data['photo'];
        }

        public function insert()
        {
            $db = new \Database();

            $sql = "INSERT INTO `author`(`author_name`, `description`, `photo`) VALUES (?,?,?)";

            $stmt = $db->conn->prepare($sql);

            $stmt->bindParam(1, $this->author);
            $stmt->bindParam(2, $this->details);
            $stmt->bindParam(3, $this->photo);

            $stmt->execute();

        }

        public function get_all_author()
        {
            $db = new \Database();

            $sql = "SELECT * FROM `author`";

            $stmt = $db->conn->prepare($sql);

            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function get_author_name($id)
        {
            $db = new \Database();

            $sql = "SELECT author_name FROM `author`WHERE id=?";

            $stmt = $db->conn->prepare($sql);

            $stmt->bindParam(1, $id);

            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

    }

}


namespace publisher {
    require_once "Database.php";
    use PDO;

    class publisher
    {

        protected $publisher;

        public function prepare($data)
        {
            $this->publisher = $data['publisher'];
        }

        public function insert()
        {
            $db = new \Database();

            $sql = "INSERT INTO `publisher`(`publisher_name`) VALUES (?)";

            $stmt = $db->conn->prepare($sql);

            $stmt->bindParam(1, $this->publisher);

            $stmt->execute();

        }

        public function get_all_pub()
        {
            $db = new \Database();

            $sql = "SELECT * FROM `publisher`";

            $stmt = $db->conn->prepare($sql);

            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }

        public function get_pub_name($id)
        {
            $db = new \Database();

            $sql = "SELECT publisher_name FROM `publisher`WHERE id=?";

            $stmt = $db->conn->prepare($sql);

            $stmt->bindParam(1, $id);

            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }


    }

}
