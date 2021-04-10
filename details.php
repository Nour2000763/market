<?php
session_start();
include 'C:\xampp\htdocs\clothes\db.php';

if(isset($_GET['id'])){
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>تفاصيل المنتج</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
            <script src="assets/js/jquery-1.11.0.min.js"></script>
    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
     <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
<style>
body{
   overflow-x:hidden;
    
    }
 .contact-form input,
.contact-form textarea {
  color: #777;
  font-size: 14px;
  border: 1px solid #eee;
  width: 100%;
  height: 50px;
  outline: none;
  padding-left: 20px;
  padding-right: 20px;
  border-radius: 25px;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  margin-bottom: 30px;
    background-color:whitesmoke;
}

.contact-form textarea {
  height: 150px;
  resize: none;
  padding: 20px;
}
.navbar-nav .nav-item .nav-link{
    color:white;
    }
</style>
</head>

<body class="bg-light">



    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow" style="background-color:white;">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                Zomoroda
            </a>
            <a class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-fw fa-stream text-success mr-1" style="font-size:25px;"></i>
            </a>
           
            
            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
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
                   <a class="nav-icon position-relative text-decoration-none " href="#">
                        <i class="fa fa-fw fa-search text-danger mr-1" style="font-size:25px;"></i>
                    </a>
                    
                   <?php
                    if(isset($_SESSION['id'])){
                       ?>
                     <a class="nav-icon position-relative text-decoration-none " href="cart.php">
                        <i class="fa fa-fw fa-cart-arrow-down text-danger mr-1" style="font-size:25px;"></i>
                         <div class="count-orders" style="position:absolute; left:30px; top:-20px;"></div>
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
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Open Content -->
    <section>
        <?php
        $stat = $db->prepare('select * from products where id ='.$_GET['id'].'');
        $stat->execute();
         $rows = $stat->fetchAll();
        $output ='';
        foreach($rows as $row){
            ?>
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="row">
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-dark fas fa-chevron-right"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/<?php echo $row['img']?>" alt="Product Image 1" style="height:400px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php echo product_imgs($row['id'],$db);
                                ?>
                         
                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                    </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2"><?php echo $row['name']?></h1>
                            <p class="h3 py-2"><?php echo $row['salary']?></p>
                            <p class=""><?php echo $row['brand']?></p>
                           

                            <h6>الوصف</h6>
                            <p class="text-muted"><?php echo $row['des']?></p>
                            <ul class="list-inline" style="padding:0px;">
                                <li class="list-inline-item">
                                    <h6>الالوان المتاحه : </h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong><?php echo $row['colors']?></strong></p>
                                </li>
                            </ul>
                              <ul class="list-inline" style="padding:0px;">
                                <li class="list-inline-item">
                                    <h6>المقاسات المتاحه : </h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong><?php echo $row['sizes']?></strong></p>
                                </li>
                            </ul>

                        </div>
                    </div>
                    
                    <?php
                if (isset($_SESSION['id'])){
                    ?>
                    <div class="card mt-4 p-4">
                        <h2>طلب المنتج</h2>
                              <div class="contact-form">
                          <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                <input name="phone" type="hidden" class="form-control" id="phone" placeholder="" required autocomplete="off" value="<?php echo $_SESSION['phone']?>">
                              </fieldset>
                                <fieldset>
                                <input name="user_id" type="hidden" class="form-control" id="user_id" placeholder="" required autocomplete="off" value="<?php echo $_SESSION['id']?>">
                              </fieldset>
                                <fieldset>
                                <input name="p_id" type="hidden" class="form-control" id="p_id" placeholder="" required autocomplete="off" value="<?php echo $row['id']?>">
                              </fieldset>
                                <fieldset>
                                <input name="img" type="hidden" class="form-control" id="img" placeholder="" required autocomplete="off" value="<?php echo $row['img']?>">
                              </fieldset>
                                <fieldset>
                                <input name="name" type="hidden" class="form-control" id="name" placeholder="" required autocomplete="off" value="<?php echo $row['name']?>">
                              </fieldset>
                                <fieldset>
                                <input name="salary" type="hidden" class="form-control" id="salary" placeholder="" required autocomplete="off"  value="<?php echo $row['salary']?>">
                              </fieldset>
                              <fieldset>
                                <input name="size" type="text" class="form-control" id="size" placeholder="اكتب المقاس الذي تريده" required autocomplete="off">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="color" type="text" class="form-control" id="color" placeholder="اكتب اللون الذي تريده" required autocomplete="off">
                              </fieldset>
                            </div>
							<div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="pieaces" type="number" class="form-control" id="pieaces" placeholder="حدد عدد القطع الذي تريدها" required autocomplete="off">
                              </fieldset>
                            </div>
							<div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="city" type="text" class="form-control" id="city" placeholder="اكتب اسم مدينتك" required autocomplete="off">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="adress" rows="6" class="form-control" id="adress" placeholder="اكتب عنوانك بالتفصيل" required autocomplete="off"></textarea>
                              </fieldset>
                            </div>
                             <div class="col-lg-12">
                              <fieldset>
                                <textarea name="details" rows="6" class="form-control" id="details" placeholder="اكتب اي تفاصيل او اي ملاحظات تود كتابتها" required autocomplete="off"></textarea>
                              </fieldset>
                            </div> 
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit"  class="btn btn-success send-order">اضف الي سلة المشتريات</button>
                              </fieldset>
                            </div>
                          </div>
                       
                    </div>
                    
                    
                    </div>
                    <?php
                    
                                   }
                    ?>
                </div>
            </div>
        </div>
        <?php
        }
            ?>
        
        
        
        
        
    </section>


  
   
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="assets/js/slick.min.js"></script>
    <script>
        
 
        
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->

</body>

</html>
<?php
}else{
   header('location:index-shop.php'); 
}