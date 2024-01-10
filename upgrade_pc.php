<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
       <meta charset="utf-8">
       <title>IT Space-services</title>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
       <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet" />
       <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
       <!-- Icon-->
       <link rel="stylesheet" href="icons-1.8.1\font\bootstrap-icons.css">
       <script src="bootstrap-5.1.3-dist/js/myjquery.js"></script>
       
       <link rel="stylesheet" href="css/includes/navbar.css" />
       <link rel="stylesheet" href="css/includes/carousel.css" />
       <link rel="stylesheet" href="css/services.css">
       <link rel="stylesheet" href="css/includes/footer.css">
    </head>

   <body>
	   
       <?php include 'includes/navbar.php';?>
       <main>
           <div class="services_main">
               <div class="container all_services"style="padding-bottom: 25px;">
                   <span><i class="bi bi-pc"></i>Laptop/Computer Upgrade</span>
                   <hr>
                   <div class="service_item" style="text-align:center;">
                        <div class="item_content">
                            <p>
                            Laptop/computer upgrades can be done to improve performance, increase RAM or storage capacity, or replace outdated components. Depending on the type of laptop/computer you have, you may have the option to upgrade the processor, add additional RAM, replace the hard drive with a larger capacity drive, or even upgrade the video card. You may also be able to upgrade the operating system, add a second hard drive, or upgrade the wireless card. Before attempting any of these upgrades, it is important to make sure that your laptop/computer is supported by the new components and that the new components are compatible with your current hardware.
                            </p>
                            <p>
                               <b> 1. Processor:</b> Upgrade the processor to a faster processor, such as an Intel Core i7 or AMD Ryzen 7.
                                <br>
                                <b>2. RAM:</b> Upgrade the RAM to a higher capacity, such as 8GB or 16GB.
                                <br>
                                <b>3. Hard Drive:</b> Upgrade the hard drive to a larger capacity and faster speed, such as an SSD.
                                <br>
                                <b>4. Graphics Card:</b> Upgrade the graphics card to a newer and more powerful model, such as an NVIDIA GeForce RTX 2080.
                                <br>
                               <b> 5. Network Card:</b> Upgrade the network card to a faster model, such as an 802.11ac wireless card.
                               <br>
                                <b>6. Optical Drive: </b> Upgrade the optical drive to a Blu-ray or DVD-RW drive.
                                <br>
                                <b>7. Cooling System: </b> Upgrade the cooling system to a more efficient model, such as liquid cooling.
                                <br>
                                <div class="img">
                                    <img src="images/services/upgrade.jpg" alt="" >
                                </div>


                            </p>
                        </div>
                        <div class="img">
                            <img src="images/services/motherboard_issue.jpg" alt="" >

                        </div>
                   
                    </div>
                    <a href="feedback.php" class="navigation_btn" style="width:fit-content;align-self:center;">Let's Get Started -></a>

                </div>
            </div>
   




       <?php include 'includes/footer.php';?>
       </main> 

       <script>
            $("#upgrade").css("color","#ed1c24")

       </script>
		<?php
		include 'scripts/scripts.php';
		include 'scripts/includes/navbar.php';
		include 'scripts/services.php';
		?>



   </body>
</html>