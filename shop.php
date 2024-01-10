<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
       <meta charset="utf-8">
       <title>IT Space-Shop</title>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
       <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet" />
       <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
       <!-- Icon-->
       <link rel="stylesheet" href="icons-1.8.1\font\bootstrap-icons.css">
       <script src="bootstrap-5.1.3-dist/js/myjquery.js"></script>
       
       <link rel="stylesheet" href="css/includes/navbar.css" />
       <link rel="stylesheet" href="css/includes/carousel.css" />
       <link rel="stylesheet" href="css/shop.css">
       <link rel="stylesheet" href="css/includes/footer.css">
    </head>

   <body>
     
     <?php include 'includes/navbar.php';?>
     <main>
       <div class="  position-relative overflow-hidden p-3 p-md-5  text-center bg-light comming_soon_container" >
         <div class=" col-md-5 p-lg-5 mx-auto my-5 comming_soon_item">
           <h1 class="display-4 fw-normal" style="margin-bottom:20px;">Products</h1>
          <!-- <p class="lead fw-normal">We have best and mostly all brands tech gagets Visit us for Lates Update.</p>-->
           <a class="navigation_btn" href="feedback.php">Get-></a>

          </div>
        </div>
        <div class="container search_bar">
          <a class="navbar-brand" id="logo" href="shop.php" style="border-bottom:2px solid red;">Special Products</a>
          <hr>
          
          <form class="d-flex collapse" method="GET" action="shop.php">
            <input class="form-control "    type="text" name="search_key" placeholder="Search products.." aria-label="Search" >
            <button class="btn btn-primary"style="margin-left: -42px;"  type="submit">
              <i class="bi bi-search" ></i>
            </button>
          </form>
        </div>
        <div class="container category">
          <?php
          include 'includes/conn.php';
          $conn=$pdo->open();
          $categories=$conn->prepare("SELECT * FROM products_categories");
          $categories->execute();
          foreach($categories as $category){
             echo("
             <a href='shop.php?category_id=".$category['id']."'>".$category['name']."</a>
             ");
           }
           $pdo->close();
           ?>
        </div>
        <div class="container products">
        <?php
          $conn=$pdo->open();

          if(isset($_GET['search_key'])){
            $key=$_GET['search_key'];
           
              $products=$conn->prepare("SELECT * FROM products where name like '%$key%'  or details like '%$key%'");
            $products->execute();
            foreach($products as $product){
              echo("
              <div class='product'>
                <img src='images/products/".$product['photo']."' alt=''>
                <hr style='margin:5px;height:2px;'>
                <div class='action_btn'>
                  <span>".$product['name']."</span>
                  <a href='feedback.php'><button type='button' data-bs-toggle='modal' data-bs-target='#staticBackdrop' data-id='".$product['id']."' class=' pro_modal btn btn-sm btn-outline-secondary'>Contact</button></a>
                </div>
              </div>
              ");
             }

            
            

          }else if(isset($_GET['category_id'])){
            $products=$conn->prepare("SELECT * FROM products where category_id=:category_id");
            $products->execute(['category_id'=>$_GET['category_id']]);
            foreach($products as $product){
              echo("
              <div class='product'>
                <img src='images/products/".$product['photo']."' alt=''>
                <hr style='margin:5px;height:2px;'>
                <div class='action_btn'>
                  <span>".$product['name']."</span>
                  <a href='feedback.php'><button type='button' data-bs-toggle='modal' data-bs-target='#staticBackdrop' data-id='".$product['id']."' class=' pro_modal btn btn-sm btn-outline-secondary'>Contact</button></a>
                </div>
              </div>
              ");
            }
          }else{
            $products=$conn->prepare("SELECT * FROM products");
            $products->execute();
            foreach($products as $product){
              echo("
              
              <div class='product'  >
                <img src='images/products/".$product['photo']."' data-bs-toggle='modal' data-bs-target='#view_product_modal' data-id='".$product['id']."' class='view_product_modal' alt=''>
                <hr style='margin:5px;height:2px;'>
                <div class='action_btn'>
                  <span>".$product['name']."</span>
                  <a href='feedback.php'><button type='button' data-bs-toggle='modal' data-bs-target='#staticBackdrop' data-id='".$product['id']."' class=' pro_modal btn btn-sm btn-outline-secondary'>Contact</button></a>
                </div>
              </div>
            
              ");
            }
          
          }

           $pdo->close();
           ?>

          <div class="product">
            <img src="images/products/inbuilt_products/laptop.jpg" alt="">
            <hr style="margin:5px;height:2px;">
            <div class="action_btn">
              <span>Laptop</span>
              <a href="feedback.php"><button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="1" class=" pro_modal btn btn-sm btn-outline-secondary">Contact</button></a>
              
            </div>
          </div>
          <div class="product">
            <img src="images/products/inbuilt_products/desktop_moniter.jpg" alt="">
            <hr style="margin:5px;height:2px;">
            <div class="action_btn">
              <span>Desktop Moniter</span>
                            <a href="feedback.php"><button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="1" class=" pro_modal btn btn-sm btn-outline-secondary">Contact</button></a>

              
            </div>
          </div>
          <div class="product">
            <img src="images/products/inbuilt_products/moniter.jpg" alt="">
            <hr style="margin:5px;height:2px;">
            <div class="action_btn">
              <span>Moniter</span>
                            <a href="feedback.php"><button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="1" class=" pro_modal btn btn-sm btn-outline-secondary">Contact</button></a>

              
            </div>
          </div>
          <div class="product">
            <img src="images/products/inbuilt_products/cctv_camera.jpg" alt="">
            <hr style="margin:5px;height:2px;">
            <div class="action_btn">
            <span>CCTV</span>

                            <a href="feedback.php"><button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="1" class=" pro_modal btn btn-sm btn-outline-secondary">Contact</button></a>

              
            </div>
          </div>
          <div class="product">
            <img src="images/products/inbuilt_products/keyboard.jpg" alt="">
            <hr style="margin:5px;height:2px;">
            <div class="action_btn">
            <span>Keyboard</span>

                            <a href="feedback.php"><button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="1" class=" pro_modal btn btn-sm btn-outline-secondary">Contact</button></a>

              
            </div>
          </div>
          <div class="product">
            <img src="images/products/inbuilt_products/mouse.jpg" alt="">
            <hr style="margin:5px;height:2px;">
            <div class="action_btn">
            <span>Mouse</span>

                            <a href="feedback.php"><button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="1" class=" pro_modal btn btn-sm btn-outline-secondary">Contact</button></a>

              
            </div>
          </div>
          <div class="product">
            <img src="images/products/inbuilt_products/mouse_pad.jpg" alt="">
            <hr style="margin:5px;height:2px;">
            <div class="action_btn">
            <span>Mouse Pad</span>

                            <a href="feedback.php"><button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="1" class=" pro_modal btn btn-sm btn-outline-secondary">Contact</button></a>

              
            </div>
          </div>
          <div class="product">
            <img src="images/products/inbuilt_products/router.jpg" alt="">
            <hr style="margin:5px;height:2px;">
            <div class="action_btn">
            <span>Router</span>

                            <a href="feedback.php"><button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="1" class=" pro_modal btn btn-sm btn-outline-secondary">Contact</button></a>

              
            </div>
          </div>
          <div class="product">
            <img src="images/products/inbuilt_products/cable.jpg" alt="">
            <hr style="margin:5px;height:2px;">
            <div class="action_btn">
            <span>Cable</span>

                            <a href="feedback.php"><button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="1" class=" pro_modal btn btn-sm btn-outline-secondary">Contact</button></a>

              
            </div>
          </div>
          <div class="product">
            <img src="images/products/inbuilt_products/printer.jpg" alt="">
            <hr style="margin:5px;height:2px;">
            <div class="action_btn">
            <span>Printer</span>

                            <a href="feedback.php"><button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="1" class=" pro_modal btn btn-sm btn-outline-secondary">Contact</button></a>

              
            </div>
          </div>
          <div class="product">
            <img src="images/products/inbuilt_products/charger.jpg" alt="">
            <hr style="margin:5px;height:2px;">
            <div class="action_btn">
            <span>Charger</span>

                            <a href="feedback.php"><button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="1" class=" pro_modal btn btn-sm btn-outline-secondary">Contact</button></a>

              
            </div>
          </div>
          <div class="product">
            <img src="images/products/inbuilt_products/drive.jpg" alt="">
            <hr style="margin:5px;height:2px;">
            <div class="action_btn">
            <span>Drives</span>

                            <a href="feedback.php"><button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="1" class=" pro_modal btn btn-sm btn-outline-secondary">Contact</button></a>

              
            </div>
          </div>
          <div class="product">
            <img src="images/products/inbuilt_products/pc_component.jpg" alt="">
            <hr style="margin:5px;height:2px;">
            <div class="action_btn">
            <span>PC Components</span>

                            <a href="feedback.php"><button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="1" class=" pro_modal btn btn-sm btn-outline-secondary">Contact</button></a>

              
            </div>
          </div >
          <div style="display:flex;justify-content:center;width:100%;">
          <a href="feedback.php" class="navigation_btn" style="align-self:center;">Let's Get Started -></a>
        </div></div>
        <hr>

       <?php include 'includes/footer.php';?>
       </main> 
		<?php
		include 'scripts/scripts.php';
		include 'scripts/includes/navbar.php';
		include 'scripts/shop.php';
    include 'modals/view_product.php';
		?>


   </body>
</html>