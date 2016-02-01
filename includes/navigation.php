<?php
        include($_SERVER["DOCUMENT_ROOT"] . '/class/db_class.php');

?>
    <?php
        include($_SERVER["DOCUMENT_ROOT"] . '/class/category_class.php');
?>
        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title">Skadi <span>Design</span></h1>
                <nav role="navigation">
                    <ul>
                        <?php
              $category = new Category($db);
              $stmt = $category->read();
              while($row_category = $stmt->fetch_assoc()){
               echo "<li><a href='#'>{$row_category['cat_title']} </a></li>";
              }
                        ?>

                    </ul>
                </nav>
                <i class="fa fa-bars"></i>
            </header>
        </div>
