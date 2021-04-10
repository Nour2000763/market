<?php  include 'C:\xampp\htdocs\clothes\db.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>زمرده</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
    <style>
.navbar-toggler:focus{
    outline:inherit;
    
        }
.navbar-toggler-icon{
    color:forestgreen;
    margin-top:6px;
    margin-bottom: 6px;
    font-size:25px;
        }
 .main-nav{
     display: flex;
     justify-content: center;
     align-items: center;
        }
.main-nav ul{
     display: flex;
     justify-content: center;
     align-items: center;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    border-radius:40px;
        }
 .main-nav ul li{
   margin:50px;
     display:inline;
     padding: 0px;
        }
.features-small-item {
  cursor: pointer;
  display: block;
  background: #FFFFFF;
  box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.10);
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
  padding: 30px;
  text-align: center;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  position: relative;
  margin-bottom: 30px;
    height:250px;
}


.features-small-item .icon {
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  width: 90px;
  height: 90px;
  line-height: 90px;
  margin: auto;
  position: relative;
  margin-bottom: 30px;
  background: #8261ee;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
    background-color:#59ab6b;

}

.features-small-item .icon i {
  font-size: 25px;
  color:white;  
}

.features-small-item .features-title {
  font-weight: 500;
  font-size: 18px;
  color: #1e1e1e;
  letter-spacing: 0.7px;
  margin-bottom: 15px;
  position: relative;
  z-index: 2;
}

.features-small-item p {
  font-weight: 400;
  font-size: 13px;
  color: #777;
  letter-spacing: 0.5px;
  line-height: 25px;
  position: relative;
  z-index: 2;
}

.features-small-item a {
  float: right;
  position: relative;
  z-index: 2;
}

.home-feature {
  padding-bottom: 0px;
  padding-top: 30px;
  margin-top: 0px;
  z-index: 9;
}

@media (max-width: 991px) {
  .home-feature {
    padding-bottom: 0px;
    padding-top: 0px;
    margin-top: 0px;
  }
}        
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg mb-1 shadow" style="backround-color:white;  padding:0px;">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center mt-2" href="index.html">
                Zomoroda
            </a>

            <a class="navbar-toggler nav-toggle border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-stream text-success" style="font-size:25px;"></i>
            </a>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill text-center">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto text-center" style="padding:0px;">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">الرئيسيه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">التعريف بنا</a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link" href="contact.html">اتصل بنا</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
              
                    <a class="nav-icon position-relative text-decoration-none text-danger" href="search.php" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-danger mr-2 " style="font-size:25px;"></i>
                    </a>
                   
                    <a class="nav-icon position-relative text-decoration-none text-danger" href="register.php">
                    <i class="fa fa-user-plus" style="font-size:25px;"></i>
                    </a>
                </div>
            </div>

        </div>
    </nav>

<section style="margin-top:20px;">
     <center><h1 style="color:rgba(0,0,0,0.5)" class=" p-4">قسم الاطفال | child products</h1></center>

    </section>
                 
      </div>

            <div class="col-lg-12 col-md-12 col-xs-12">
               
                <div class="row">
                    
                 <?php echo get_child_products($db);?>   
      
                </div>
        
            </div>

        </div>
    </div>
    </section>

    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>