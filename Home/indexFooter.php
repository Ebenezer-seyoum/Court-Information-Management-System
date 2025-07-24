<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
 B <div class="container py-5">
   <div class="row g-5">
    <div class="col-md-6 col-lg-6 col-xl-3">
     <div class="footer-item">
    <h1 class="text-white mb-4"><i class="fas fa-scale-balanced text-primary me-2"></i> YWC</h1>
      
         
    </div>
</div>
<div class="col-md-6 col-lg-6 col-xl-3">
  <div class="footer-item">
    <h4 class="text-white mb-4">Quick Links</h4>
    <a href="index.php"> Home</a>
    <a href="about.php"> About us</a>
    <a href="contact.php">Contact</a>
    <a href="daily_trial.php"> Daily court trial schedule</a>
    <a href="case_tracker.php">Case Tracker</a>
  </div>
</div>
<div class="col-md-6 col-lg-6 col-xl-3">
  <div class="footer-item">
    <h4 class="text-white mb-4">Contact Info</h4>
    <div class="row g-2">
<div class="col-12 d-flex">
    <i class="fas fa-map-marker-alt text-primary me-2"></i>
    <div>
        <h5 class="text-white mb-2">Address</h5>
        <p class="mb-0">Bench sheko zone, Ethiopia</p>
    </div>
  </div>
  <div class="col-12 d-flex">
      <i class="fas fa-envelope text-primary me-2"></i>
      <div>
          <h5 class="text-white mb-2">Email</h5>
          <p class="mb-0">Yekiworedacourt.com</p>
      </div>
  </div>
  <div class="col-12 d-flex">
      <i class="fa fa-phone-alt text-primary me-2"></i>
      <div>
          <h5 class="text-white mb-2">Telephone</h5>
          <p class="mb-0">(+251) 913 744 565</p>
      </div>
  </div>
        </div>
     </div>
  </div>           
   </div>
 </div>
</div>
<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
 <div class="container">
   <div class="row g-4 align-items-center">
     <div class="col-md-6 text-center text-md-start mb-md-0">
        <span class="text-body">&copy; <script>document.write(new Date().getFullYear());</script> 
        Yeki Wereda Court — All rights reserved</span>
      </div> 
    </div>
  </div>
</div>  
<!-- Back to Top -->
<div class="back-to-top">
    <a href="#" class="btn"><i class="fa fa-arrow-up"></i></a>  
</div>     
   <!-- JavaScript Libraries -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
   <script src="lib/wow/wow.min.js"></script>
   <script src="lib/easing/easing.min.js"></script>
   <script src="lib/waypoints/waypoints.min.js"></script>
   <script src="lib/owlcarousel/owl.carousel.min.js"></script>    
   <!-- Template Javascript -->
   <script src="js/main.js"></script>
   <script>
    window.addEventListener('load', function () {
    document.getElementById('spinner').classList.remove('show');
    });
   </script>
   <!-- Timeout for success message -->
    <script>
        setTimeout(function () {
            var successMsg = document.getElementById('successMessage');
            if (successMsg) {
                successMsg.style.display = 'none';
            }
            var errorMsg = document.getElementById('errorMessage');
            if (errorMsg) {
                errorMsg.style.display = 'none';
            }
        }, 2000); 
    </script>
    <!-- smooth scroll -->
    <script>
    document.getElementById('searchForm').addEventListener('submit', function() {
      localStorage.setItem('scrollAfterSearch', 'yes');
    });        
    window.addEventListener('load', function() {
      if (localStorage.getItem('scrollAfterSearch') === 'yes') {
        const form = document.getElementById('searchForm');
        if (form) {
          form.scrollIntoView({ behavior: 'smooth' });
        }
        localStorage.removeItem('scrollAfterSearch');
      }
    });
    </script>
  </body>
</html>