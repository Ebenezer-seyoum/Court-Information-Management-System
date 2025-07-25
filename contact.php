<?php
include '../Court-Information-Management-System/Home/indexHeader.php';
?>
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
 <div class="container text-center py-5" style="max-width: 900px;">
    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-primary">Contact</li>
    </ol>    
  </div>
</div>
<?php
$fullname = $email = $subject = $message = "";
$fullnameErr = $emailErr = $subjectErr = $messageErr = $allErr = "";
$success = "";
$test = True;
if (isset($_POST["send"]) and ($_SERVER["REQUEST_METHOD"] = "POST")) {

    //validate  full name
    if (empty($_POST["fullname"])) {
     $fullnameErr = "Please enter your full name";
     $test = false;
   } else if (validateName($_POST["fullname"]) == 0) {
     $fullnameErr = "Please enter valid full name";
     $test = false;
   } else {
     $fullname = $_POST["fullname"];
   }
    //validate email 
    if (empty($_POST["email"])) {
     $emailErr = "Please enter your email";
     $test = false;
   } else if (validateEmail($_POST["email"]) == 0) {
     $emailErr = "Please enter valid email";
     $test = false;
   } else {
     $email = $_POST["email"];
   } 
   //validate subject
   if (empty($_POST["subject"])) {
       $subjectErr = "Please enter your subject";
       $test = false;
   } else if (validateName($_POST["subject"]) == 0) {
       $subjectErr = "Please enter valid subject";
       $test = false;
   } else {
       $subject = $_POST["subject"];
   }
    //validate message 
    if (empty($_POST["message"])) {
     $messageErr = "Please enter your message";
     $test = false;
   } else if (validateName($_POST["message"]) == 0) {
     $messageErr = "Please enter valid message";
     $test = false;
   } else {
     $message = $_POST["message"];
   }
   //check and send to database
   if ($test == true) { 
         if (sendMessage($fullname , $email , $subject , $message) == 1) {
             $success = "Successfully submitted";
         } else {
             $allErr = "There was error while sending";
         }
     }
   }//(isset($_POST["register"]) and ($_SERVER["REQUEST_METHOD"] = "POST"))
?>
<!-- Contact Start -->
<div class="container-fluid contact py-5">
  <div class="container py-5">
    <div class="row g-5">
      <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
        <div class="mb-4">
         <h1 class="display-4 mb-4 text-primary">Contacts US</h1>                      
<div class="row g-4">
  <div class="col-lg-6">
    <div class="bg-white d-flex">
      <i class="fas fa-map-marker-alt fa-2x text-primary me-2"></i>
    <div>
    <h4>Address</h4>
    <p class="mb-0">Bench sheko zone, Ethiopia</p>
     </div>
  </div>
</div>
    <div class="col-lg-6">
        <div class="bg-white d-flex">
            <i class="fas fa-envelope fa-2x text-primary me-2"></i>
        <div>
        <h4>Email</h4>
        <p class="mb-0">Yekiworedacourt.com</p>
             </div>
          </div>
        </div>
    <div class="col-lg-6">
        <div class="bg-white d-flex">
            <i class="fa fa-phone-alt fa-2x text-primary me-2"></i>
            <div>
            <h4>Telephone</h4>
            <p class="mb-0">(+251) 913 744 565</p>
            </div>
        </div>
    </div>
  </div>
</div>

   
</div>
<div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
 <div class="form-section bg-dark p-5 h-100">
    <h1 class="display-4 text-white mb-4">Send Feedback</h1>
<form action="#contactForm" method="POST" class="contact-form" id="contactForm">
<div class="row form-group">
<?php if (!empty($success)) { ?>
  <div class=" form-control bg-success" id="successMessage">
    <?php echo $success; ?>
    <br>
</div>
    <?php  } ?>
<?php if (!empty($allErr)) { ?>
 <div class=" form-control bg-danger" id="errorMessage">
    <?php echo $allErr; ?>
    <br>
  <?php  } ?>
  <div class="col-md-12 mb-3 mb-md-0">
       <label class="font-weight-bold" for="fullname">Full Name</label>
       <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name">
       <span class="text-danger"><?php echo $fullnameErr; ?></span>
    </div>
  </div>
<div class="row form-group">
  <div class="col-md-12">
    <label class="font-weight-bold" for="email">Email</label>
    <input type="email" id="email" name="email" class="form-control" placeholder="Email Address">
    <span class="text-danger"><?php echo $emailErr; ?></span>
  </div>
</div>
<div class="row form-group">
  <div class="col-md-12">
    <label class="font-weight-bold" for="email">Subject</label>
    <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter Subject">
    <span class="text-danger"><?php echo $subjectErr; ?></span>
  </div>
</div>
<div class="row form-group">
  <div class="col-md-12">
    <label class="font-weight-bold" for="message">Message</label>
    <textarea name="message" id="message" cols="30" rows="5" class="form-control"
      placeholder="Say hello to us"></textarea>
      <span class="text-danger"><?php echo $messageErr; ?></span>
  </div>
</div>
<div class="row form-group">
  <div class="col-md-12">
     <input type="submit" value="Send Message" name="send" class="btn btn-primary py-3 px-4">
      </div>
    </div>
 </form>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Contact End -->
        <?php
include '../Court-Information-Management-System/Home/indexFooter.php';
?>