<?php
session_start();
include 'C:\xampp\htdocs\clothes\db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>اتصل بنا</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<style>
  * {
  box-sizing: border-box;
}

/* Style the search field */
form{
    width:700px;
    margin-top:50px;
    padding:10px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    background: white;
    }
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
    border:1px solid white;
  float: left;
  width: 80%;
  background: #f1f1f1;
    border-radius:5px;
}
form.example input[type=text]:focus{
    outline:none;
    
    }
/* Style the submit button */
form.example button {
  float: left;
  width: 18%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  margin-left:5px;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  opacity:0.8;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}  
.search-zoon{
    display: flex;
    justify-content: center;
    align-items: center;
    }

    </style>
</head>

<body class="bg-light">
 
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
               
            </div>

        </div>
    </nav>
    <section class="search-zoon container">
    <form class="example" action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
  <input type="text" placeholder="ابحث عن المنتجات..." name="s" autocomplete="off">
  <button type="submit" class="btn btn-success ml-2"><i class="fa fa-search"></i></button>
   </form>
    </section>
    <section class="resultes mt-4">
        <div class="container">
    <div class="row">
        
        <?php 
        $s='';
        if(isset($_GET['s'])){
           $s = $_GET['s'];
        }
        echo get_search_products($s,$db)
        
        ?>
        </div>
        </div>
    </section>
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    </body>
</html>