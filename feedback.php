
 <?php
 if(session_status() == PHP_SESSION_NONE) { session_start(); }
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
       <meta charset="utf-8">
       <title>IT Space-feedback</title>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
       <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet" />
       <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
       <!-- Icon-->
       <link rel="stylesheet" href="icons-1.8.1\font\bootstrap-icons.css">
       <script src="bootstrap-5.1.3-dist/js/myjquery.js"></script>
       
       <link rel="stylesheet" href="css/includes/navbar.css" />
       <link rel="stylesheet" href="css/includes/carousel.css" />
       <link rel="stylesheet" href="css/feedback.css">
       <link rel="stylesheet" href="css/includes/footer.css">
    </head>

   <body>
       <?php include 'includes/navbar.php';?>
       <main>
           <div class="contact_form">
               <div class="container" style="">

                   <div class="row contact_form_first">
                   
                  
                      <h2>Contact Us</h2>
                      <div class="col-md-6 " id="form_container">
                        
                          <p style="    color: whitesmoke;
                          background: linear-gradient(203deg, black, transparent);
                          border-radius: 5px;
                          padding: 5px;">
                             Please send your message below. We will get back to you at the earliest!
                          </p>
                           <form action="actions/feedback.php"role="form" method="post"> 
                              <div class="row">
                                  <div class="col-sm-12 form-group">
                                      <label for="message" style="    color: whitesmoke;
                                      background: linear-gradient(203deg, black, transparent);
                                      border-radius: 5px;
                                      padding: 5px;">
                                          Message:</label>
                                      <textarea class="form-control" type="textarea" id="message" name="message" maxlength="6000" rows="7" required></textarea>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-sm-6 form-group">
                                      <label for="name" style="    color: whitesmoke;
                                      background: linear-gradient(203deg, black, transparent);
                                      border-radius: 5px;
                                      padding: 5px;">
                                          Your Name:</label>
                                      <input type="text" class="form-control" id="name" name="name" required="">
                                  </div>
                                  <div class="col-sm-6 form-group">
                                      <label for="email" style="    color: whitesmoke;
                                      background: linear-gradient(203deg, black, transparent);
                                      border-radius: 5px;
                                      padding: 5px;">
                                          Email:</label>
                                      <input type="email" class="form-control" id="email" name="email" required="">
                                  </div>
                              </div>
                  
                                            
                              
                              <div class="row">
                                  <div class="col-sm-12 form-group">
                                      <?php
                                      if(isset($_SESSION['success'])){
                                          echo "<div style='background-color:green;color:white;margin: 5px 0 0 0;padding: 5px;border-radius: 4px;'>".$_SESSION['success'].'</div>';
                                          unset($_SESSION['success']);
                                        }
                                        if(isset($_SESSION['error'])){
                                            echo "<div style='background-color:red;color:white;margin: 5px 0 0 0;padding: 5px;border-radius: 4px;'>".$_SESSION['error'].'</div>';;
                                            unset($_SESSION['error']);

                                        }
                                        ?><br>
                                        
                                      <button type="submit" class=" submit_btn btn btn-lg btn-default pull-right" name="contact" value="true">Send →</button>
                                  </div>
                               </div>
                           </form>          
                       </div>
                       <div class="col-md-6 info_container">
                        <div class="address">
                        <i class="bi bi-geo-alt-fill"></i>
                            <a href="https://www.google.com/maps/dir//IT+SPACE,+%E0%A4%AD%E0%A5%88%E0%A4%B0%E0%A4%B9%E0%A4%B5%E0%A4%BE+%E0%A4%B0%E0%A5%8B%E0%A4%A1,+Siddharthanagar+32900/@27.5136142,83.4463555,2611m/data=!3m1!1e3!4m8!4m7!1m0!1m5!1m1!1s0x39969a47c5232d13:0x52d34fcc68228e8b!2m2!1d83.4529127!2d27.5151599">Narayanthan-8, Bhairahawa</a>

                        </div>
                        <div class="phone_no">
                        <i class="bi bi-whatsapp"></i>
                            <a href="https://wa.me/+9779851103376">+977-9851103376</a>

                        </div>
                        <div class="mail">
                        <i class="bi bi-envelope-fill"></i>
                            <a href="mailto:itspacebhw@gmail.com">itspacebhw@gmail.com</a>
                        </div>
                                 
                       </div>     
                    </div>
                    
                
                </div>
            </div>
                
            
            
            <div class="container map_container">
                <div class="map_content">
                    <img src="images/includes/logo.png" alt="">
                    <h1></h1>
                    <p>
                    This workshop will bring together the satellite engineering and computer networking communities to address challenges in providing reliable inter-constellation connectivity in different orbits to enable huge internet satellite constellations to realise their potential.<br>
                    Most of hand-held devices today runs on the easily customizable and open source Operating System – Android. The two days Android Application Development workshop is designed to quickly get the students to speed with writing apps for Android devices. By the end of the course, students would be able to write simple GUI applications, use built-in widgets and components, work with the database to store data locally, and much more. The workshop on Android Application Development aimed to provide the participants with technical training on the concepts and programming methodologies needed to develop applications for mobile devices
                    </p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3538.524491525942!2d83.45072311433884!3d27.51516004052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39969a47c5232d13%3A0x52d34fcc68228e8b!2sIT%20SPACE!5e0!3m2!1sen!2snp!4v1673424829603!5m2!1sen!2snp" style="border:0;margin-left:15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <hr>
            
           




       <?php include 'includes/footer.php';?>
       </main> 
		<?php
		include 'scripts/scripts.php';
		include 'scripts/includes/navbar.php';
		include 'scripts/feedback.php';
		?>


   </body>
</html>