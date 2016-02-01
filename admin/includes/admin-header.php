<?php
  include_once($_SERVER["DOCUMENT_ROOT"] . '/class/db_class.php');
?>
    <?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/class/category_class.php');
?>
        <?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/class/post_class.php');
?>
            <?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/class/users_class.php');
?>

                <?php ob_start(); ?>
                    <?php session_start(); ?>
<?php  if(isset($_SESSION['role'])){
     
}
else{
    header('location:../index.php');
}
 
?>                       
                        <!doctype html>
                        <!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="">
<![endif]-->
                        <!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="">
<![endif]-->
                        <!--[if IE 8]>
<html class="no-js lt-ie9" lang="">
<![endif]-->
                        <!--[if gt IE 8]>
<!-->
                        <html class="no-js" lang="eng">
                        <!--
<![endif]-->

                        <head>
                            <meta charset="utf-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                            <title>Admin Template</title>
                            <meta name="description" content="">
                            <meta name="viewport" content="width=device-width, initial-scale=1">
                            <link rel="apple-touch-icon" href="../favicon-16x16.png">
                            <link href="../css/font-awesome.min.css" rel="stylesheet">
                            <link rel="stylesheet" href="/css/normalize.min.css">
                            <link rel="stylesheet" href="/css/admin.css">
                            <script src="../js/main.js"></script>
                            <script src="../js/vendor/jquery-1.11.2.min.js"></script>
                            <script src="/js/main.js"></script>
                        </head>
                        <?php
    include "includes/adminLeftMenu.php"
    ?>
                            <!-- Include Right Menu  -->
                            <?php
        include "includes/adminRightMenu.php"
    ?>

                                <body>
