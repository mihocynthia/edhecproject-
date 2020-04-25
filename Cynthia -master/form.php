<?php include('form_process.php');
  <link rel= stylesheet href=form.css type=text/css>
    <!-- <form id="contact form" action="" method="post">
      <div class="container">
         <h3>Quick Contact</h3>
         <h4>Contact us today, and get reply with in 24 hours!</h4>
           <input placeholder="First Name" type="text" tabindex="1" required autofocus> </br>
           <input placeholder="Last Name" type="text" tabindex="2" required> </br>
           <input placeholder="Your Email Address" type="email" tabindex="3" required> </br>
           <input placeholder="Your Phone Number" type="tel" tabindex="4" required></br>
           <input textarea placeholder="Type your Message Here...." tabindex="5" required></textarea> </br>
           <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
       </form>
      </div> -->

      <div class="container">

  <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" name="Full Name" value="<?= $name ?>" autofocus>
      <span class="error"><?= $name_error ?><?</span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="Email" value="<?= $email ?>" tabindex="2">
      <span class="error"><?= $email_error ?><?</span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" name="Phone Number" value="<?= $phone ?>" tabindex="3">
      <span class="error"><?= $phone_error ?><?</span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="text" name="Your URL" value="<?= $url ?>" tabindex="4">
      <span class="error"><?= $url_error ?><?</span>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." type="text" name="Message" value="<?= $message ?>"tabindex="5"></textarea>
      <span class="error"><?= $message_error ?><?</span>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <span class ="success"><?= $success; ?></span> //echo out the success variable
  </form>
</div>
