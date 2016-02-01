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
                <div class="column column-5">
                    <h3>Category Edit</h3>
                    <form action="" method="post">
                        <?php
    if(isset($_POST['submit'])){
        $cat_name = $_POST['category'];
        $category = new Category($db);
        $stmt = $category->insert($cat_name);
    }
                    ?>
                            <input type="text" name="category" placeholder="Enter name of category">
                            <br>
                            <button name="submit" type="submit">Add</button>
                            <br>
                    </form>
                    <?php
                if(isset($_GET['edit'])){

                    include "includes/update_category.php";
                }
                ?>
                </div>
                <div class="column column-7">
                    <h3>List</h3>
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Img</th>
                                <th>Email</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $users = new Users($db);
                        $stmt = $users->read();
                        while($row = $stmt->fetch_assoc()){
                            echo " <td>{$row['user_name']}</td>";
                            echo " <td>{$row['user_role']}</td>";
                            echo " <td>{$row['user_img']}</td>";
                            echo " <td>{$row['user_email']}</td>";
                            echo " <td><a href='category.php?edit={$row['user_id']}'><i class='fa fa-pencil-square-o'></i> Edit</a></td>";
                            echo " <td><a href='category.php?delete={$row['user_id']}' onclick='return confirm('Are you sure?') '><i class='fa fa-trash'></i> Delete</a></td>";
                            echo "<tr></tr>";
                        }
                        ?>
                                <?php
                        if(isset($_GET['delete'])){
                            $del_cat = $_GET['delete'];
                            $category = new Category($db);
                            $stmt = $category->delete($del_cat);
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
