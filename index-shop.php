<?php
session_start();
include 'C:\xampp\htdocs\clothes\db.php';
if(isset($_SESSION['id'])){
?>


<!DOCTYPE html>
<html lang="en">

<head>
<title>زمرده 
| الصفحه الرئيسيه</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
 
    
    
  </style>  
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-light shadow" style="background-color:white;">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                Zomoroda
            </a>
            <a class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-fw fa-stream text-success mr-1" style="font-size:25px;"></i>
            </a>
           
            
            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill text-center">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto" style="padding:0px;">
                        <li class="nav-item">
                            <a class="nav-link" href="index-shop.php" >الرئيسيه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">التعريف بنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">اتصل بنا</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex text-center">
                   <a class="nav-icon position-relative text-decoration-none " href="search.php">
                        <i class="fa fa-fw fa-search text-danger mr-1" style="font-size:25px;"></i>
                    </a>
                    
                   <?php
                    if(isset($_SESSION['id'])){
                       ?>
                     <a class="nav-icon position-relative text-decoration-none " href="cart.php">
                        <i class="fa fa-fw fa-cart-arrow-down text-danger mr-1" style="font-size:25px;"></i>
                         <div class="count-orders" style="position:absolute; left:30px; top:-20px; heigh:10px; width:10px;">
                           
                         </div>
                    </a>
                    
                 <a class="nav-icon position-relative text-decoration-none" href="logout.php">
                        <i class="fa fa-fw fa-door-open text-danger mr-1" style="font-size:25px;"></i>
                    </a>
                    
                    
                    
                    <?php 
                    }
                    
                    
                    ?>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
     <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <div>
                <center><h1 class="h2 p-2 bg-success mb-2" style="border-radius:20px; color:white; box-shadow:0px 4px 8px rgba(0,0,0,0.2)">الاقسام</h1></center>
                    
                    <ul class="list-unstyled templatemo-accordion   pt-2" style="padding:0px;">
                     <a class="collapsed d-flex justify-content-center h3 text-decoration-none p-2 mb-3" href="child-shop.php" style="border-radius:20px;  box-shadow:0px 4px 8px rgba(0,0,0,0.2); color:black">
                            القسم الاطفالي
                    </a>
                      <a class="collapsed d-flex justify-content-center h3 text-decoration-none p-2 mb-3" href="women-shop.php" style="border-radius:20px;  box-shadow:0px 4px 8px rgba(0,0,0,0.2); color:black">
                    القسم الحريمي
                    </a>
                     <a class="collapsed d-flex justify-content-center h3 text-decoration-none p-2 mb-3" href="offers-shop.php" style="border-radius:20px;  box-shadow:0px 4px 8px rgba(0,0,0,0.2); color:black">
                    احدث العروض
                    </a>         
                    
                </ul>
            </div>
            </div>

            <div class="col-lg-9">
                <h1 style="color:rgba(0,0,0,0.5)" class=" p-4">احدث المنتجات</h1>
                <div class="row">
                    
                 <?php echo get_latest_products($db);?>   
      
                </div>
        
            </div>

        </div>
    </div>
    <!-- End Content -->

    <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Our Brands</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example" data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Third slide-->

                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->

                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->



    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2021 Company Name 
                            | Designed by <a rel="sponsored" href="" target="_blank">Nour Ibrahim</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>
<?php
}else{
   header('location:index.php');
    
}
?>