<!-- Include header  -->
<?php
include "includes/admin-header.php"
?>

    <!-- Main Container -->
    <div class="main-panel">
        <div class="row">
            <div class="column column-12">
                <i class="fa fa-columns"></i> Category
            </div>
            <div class="row">
                <div class="column column-12">
                    <table class="admin-table">
                        <thead>
                            <h3>List</h3>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Date</th>
                                <th>Views</th>
                                <th>Image</th>
                                <th>Count</th>
                                <th>Tag</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                          $posts = new Posts($db);
                          $stmt = $posts->read();
                        while($row = $stmt->fetch_assoc()){
                            echo "<tr></tr>";
                            echo " <td>{$row['post_title']}</td>";
                            echo " <td>{$row['post_author']}</td>";
                            echo " <td>{$row['post_date']}</td>";
                            echo " <td>{$row['post_views']}</td>";
                            echo " <td>{$row['post_img']}</td>";
                            echo " <td>{$row['post_coment_count']}</td>";
                            echo " <td>{$row['post_tag']}</td>";
                            echo " <td><a href='edit_posts.php?edit={$row['posts_id']}'><i class='fa fa-pencil-square-o'></i> Edit</a></td>";
                           echo " <td><a href='post.php?delete={$row['posts_id']}' onclick='return confirm('Are you sure?') '><i class='fa fa-trash'></i> Delete</a></td>";
                            echo "<tr></tr>";

                        }
                        ?>
                                <?php
                        if(isset($_GET['delete'])){
                            $del_post = $_GET['delete'];
                            $post = new Posts($db);
                            $stmt = $post->delete($del_post);
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </body>

    </html>
