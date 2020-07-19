<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/menu.css" media="screen and (max-width:768px)">
  <title>Brand & Beyond</title>
</head>
<body>
   -->
  <!-- Header -->
  <?php include './includes/header.php' ?>

  <!-- Navigation Bar -->
  <?php include './includes/navigation.php' ?>
  
  

  <!-- Header: Showcase -->
  <header id="showcase">
    <div class="container">
      <div class="showcase-content">

        <div class="left-content">
          <h1>Let's start your new project.</h1>
        </div>

        <div class="right-content"> 
          <form action="#" id="showcase-form" method="POST">
          <div class="form-message"></div>
            <div class="form-group">
              <label for="s-name">Name:</label>
              <input id="s-name" type="text" name="s-name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
              <label for="s-email">Email:</label>           
              <input id="s-email" type="email" name="email" placeholder="Your Email" required>
            </div> 
            <div class="form-group">
              <label for="s-phone">Phone:</label>           
              <input id="s-phone" type="tel" pattern="^\d{10}$" name="phone" placeholder="Enter 10-digit phone number" required>
            </div> 
            <div class="form-group">
              <label for="s-companyname">Company Name:</label>           
              <input id="s-companyname" type="text" name="companyname" placeholder="Your Company Name">
            </div> 
            <div class="form-group">
              <label for="s-message">Message:</label>
              <textarea name="message" id="s-message" cols="10" rows="2" placeholder="Enter your message.."></textarea>           
            </div> 
            <div class="form-group">
              <input type="submit" value="Let's Talk!">
            </div>
          </form>
        </div>
      </div>
      <img src="./img/analytics.svg" alt="hero" class="analytics-svg">
    </div>
  </header>

  <!-- Services -->
  <section id="services">
    
    <h3 class="heading">Services We Offer</h3>
    <p class="sub-heading">Our strengh lies in the comprehensive suite of services we offer to our clients.    </p>
    <div class="container">
      <div class="services-item">
        <img src="./img/social-media.svg" alt="social-media-icon">
        <h5>Social Media</h5>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae earum nobis </p>
      </div>
      <div class="services-item">
        <img src="./img/seo.svg" alt="seo-icon">
        <h5>SEO</h5>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae earum nobis fugiat ab placeat unde quas necessitatibus qui inventore facere, .</p>
      </div>
      <div class="services-item">
        <img src="./img/paid-media.svg" alt="paid-media-icon">
        <h5>Paid Media</h5>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae earum nobis fugiat ab placeat unde quas necessitatibus qui inventore facere, pariatur molestiae perspiciatis quo itaque tenetur autem nihil illum iste.</p>
      </div>
      <div class="services-item">
        <img src="./img/website-dev.svg" alt="website-development-icon">
        <h5>Website Development</h5>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae earum nobis fugiat ab placeat unde quas necessitatibus qui inventore facere, pariatur molestiae perspiciatis quo itaque tenetur autem nihil illum iste.</p>
      </div>
    </div>
  </section>

  <section id="about-us">
    <h3 class="heading">About us</h3>
    <p class="sub-heading">We are a team of experienced, business-minded individuals that understand that the ultimate objective.</p>
    <div class="container">
      <div class="aboutUs-item">
        <h5>Delivering results through automation and analytics</h5>
        <p>We are not just a digital marketing agency; we are a team of experienced, business-minded individuals that understand that the ultimate objective of your business is to drive sales while establishing and growing your brand.</p>
        <a href="#">Know More</a>
      </div>
      <div class="aboutUs-item">
        <img src="./img/aboutus-right.jpg" alt="plan-build">
      </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include './includes/footer.php' ?>
 