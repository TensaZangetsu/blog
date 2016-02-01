<?php
class Users{
    private $db_sql;
    private $user_id;
    private $user_name;
    private $user_pass;
    private $user_img;
    private $user_email;
    private $user_role;

    //Class Construct
    public function  __construct($db){
        $this->db_sql = $db;
    }
    //CRUD operations, Search and Read for Blog Categroies
    public function read(){
        $conection = $this->db_sql;
        $query = "Select * from users";
        $result = $conection -> query($query);
        return $result;
    }
       public function getIdr($id){
        $conection = $this->db_sql;
        $query = "SELECT * from posts WHERE posts_id = '$id'";
        $result = $conection -> query($query);
        return $result;

    }
    public function search($search){
        $this->tag = $search;
        $conection = $this->db_sql;
        $query = "SELECT * FROM users WHERE post_tag LIKE '%$this->tag%'";
        $result = $conection -> query($query);
        return $result;
    }

     public function LogIn($username, $password){
        $conection = $this->db_sql;
        $query = "SELECT * FROM users WHERE user_name='$username' and user_pass ='$password'";
        $result = $conection -> query($query);
        return $result;
    }





}
?>
