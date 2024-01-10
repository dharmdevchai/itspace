<?php
          include 'includes/conn.php';
?>
          
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
       <meta charset="utf-8">
       <title>IT Space-Gallery</title>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
       <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet" />
       <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
       <!-- Icon-->
       <link rel="stylesheet" href="icons-1.8.1\font\bootstrap-icons.css">
       <script src="bootstrap-5.1.3-dist/js/myjquery.js"></script>
       
       <link rel="stylesheet" href="css/includes/navbar.css" />
       <!-- <link rel="stylesheet" href="css/includes/carousel.css" /> -->
       <link rel="stylesheet" href="css/gallery.css">
       <link rel="stylesheet" href="css/includes/footer.css">
    </head>

   <body>
     
     <?php include 'includes/navbar.php';?>
     <main>
       <div class="  position-relative overflow-hidden p-3 p-md-5  text-center bg-light comming_soon_container">
         <div class=" col-md-5 p-lg-5 mx-auto my-5 comming_soon_item">
           <h1 class="display-4 fw-normal" style="margin-bottom:20px;font-family:initial;filter: drop-shadow(2px 2px 2px blue);">Gallery</h1>
          <!-- <a  class="navigation_btn">Best quality and services</a> -->
           <!-- <a class="navigation_btn" href="feedback.php">Get-></a> -->

          </div>
        </div>
       
        
        <div class="container">
          <div class="gallery_container">
          
          <?php
          $conn=$pdo->open();

         
            $gallery=$conn->prepare("SELECT * FROM gallery");
            $gallery->execute();
            foreach($gallery as $image){
              echo('
              <div class="image">
                  <img class="image_modal" src="images/gallery/'.$image['image_name'].'" alt="" "  data-id='.$image['id'].' data-bs-toggle="modal" data-bs-target="#view_image_modal">
                  <P>'.$image['image_title'].'</P>
              </div>
              ');
            }
        
          



          
           $pdo->close();
           ?>

          </div>
         
        </div>
        <br>
        <div style="display:flex;justify-content:center;width:100%;">
          <a href="feedback.php" class="navigation_btn" style="align-self:center;color:red;">Let's Get Started -></a>
        </div>
          <hr>

       <?php include 'includes/footer.php';?>
       </main> 
		<?php
		include 'scripts/scripts.php';
		include 'scripts/includes/navbar.php';
		include 'scripts/gallery.php';
    include 'modals/gallery.php';
		?>


   </body>
</html>