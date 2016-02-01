<!-- Include header  -->
<?php
include "includes/admin-header.php"
?>

 <!-- Main Container -->
 <div class="main-panel">
  <div class="row">
   <div class="column column-12">
    <i class="fa fa-columns"></i> Update Category
   </div>
   <div class="row">
    <div class="column column-12">
     <div class="column column-10">
      <form action="" method="post" enctype='multipart/form-data'>
       <span>Id</span>
       <input name='id'>
       <span>Title</span>
       <input name='title'>
       <span>Author</span>
       <input name='author'>
       <span>Date</span>"
       <input type='date' name='date'>
       <span>Views</span>
       <input name='views'>
       <span>Img</span>
       <input type="file" name='img'>
       <span>Content</span>
       <br>
       <textarea name='content' id="" cols="30" rows="3"></textarea>
       <br>
       <span>Coment</span>
       <input name='count'>
       <span>Tag</span>
       <input name='tag'>

       <br>
       <button name="insert_post" type="submit">Insert</button>
       <br>
      </form>
      <?php
                       if(isset($_POST['insert_post'])){
                       extract($_POST);
                       $img = $_FILES["img"]['name'];
                       move_uploaded_file($_FILES["img"]["tmp_name"],"../img/$img");
                      $posts = new Posts($db);
                      $posts->insert($id,$title,$author,$date,$views,$img,$content,$count,$tag);
                        }
                     ?>
     </div>
    </div>
   </div>
  </div>
 </div>
 </div>
 </body>

 </html>
