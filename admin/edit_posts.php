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
                            <?php
                 if(isset($_GET['edit'])){
                      $posts = new Posts($db);
                      $stmt = $posts->getId($_GET['edit']);
                    while($row = $stmt->fetch_assoc()){
                    echo "<span>Id</span>";
                    echo " <input value='{$row['posts_id']}' name='id'>";
                    echo "<span>Title</span>";
                    echo " <input value='{$row['post_title']}' name='title'>";
                    echo "<span>Author</span>";
                    echo " <input value='{$row['post_author']}' name='author'>";
                    echo "<span>Date</span>";
                    echo " <input type='date' value='{$row['post_date']}' name='date'>";
                    echo "<span>Views</span>";
                    echo " <input value='{$row['post_views']}' name='views'>";
                    echo "<span>Img</span>";
                    echo " <input type='file'  name='img'>";
                    echo "<span>Content</span>";
                    echo " <input value='{$row['post_content']}' name='content'>";
                    echo "<span>Coment</span>";
                    echo " <input value='{$row['post_coment_count']}' name='count'>";
                    echo "<span>Tag</span>";
                    echo " <input value='{$row['post_tag']}' name='tag'>";
                    }}
                    ?>
                                <br>
                                <input name="update_post" type="submit">
                                <br>
                                <?php
                        if(isset($_POST['update_post'])){
                      extract($_POST);
                       $img = $_FILES["img"]['name'];
                       move_uploaded_file($_FILES["img"]["tmp_name"],"../img/$img");
                      $posts->updateId($id,$title,$author,$date,$views,$img,$content,$count,$tag);
                        }

                        ?>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </body>

    </html>
