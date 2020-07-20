<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>

<section class="py-6 bg-gradient">
  <div class="container ">
    <div class="page-heading">Blog</div>
    <div class="border"></div>

    <section id="blog">
        <?php 
          $query = "SELECT * FROM posts WHERE post_status = 'published' ORDER BY post_date DESC limit 1";
          $post= mysqli_query($conn, $query);

            while($row = mysqli_fetch_assoc($post))
          {
              $post_id = $row['post_id'];
              $post_title = $row['post_title'];       
              $post_content = $row['post_content'];       
              $post_image = $row['post_image'];  
              $post_date = $row['post_date'];
          }
          
          $latest_post_id = $post_id;
        ?>
      
     
      <main class="latest-article">
        <img src="./img/blog/<?php echo $post_image;?>" alt="">
        <h1><?php echo $post_title?></h1>
        <div class="post-overview"><?php echo $post_content ?></div>
        <a href="./blog_post.php?post_id=<?php echo $post_id;?>">Read More</a>
      </main>

      <aside class="news-letter">
        <h3>Subscribe to our newsletter</h3>
        <form action="#" id="subscription-form">
          <div class="form-message"></div>
          <div class="form-group">
            <label for="subsrcriber-email">Email:</label>
            <input type="email" name="subsrcriber-email" id="subsrcriber-email" placeholder="Enter your email.">
          </div>
          <div class="form-group">
            <input type="submit" value="Subscribe">
            </div>
        </form>
      </aside>


      <section class="suggested-articles">
        <h2>Recent..</h2>
        <div>
      <?php 
          $query = "SELECT * FROM posts WHERE post_id!=$latest_post_id AND post_status='published' ORDER BY post_date DESC LIMIT 3";
          $posts= mysqli_query($conn, $query);

            while($row = mysqli_fetch_assoc($posts))
          {
              $post_id = $row['post_id'];
              $post_title = $row['post_title'];       
              $post_content = $row['post_content'];       
              $post_image = $row['post_image'];  
              $post_date = $row['post_date'];
    ?>

          <div class="post-thumbnail">
          <img src="./img/blog/<?php echo $post_image;?>" alt="">
          <h2 class="title"><a href="./blog_post.php?post_id=<?php echo $post_id;?>"><?php echo $post_title;?></a></h2>
        </div>


 <?php    }   ?>
          </div>
      </section>

      <aside class="similar-articles">
        <h2>You might also like..</h2>
        <?php 
          $query = "SELECT * FROM posts WHERE post_status='published' ORDER BY post_date DESC LIMIT 3,50";
          $posts= mysqli_query($conn, $query);
          if(mysqli_fetch_assoc($posts)){
             while($row = mysqli_fetch_assoc($posts))
            {
              $post_id = $row['post_id'];
              $post_title = $row['post_title'];       
    ?>


        <h3 class="title"><a href="./blog_post.php?post_id=<?php echo $post_id;?>"><?php echo $post_title ?></a></h3>
          
 <?php       }
          }else{
            echo "<h3 class='title'>No articles yet.</h3>";
          }

 ?>
      </aside>
          
    </section>
  </div> 

</section>

<?php include 'includes/footer.php' ?>