<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>IT Space-home</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

	  <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet" />
	  <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
	  <!-- Icon-->
	  <link rel="stylesheet" href="icons-1.8.1\font\bootstrap-icons.css">
	  <script src="bootstrap-5.1.3-dist/js/myjquery.js"></script>
	  
	  <link rel="stylesheet" href="css/includes/navbar.css" />
	  <link rel="stylesheet" href="css/includes/carousel.css" />
	  <link rel="stylesheet" href="css/dashboard.css">
	  <link rel="stylesheet" href="css/includes/footer.css">
    <style>
      .services .service_items{
        justify-content: center;
      }
      .service_items .item_name{
      font-weight: 900;
      </style>

   </head>
   <body>
	   
	<?php include 'includes/navbar.php';?>
	   <main>
       <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
           <div class="carousel-indicators" style="display:none;">
             <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
             <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
             <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
           </div>
           <div class="carousel-inner" style="">
              <div class="carousel-item">
                  <img src="images/includes/training.png" alt="" style="height:100%;width:100%;">		 
                  <div class="container">
                      <div class="carousel-caption ">
                         <h1>Best Training Center</h1>
                         <p>One of the Best Training center in Bhairahawa</p>
                       			   </div>
                  </div>
              </div>
              <div class="carousel-item active">
                 <img src="images/includes/training_2.png" alt="" style="height:100%;width:100%;">		 
                 <div class="container">
                   <div class="carousel-caption">
                     <h1>Unbleviable & Qualified Trainer</h1>
                     <p>Going Through Highest Rating </p>
                    				 </div>
                 </div>
              </div>
           
              <div class="carousel-item">
                 <img src="images/includes/training_3.png" alt="" style="height:100%;width:100%;">		 
                 <div class="container">
                   <div class="carousel-caption ">
                     <h1>Overall Incompatible</h1>
                     <p>Provides Quality Standards Traning.  That’s what makes the trainee standards.</p>
                   </div>
                 </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Carousel Script -->
        <script>
            $(document).ready(function(){
                 $('.customer-logos').slick({
                     slidesToScroll: 1,
                     slidesToShow: 6,
                     autoplay: true,
                     autoplaySpeed: 1500,
                     arrows: false,
                     dots: false,
                     pauseOnHover: false,
                     responsive: [{
                         breakpoint: 768,
                         settings: {
                             slidesToShow: 4
                         }
                     }, {
                         breakpoint: 520,
                         settings: {
                             slidesToShow: 3
                         }
                     }]
                    });
                });
		   </script>
       <hr class="featurette-divider">

				
			
       <div class="container services" style="margin-bottom:20px;">
         <i class="bi bi-flag-fill"></i>
          <h1 style="margin-bottom:15px;">Trainning Courses</h1>
          <hr>
          <p>
            Our team of motivated trainers are trained to help you with all your the following Courses.
            If you have a problem, we will figure out how to fix it.
           </p>
           <div class="service_items">
             <div class="service">
               <a href="feedback.php">
               <i class=""><img width="100px"src="images/includes/computer_hardware.png" alt=""></i>
               <div class="item_name">
                   Diploma in Computer hardware & networking
                 </div>
                 <hr>
               </a>
             </div>
             <div class="service">
               <a href="feedback.php">
                 <i class=""><img width="100px"src="images/includes/office_management.png" alt=""></i>
                 <div class="item_name">
                   Office management & automation
                 </div>
                 <hr>
               </a>
             </div>
             <div class="service">
               <a href="feedback.php">
                 <i class=""><img width="100px"src="images/includes/tally.png" alt=""></i>
                 <div class="item_name">
                   Tally erp-9
                 </div>
                 <hr>
               </a>
             </div>
             <div class="service">
               <a href="services.php">
                 <i class=""><img width="100px"src="images/includes/tally_prime.png" alt=""></i>
                 <div class="item_name">
                   Tally Prime
                 </div>
                 <hr>
               </a>
             </div>
             <div class="service">
               <a href="services.php">
                 <i class=""><img width="100px"src="images/includes/swastik.png" alt=""></i>
                 <div class="item_name">
                   Swastik
                 </div>
                 <hr>
               </a>
             </div>
             <div class="service">
               <a href="services.php">
                 <i class=""><img width="100px"src="images/includes/cctv.png" alt=""></i>
                 <div class="item_name">
                 CCTV Course
                 </div>
                 <hr>
               </a>
             </div>
             <div class="service">
               <a href="services.php">
                 <i class=""><img width="100px"src="images/includes/printer.png" alt=""></i>
                 <div class="item_name">
                 Printer repairing course
                 </div>
                 <hr>
               </a>
             </div>
           </div>
           <!-- <div class="rb_textmodule_content_wrapper" style="margin-top: 30px;">
                    <ul>
                    <li><span style="font-weight: 400;">Available for both new &amp; existing customers</span></li>
                    <li><span style="font-weight: 400;">Network, server, workstation, laptop &amp; internet issues</span></li>
                    <li><span style="font-weight: 400;">Team is available during normal business hours</span></li>
                    <li><span style="font-weight: 400;">We try to limit remote jobs to work that can be accomplished in 2 hours or less</span></li>
                </ul>
                <p style="width:100%;text-align:left;">We provide “Remote Assistance” with one goal in mind  to give you the ability to do what you do best and to get you back to running your business.</p>
                <p style="width:100%;text-align:left;"><a href="feedback.php"><strong>Get in contact</strong></a> with us today to see how we can help you!</p>
                
            </div> -->
           <a href="services.php" class="navigation_btn">Let's Get Started -></a>
         </div>
         <hr class="featurette-divider">
       




		    

		   <?php include 'includes/footer.php';?>
		   
		</main>
		<?php
		include 'scripts/scripts.php';
		include 'scripts/includes/navbar.php';
		include 'scripts/training.php';

		
		
		?>


   </body>
</html>