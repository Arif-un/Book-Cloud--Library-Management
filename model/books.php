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

namespace books {
    require_once "Database.php";

    use PDO;

    class books
    {

        protected $book_name;
        protected $sbn;
        protected $cat;
        protected $author_name;
        protected $pub_name;
        protected $quan;
        protected $pub_year;
        protected $des;
        protected $pdf;
        protected $photo;

        public function prepare($data)
        {
            $this->book_name = $data['book_name'];
            $this->sbn = $data['sbn'];
            $this->cat = $data['cat'];
            $this->author_name = $data['authorName'];
            $this->pub_name = $data['pub_name'];
            $this->quan = $data['quan'];
            $this->pub_year = $data['pub_year'];
            $this->des = $data['des'];
            $this->pdf = $data['pdf'];
            $this->photo = $data['photo'];

        }

        public function insert()
        {
            $db = new \Database();

            $sql = "INSERT INTO `books`(`name`, `sbn`, `cat_id`, `author_id`, `pub_id`, `quantity`, `pub_year`, `description`, `pdf_link`, `photo`) VALUES (?,?,?,?,?,?,?,?,?,?)";

            $stmt = $db->conn->prepare($sql);

            $stmt->bindParam(1, $this->book_name);
            $stmt->bindParam(2, $this->sbn);
            $stmt->bindParam(3, $this->cat);
            $stmt->bindParam(4, $this->author_name);
            $stmt->bindParam(5, $this->pub_name);
            $stmt->bindParam(6, $this->quan);
            $stmt->bindParam(7, $this->pub_year);
            $stmt->bindParam(8, $this->des);
            $stmt->bindParam(9, $this->pdf);
            $stmt->bindParam(10, $this->photo);

            $stmt->execute();

        }

        public function all_books()
        {
            $db = new \Database();

            $sql = "SELECT a.id,a.name,a.sbn,GROUP_CONCAT( DISTINCT b.cat_name ORDER BY b.id) as 
cat,GROUP_CONCAT( DISTINCT c.author_name ORDER BY c.id) as author,d.publisher_name,
a.quantity,a.pub_year,a.description,a.pdf_link,a.photo FROM books a,books_category b,author c,
publisher d WHERE a.pub_id=d.id AND FIND_IN_SET(b.id,a.cat_id)>0 AND FIND_IN_SET(c.id,a.author_id)>0 GROUP BY a.id
";

            $stmt = $db->conn->prepare($sql);

            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function singl_books($book_id)
        {
            $db = new \Database();

            $sql = "SELECT a.id,a.name,a.sbn,GROUP_CONCAT( DISTINCT b.cat_name ORDER BY b.id) as 
cat,GROUP_CONCAT( DISTINCT c.author_name ORDER BY c.id) as author,d.publisher_name,
a.quantity,a.pub_year,a.description,a.pdf_link,a.photo FROM books a,books_category b,author c,
publisher d WHERE  a.id='$book_id' AND a.pub_id=d.id AND FIND_IN_SET(b.id,a.cat_id)>0 AND FIND_IN_SET(c.id,a.author_id)>0 GROUP BY a.id 
";

            $stmt = $db->conn->prepare($sql);

            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

        public function suggest_by_cat_books($book_id)
        {
            $db = new \Database();

            $sql = "SELECT a.id,a.name,a.sbn,GROUP_CONCAT( DISTINCT b.cat_name ORDER BY b.id) as 
cat,GROUP_CONCAT( DISTINCT c.author_name ORDER BY c.id) as author,d.publisher_name,
a.quantity,a.pub_year,a.description,a.pdf_link,a.photo FROM books a,books_category b,author c,
publisher d WHERE  NOT a.id='$book_id' AND a.pub_id=d.id AND FIND_IN_SET(b.id,a.cat_id)>0 AND FIND_IN_SET(c.id,a.author_id)>0 GROUP BY a.id
";

            $stmt = $db->conn->prepare($sql);

            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }


    }
}
