<?php
class Category{
    private $db_sql;
    private $id;
    private $cat_title;
    private $table = 'category';
    public function  __construct($db){
        $this->db_sql = $db;
    }

    public function read(){
        $conection = $this->db_sql;
        $query = "Select * from category";
        $result = $conection -> query($query);
        return $result;
    }

        public function getId($id){
        $conection = $this->db_sql;
        $query = "SELECT cat_title from category WHERE cat_id = '$id'";
        $result = $conection -> query($query);
        return $result;

    }
          public function updateId($id, $title){
        $conection = $this->db_sql;
        $query = "UPDATE category set cat_title ='$title'  WHERE cat_id = '$id'";
        $result = $conection -> query($query);
        header("location: category.php");

    }

        public function insert($title){
        $conection = $this->db_sql;
        $this ->cat_title = $title;
        $query = "INSERT into category(cat_title) VALUE ('$this->cat_title')";
        $result = $conection -> query($query);
        header("location: category.php");
    }

          public function delete($id){
        $conection = $this->db_sql;
        $this ->id = $id;
        $query = "DELETE from category WHERE cat_id = '$id'";
        $result = $conection -> query($query);
        header("location: category.php");

    }


}
?>
