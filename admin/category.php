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
                                <th>ID</th>
                                <th>Category</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $category = new Category($db);
                        $stmt = $category->read();
                        while($row = $stmt->fetch_assoc()){
                            $cat_title = $row['cat_title'];
                            $cat_id = $row['cat_id'];
                            echo "<tr></tr>";
                            echo " <td>{$cat_id}</td>";
                            echo " <td>{$cat_title}</td>";
                            echo " <td><a href='category.php?edit={$cat_id}'><i class='fa fa-pencil-square-o'></i> Edit</a></td>";
                            echo " <td><a href='category.php?delete={$cat_id}' onclick='return confirm('Are you sure?') '><i class='fa fa-trash'></i> Delete</a></td>";
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
