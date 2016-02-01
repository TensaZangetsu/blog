<!-- Header -->
<?php
include "includes/header.php"
?>
    <!-- Navigation  -->
    <?php
include "includes/navigation.php"
?>
        <!-- Bannner  -->
        <section class="banner" role="banner">
            <div class="page-title">
                <h2>Blog</h2>
                <h1>STAY IN TOUCH</h1>
                <h3>Read our Legend</h3>
            </div>
        </section>
        <!-- Blogs  -->
        <div class="main-container">
            <div class="main wrapper clearfix row">
                <article class="column column-9">
                    <article class="single-article">
                        <header>
                            <?php
    $query = 'SELECT * FROM posts';
$select_all_posts_query = mysqli_query($conection,$query);
while ($row = mysqli_fetch_assoc( $select_all_posts_query)){
    $post_title = $row['post_title'];
    $post_author = $row['post_author'];
    $post_date = $row['post_date'];
    $post_comments = $row['post_coment_count'];
    $post_tag = $row['post_tag'];
    $post_views = $row['post_views'];
    $post_img = $row['post_img'];
    ?>
                                <h1><a href="" title="blog" class="blog-title"><?php echo "$post_title"; ?> </a></h1>
                                <h2>by: <a href="" title='author' class="author"><?php echo "$post_author"; ?></a></h2>
                                <div class="article-info">
                                    <span class="date_created"><i class="fa fa-clock-o"></i> <?php echo "$post_date"; ?></span>
                                    <span class="views"><i class='fa fa-eye'></i> <?php echo "$post_views"; ?> Views</span>
                                    <span class="views"><i class="fa fa-comments"></i><?php echo "$post_comments"; ?> Comments</span>
                                    <span class="category"><i class="fa fa-tags"></i><?php echo "$post_tag"; ?></span>
                                </div>
                                <img src="img/blogArticleImg1.jpg" alt="responsive web design">
                                <p class="partial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec.</p>
                                <a class="read-more" href="#" title="Read More">Read More</a>



                                <?php } ?>

                        </header>

                    </article>

                </article>

                <?php
include 'includes/aside.php'
?>

            </div>
            <!-- #main -->
        </div>
        <!-- #main-container -->
        <!-- Footer  -->
        <?php
include 'includes/footer.php'
?>
