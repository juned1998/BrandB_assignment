<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>



<?php
  if(isset($_GET['post_id'])){
    $get_post_id = $_GET['post_id'];
    $query = "SELECT * FROM posts WHERE post_id = $get_post_id";
    $post= mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($post))
    {
        $post_id = $row['post_id'];
        $post_title = $row['post_title'];       
        $post_content = $row['post_content'];       
        $post_image = $row['post_image'];  
        $post_date = $row['post_date'];
    }

  }
?>

<section class="py-6 bg-gradient">
  <div class="container ">
    <div class="page-heading">Blog</div>
    <div class="border"></div>

    <section id="blog-post">
    
      <article class="blog-article">
        <h3><a href="./blog.php">back to blog home</a></h3>
        <img src="./img/blog/<?php echo $post_image;?>" alt=""
        class="article-img">
      
        <p style="color:#000;"><?php echo "Published on: ".$post_date ?></p>
        <h1 class="article-title"><?php echo $post_title?></h1>
        <p class="article-content">
           <?php echo $post_content;?>
        </p>
      </article>

      <aside class="similar-articles">
        <h2>Read Further..</h2>


<?php
    
      $query = "SELECT post_id,post_title FROM posts WHERE post_id!= $post_id AND post_status='published'  ";
      $post= mysqli_query($conn, $query);

      while($row = mysqli_fetch_assoc($post))
      {
          $post_id = $row['post_id'];
          $post_title = $row['post_title'];

         echo "<h3 class='title'><a href='blog_post.php?post_id=$post_id'>$post_title</a></h3>";
  }   
?>

      </aside>
    </section>
  </div> 

</section>

<?php include 'includes/footer.php' ?>