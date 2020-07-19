<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>

<section class="py-6 bg-gradient">
  <div class="container ">
    <div class="page-heading">Blog</div>
    <div class="border"></div>

    <section id="blog">

      <main class="latest-article">
        <img src="./img/blog/main-laptop.jpg" alt="">
        <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, cupiditate?</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, aspernatur. At fugiat possimus nemo animi unde ad a? Ullam blanditiis quos excepturi, ipsa suscipit inventore necessitatibus ea vel unde soluta... <a href="./blog_post.php">Read More</a></p>
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

      <aside class="similar-articles">
        <h2>You might also like..</h2>
        <h3 class="title"><a href="#">Lorem ipsum dolor sit amet.</a></h3>
        <h3 class="title"><a href="#">Lorem ipsum dolor sit amet.</a></h3>
        <h3 class="title"><a href="#">Lorem ipsum dolor sit amet.</a></h3>
        <h3 class="title"><a href="#">Lorem ipsum dolor sit amet.</a></h3>
      </aside>

      <section class="suggested-articles">
        <h2>Recent..</h2>
        <div class="post-thumbnail">
          <img src="./img/blog/suggested.jpg" alt="">
          <h2 class="title"><a href="#">10 Big Reasons Why To Hire Digital Marketing Agency.</a></h2>
        </div>
        <div class="post-thumbnail">
          <img src="./img/blog/suggested.jpg" alt="">
          <h2 class="title"><a href="#">10 Big Reasons Why To Hire Digital Marketing Agency.</a></h2>
        </div>
        <div class="post-thumbnail">
          <img src="./img/blog/suggested.jpg" alt="">
          <h2 class="title"><a href="#">10 Big Reasons Why To Hire Digital Marketing Agency. 10 Big Reasons Why To Hire Digital Marketing Agency.</a></h2>
        </div>
        <div class="post-thumbnail">
          <img src="./img/blog/suggested.jpg" alt="">
          <h2 class="title"><a href="#">10 Big Reasons Why To Hire Digital Marketing Agency.</a></h2>
        </div>
        <div class="post-thumbnail">
          <img src="./img/blog/suggested.jpg" alt="">
          <h2 class="title"><a href="#">10 Big Reasons Why To Hire Digital Marketing Agency.</a></h2>
        </div>
      </section>
    </section>
  </div> 

</section>

<?php include 'includes/footer.php' ?>