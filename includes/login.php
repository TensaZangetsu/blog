<?php session_start();?>
 <?php
if(isset($_POST['login'])){
include_once "../class/db_class.php";
include_once "../class/users_class.php";
$username = mysqli_real_escape_string($db,$_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$user = new Users($db);
$stmt = $user->LogIn($username,$password);
while($row = $stmt->fetch_assoc()){
 $db_user =  $row['user_name'];
 $db_pass =  $row['user_pass'];
 $db_role =  $row['user_role'];
 $db_img =   $row['user_img'];
 $db_email = $row['user_email'];
}
  if($username=db_user && $password=$db_pass)
   {
      $_SESSION['username'] = $db_user;
      $_SESSION['password'] = $db_pass;
      $_SESSION['role'] = $db_role;
      $_SESSION['img'] = $db_img;
      $_SESSION['email'] = $db_email;

       header('location:../admin/admin.php');
   }
   else  {

       header('location:../index.php');
   }

}









?>
