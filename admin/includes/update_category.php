<form action="" method="post">
   <?php
   //File is included in category php and saves new category title in database
   $category = new Category($db);
   $cat_get = $category->getId($_GET['edit']);
   //Echoing input with value of cat id to be edited
   while($row_category = $cat_get->fetch_assoc()){
      echo "<input type='text' name='cat_title' value='{$row_category['cat_title']}'>";
   }
   if(isset($_POST['update_category'])){
      $cat_edit = $category->updateId($_GET['edit'], $_POST['cat_title']);
   }
   ?>
      <br>
      <button name="update_category" type="submit">Update</button>
      <br>
</form>
