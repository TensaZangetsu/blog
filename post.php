<!-- Header -->
<?php
include "includes/header.php"
?>
<!-- Navigation  -->
<?php
    include "includes/navigation.php"
?>
<?php
    include "class/post_class.php"
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
    if(isset($_GET['id'])){
    $posts = new Posts($db);
$stmt = $posts->getId($_GET['id']);
while($row_post = $stmt->fetch_assoc()){
                    ?>
                    <h1><a href="" title="blog" class="blog-title"><?php echo "{$row_post['post_title']}"; ?> </a></h1>
                    <h2>by: <a href="" title='author' class="author"><?php echo "{$row_post['post_author']}"; ?></a></h2>
                    <div class="article-info">
                        <span class="date_created"><i class="fa fa-clock-o"></i> <?php echo "{$row_post['post_date']}"; ?></span>
                        <span class="views"><i class='fa fa-eye'></i> <?php echo "{$row_post['post_views']}"; ?> Views</span>
                        <span class="views"><i class="fa fa-comments"></i><?php echo "{$row_post['post_coment_count']}"; ?> Comments</span>
                        <span class="category"><i class="fa fa-tags"></i><?php echo "{$row_post['post_tag']}"; ?></span>
                    </div>
                    <img src="/img/<?php echo $row_post['post_img'] ?>" alt="blog image">
                    <p class="partial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec.</p>
                    


                    <?php } }?>
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
