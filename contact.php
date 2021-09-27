<!-- HTML head -->
  <?php include "./inc/head.php" ?>

  <body>
<!-- Cookies file -->
  <?php include "./inc/cookies.php" ?>

<!-- Header -->

  <?php include "./inc/header.php" ?>

<!-- NAV BAR -->
  <?php include "./inc/navbar.php" ?>

<!-- Database connection file -->
  <?php 
  require __DIR__ . './inc/connection.php';
  require __DIR__ . './inc/functions.php';

  ?>

    <div class="contact-page-container">
      <div class="home-path-container">
        <div class="home-path"><a href="index.php">Home</a> / Our Offices</div>
      </div>
      <div class="offices-title-container">
        <h1>Our Offices</h1>
      </div>

   <?php   


$contactArray = [];

if (isset($_POST['submit'])) {

    if (!empty($_POST['name'])
    && !empty($_POST['email'])
    && !empty($_POST['phone_number'])
    && !empty($_POST['subject'])
    && !empty($_POST['message'])) {

       $name = $_POST['name'];
       $email = $_POST['email'];
       $phone_number = $_POST['phone_number'];
       $subject = $_POST['subject'];
       $message = $_POST['message'];

       if (isset($_POST['newsletter'])) {
            $newsletter = true;
       } else {
            $newsletter = false;
       }

       $contactArray = [
        "name" => $name,
        "email" => $email,
        "phone_number" => $phone_number,
        "subject" => $subject,
        "message" => $message,
        "newsletter" => $newsletter
       ];

       postContact($db, $contactArray);
   }
   
  //  $completeMessage = createMessage($contactArray);
}




        // // validate the form on the server-side and submit 
        // if (isset($_POST['submit'])) {
        //   $array = validateForm();
        //   if ($array["passed"]) {
        //     $dbSuccess = postContact($GLOBALS["db"], $contactArray);
        //   } else {
        //     $errorArray = $array["array"];
        //   }
        // }

      ?>



      <div class="offices-container">
        <div class="offices-card">
          <div class="offices-border-div">
            <div class="offices-image">
              <a href="#"><img src="img/cambridge.jpg"></a>
            </div>
            <div class="content">
              <h2><a href="#">Cambridge Office</a></h2>
              <p>
                Unit 1.28,
                <br>
                St John's Innovation Centre,
                <br>
                Cowley Road, Milton,
                <br>
                Cambridge,
                <br>
                CB4 0WS
              </p>
              <div class="offices-tel"><a href="tel:01223375772">01223 37 57 72</a></div>
              <div class="more-info-offices">
                <a href="#" class="btn-offices">View More</a>
              </div>
            </div>
          </div>
          <div id="mapid" class="mapid"></div>
        </div>


        <div class="offices-card">    
          <div class="offices-border-div">     
            <div class="offices-image">
              <a href="#"><img src="img/wymondham.jpg"></a>
            </div>
            <div class="content">
              <h2><a href="#">Wymondham Office</a></h2>
              <p>
                Unit 15,
                <br>
                Penfold Drive,
                <br>
                Gateway 11 Business Park,
                <br>
                Wymondham, Norfolk,
                <br>
                NR18 0WZ
              </p>
              <div class="offices-tel"><a href="tel:01603704020">01603 70 40 20</a></div>
              <div class="more-info-offices">
                <a href="#" class="btn-offices">View More</a>
              </div>
            </div>
          </div>
          <div id="mapid2" class="mapid"></div>
        </div> 


        <div class="offices-card">    
          <div class="offices-border-div">
            <div class="offices-image">
              <a href="#"><img src="img/yarmouth.jpg"></a>
            </div>
            <div class="content">
              <h2><a href="#">Great Yarmouth Office</a></h2>
              <p>
                Suite F23,
                <br>
                Beacon Innovation Centre,
                <br>
                Beacon Park, Gorleston,
                <br>
                Great Yarmouth, Norfolk,
                <br>
                NR31 7RA
              </p>
              <div class="offices-tel"><a href="tel:01493603204">01493 60 32 04</a></div>
              <div class="more-info-offices">
                <a href="#" class="btn-offices">View More</a>
              </div>
            </div>
          </div>
          <div id="mapid3" class="mapid"></div>
        </div>


      </div>
      <!-- <div class="map-container">
      <div id="mapid" class="mapid"></div>
      <div id="mapid2" class="mapid"></div>
      <div id="mapid3" class="mapid"></div>
      </div> -->
      <div class="contact-form-container">
      <div class="contact-form">

        <div class="message <?php if (isset($_POST['submit']) && !empty($contactArray)) {
            echo "success";
        } elseif (isset($_POST['submit']) && empty($contactArray))  {
            echo "error";
        }
        ?>">        
        
        <span id="messageText"><?php if (isset($completeMessage)) echo $completeMessage ?></span>
        <!-- <button type="button" id="close-message"><i class="fas fa-times"></i></button> -->

        </div>

      <form action="/contact.php" method="post" onsubmit="return postContact()">
        <div class="contact-form-content">
          <label>Your Name</label>
          <input id="name" type="text" name="name" required="required" value="<?php if (isset($_POST['name']) && empty($contactArray)) echo $_POST['name']?>">
          <label>Your Email</label>
          <input id="email" type="email" name="email" required="required" value="<?php if (isset($_POST['email']) && empty($contactArray)) echo $_POST['email']?>">
          <label>Your Telephone Number</label>
          <input id="phone_number" type="tel" name="phone_number" required="required" value="<?php if (isset($_POST['phone_number']) && empty($contactArray)) echo $_POST['phone_number']?>">
          <label>Subject</label>
          <input id="subject" type="text" name="subject" required="required" value="<?php if (isset($_POST['subject']) && empty($contactArray)) echo $_POST['subject']?>">
          <label>Message</label>
          <textarea id="message" type="text" name="message"><?php if (isset($_POST['message']) && empty($contactArray)) echo $_POST['message']?></textarea>

          <div class="tickbox-contact-form">
            <label class="checkbox-container checkbox-text">Please tick this box if you wish to receive marketing information from us. Please see our 
              <a href="https://www.netmatters.co.uk/privacy-policy" class="privacy-text">Privacy Policy</a> for more information on how we use your data.
              <input type="checkbox" name="newsletter"?php if (isset($_POST['newsletter_signup']) && empty($contactArray)) echo "checked"?>>
              <span class="checkmark"></span>
            </label>

          
          <div class="submit-container-contact-form">
            <input type="submit" name="submit" value="Send Enquiry">

          </div>
        </div>
      </form>
<?php 
    echo 'name =';
    var_dump($_POST['name']);
    echo '<br>email = ';
    var_dump($_POST['email']);
    echo '<br>phone number =';
    var_dump($_POST['phone_number']);
    echo '<br>subject =';
    var_dump($_POST['subject']);
    echo '<br>newsletter =';
    var_dump($_POST['newsletter']);
    echo '<br>message =';
    var_dump($_POST['message']);

?>
          <!-- <div class="submit-container-contact-form">
            <input type="submit" name="submit" value="Send Enquiry">

          </div> -->
      </div>
      </div>
      <div class="email-us-container">
      <div class="email-us">
        <p>Email us on:</p>
        <p id="email-contact"><a href="mailto:sales@netmatters.com">sales@netmatters.com</a></p>
        <p>Business hours:</p>
        <p>Monday - Friday 07:00 - 18:00</p>
        <p id="out-of-hours">Out of Hours IT Support
        <em style="font-style: normal" class="fa fa-chevron-down rotate down"></em>
        </p>
      </div>
      <div class="drop-down-contact">
        <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
        <p id="working-hours-drop-down">Monday - Friday 18:00 - 22:00 
          <br>
          Saturday 08:00 - 16:00
          <br>
          Sunday 10:00 - 18:00
        </p>
        <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call.</p>
      </div>
      </div>
    </div>
    </div>

  <!-- NEWSLETTER SIGN-UP -->
  <?php include "./inc/newsletter.php" ?>
      
  <!-- FOOTER -->
        <?php include "./inc/footer.php" ?>
  
  <!-- Sidebar starts here -->
        <?php include "./inc/sidebar.php" ?>
  
  <!-- Scripts -->
        <?php include "./inc/scripts.php" ?>
  
  </body>
</html>