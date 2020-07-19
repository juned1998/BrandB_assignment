<?php include './includes/header.php' ?>
<?php include './includes/navigation.php' ?>


<section id="contactus-contactus" class="py-6 bg-gradient">

 <h3 class="page-heading">Contact Us</h3>
 <div class="border"></div>
 <div class="container px-1 gridbox-2">

  <section id="contact-information">
    <div >
      <p>Want to get in touch? Give us a call or drop by anytime. We’d love to hear from you and endeavour to answer your questions and enquiries within 24 hours on business days.</p>

      <h5>Address:</h5>
      <p>803, 8th Floor, Crescent Business Square,
         opposite Gundecha Enclave, Andheri East,
          Mumbai, Maharashtra 400072</p>
      <h5>Email: <a href="mailto:hello@brandandbeyond.in">hello@brandandbeyond.in</a></h5>
      <h5>Phone: <a href="tel:+91-9930055611">+91-9930055611</a></h5>
    </div>

    
    <form action="#" id="contact-form" method="POST">
      <h1>Get in touch with us!</h1>
      <div class="form-message"></div>
      <div class="form-group">
        <label for="name">Name:</label>
        <input id="s-name" type="text" name="name" placeholder="Your Name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>           
        <input id="s-email" type="email" name="email" placeholder="Your Email" required>
      </div> 
      <div class="form-group">
        <label for="phone">Phone:</label>           
        <input id="s-phone" type="tel" name="phone" placeholder="Your Phone" required>
      </div> 
      <div class="form-group">
        <label for="companyname">Company Name:</label>           
        <input id="s-companyname" type="text" name="companyname" placeholder="Your Company Name">
      </div>
      <div class="form-group">
        <label for="s-message">Message:</label>
        <textarea name="message" id="s-message" cols="10" rows="2" placeholder="Enter your message.."></textarea>           
      </div> 
      <div class="form-group">
        <input type="submit" value="Submit">
      </div>
    </form>
  </section>
  
 </div>
</section>

<?php require './includes/footer.php' ?>