<?php
class Posts{
    private $db_sql;
    private $post_id;
    private $post_title;
    private $post_author;
    private $post_img;
    private $view_count;
    private $date_created;
    private $tag;

    //Class Construct
    public function  __construct($db){
        $this->db_sql = $db;
    }
    //CRUD operations, Search and Read for Blog Categroies
    public function read(){
        $conection = $this->db_sql;
        $query = "Select * from posts";
        $result = $conection -> query($query);
        return $result;
    }
       public function getId($id){
        $conection = $this->db_sql;
        $query = "SELECT * from posts WHERE posts_id = '$id'";
        $result = $conection -> query($query);
        return $result;

    }
    public function search($search){
        $this->tag = $search;
        $conection = $this->db_sql;
        $query = "SELECT * FROM posts WHERE post_tag LIKE '%$this->tag%'";
        $result = $conection -> query($query);
        return $result;
    }


        public function insert($id,$title,$author,$date,$views,$img,$content,$count,$tag){
        $conection = $this->db_sql;
        $query = "INSERT into posts (post_title, post_author, post_date, post_views, post_img, post_content, post_coment_count, post_tag) VALUES ('$title','$author','$date','$views','$img','$content','$count','$tag')";
        $result = $conection -> query($query) or die(mysqli_connect_errno()."Data cannot inserted");  if($result){  header('location:posts.php');  }
    }


      public function updateId($id,$title,$author,$date,$views,$img,$content,$count,$tag){
        $conection = $this->db_sql;
        $query = "UPDATE posts set post_title ='$title',
        post_author ='$author',
        post_date = '$date',
        post_views = '$views',
        post_img = '$img',
        post_content = '$content',
        post_coment_count = '$count',
        post_tag = '$tag' WHERE posts_id = '$id'";
        $result = $conection -> query($query) or die(mysqli_connect_errno()."Data cannot inserted");  if($result){  header('location:posts.php');  }

    }


}
?>