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
                   <span><i class="bi bi-gear-wide-connected"></i> OS, Software & Driver Installation </span>
                   <hr>
                   <div class="service_item" style="text-align:center;">
                    <div class="item_content">
                        <div id="os"> <b style="font-size:20px;"> OS installation</b>
                            <br><hr>
                            <div class="img">
                                <img src="images/services/os.jpg" alt="" >
                            </div>
                            <p>
                                An Operating System (OS) is an interface between a computer user and computer hardware. An operating system is a software which performs all the basic tasks like file management, memory management, process management, handling input and output, and controlling peripheral devices such as disk drives and printers.
                                An operating system is software that enables applications to interact with a computer's hardware. The software that contains the core components of the operating system is called the kernel.
                                
                                The primary purposes of an Operating System are to enable applications (spftwares) to interact with a computer's hardware and to manage a system's hardware and software resources.
                                
                                Some popular Operating Systems include Linux Operating System, Windows Operating System, VMS, OS/400, AIX, z/OS, etc. Today, Operating systems is found almost in every device like mobile phones, personal computers, mainframe computers, automobiles, TV, Toys etc.
                            </p>
                        </div>
                        <div id="software"><b style="font-size:20px;">Software Installation</b><br><hr>
                            <div class="img">
                                <img src="images/services/softwares.jpg" alt="" >
                            </div>
                            <p>Your computer allows you to do some really amazing things. Digital photo editing, sophisticated computer gaming, video streaming—all of these things are possible because of different types of software. Developers are always creating new software applications, which allow you to do even more with your computer.</p><br><br>
                            <b>The Windows Store</b><br>
                            <p>If you're using Windows 8, you can download and install software from the Windows Store. The Windows Store is meant to simplify the process of locating and installing software from third-party developers—when you find an app in the Windows store, you won't have to do any extra work to install it.</p>
                        </div>
                        <div id="driver"><b style="font-size:20px;">Drive Installation</b><br><hr>
                            <div class="img">
                                <img src="images/services/drivers.jpg" alt="" >
                            </div>
                            <p>Drive in computer installation and upgrade is a process that consists of installing or upgrading hardware and software components to a computer. This process is an important part of maintaining a computer and keeping it up to date with the latest technology.</p><br>
                            <p>The process typically starts with an assessment of the computer's current hardware and software components. This allows the technician to identify any components that need to be replaced or upgraded. The technician may also need to check for compatibility between the new hardware and software, as well as any other existing components.</p><br>
                            <p>Once the assessment is complete, the technician will install or upgrade the necessary components. This can include installing new hardware, such as a graphics card or hard drive, or upgrading existing software, such as an operating system or antivirus program. The technician may also need to configure the new components in order to ensure they work properly.</p><br>
                            <p>
                            Finally, the technician will test the computer to make sure the new components are functioning correctly. This testing is an important part of the process, as it ensures the computer is running optimally.
                            </p><br>
                            <p>
                            Drive in computer installation and upgrade can be a time-consuming process, but it is essential to ensure the computer is running at its best. It is important to ensure that the technician is knowledgeable and experienced in this type of work, as mistakes can lead to significant problems down the line.
                            </p>
                        </div>
                                

                </div>

                
            </div>
            <a href="feedback.php" class="navigation_btn" style="width:fit-content;align-self:center;">Let's Get Started -></a>

            </div>
            





       <?php include 'includes/footer.php';?>
       </main> 

       <script>
            $("#software_installation").css("color","#ed1c24")

       </script>
		<?php
		include 'scripts/scripts.php';
		include 'scripts/includes/navbar.php';
		include 'scripts/services.php';
		?>



   </body>
</html>