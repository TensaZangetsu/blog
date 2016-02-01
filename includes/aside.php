<?php
        include_once($_SERVER["DOCUMENT_ROOT"] . '/class/db_class.php');

?>
    <?php
        include_once($_SERVER["DOCUMENT_ROOT"] . '/class/category_class.php');
?>
        <aside class='column column-3'>
            <form action="search.php" method="post">
                <h2>Search Posts:</h2>
                <input type="text" name="search" placeholder="search">
                <button class="default" name="submit" type="submit">Search</button>
            </form>
            <form action="includes/login.php" method="post">
                <h2>Log in:</h2>
                <input type="text" name="username">
                <input type="text" name="password">
                <button class="default" name="login" type="submit">Login User</button>
            </form>

            <h2>Blog Categories:</h2>
            <ul>
                <?php
              $category = new Category($db);
              $stmt = $category->read();
              while($row_category = $stmt->fetch_assoc()){
               echo "<li><i class='fa fa-angle-double-right'><a href='#'>{$row_category['cat_title']} </a></i></li>";
              }
            ?>
            </ul>
        </aside>
