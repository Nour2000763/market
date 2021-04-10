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

.tab-item{
   width:100%;
  overflow:auto;
    height:auto;
    word-break: break-word;
    }
.tab-item img{
    float:right;
    
    }
.tab-item .about-item{
    height:auto;
    }
td button{
    display:inline;
    margin-bottom:5px;
    text-align: center;
    box-sizing: border-box;
    }
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
                    

                     <a class="nav-icon position-relative text-decoration-none " href="cart.php">
                        <i class="fa fa-fw fa-cart-arrow-down text-danger mr-1" style="font-size:25px;"></i>
                         <div class="count-orders" style="position:absolute; left:30px; top:-20px; heigh:10px; width:10px;">
                           
                         </div>
                    </a>
                    
                 <a class="nav-icon position-relative text-decoration-none" href="logout.php">
                        <i class="fa fa-fw fa-door-open text-danger mr-1" style="font-size:25px;"></i>
                    </a>
                    
                    
               
                </div>
            </div>

        </div>
    </nav>
    <div class="mt-1">
    <table class="table">
        <thead class="bg-dark text-light ">
       <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">عدد القطع</th>
      <th scope="col">اجمالي السعر</th>
      <th scope="col">الحاله</th>
      <th scope="col"></th>
    </tr>
        </thead>
  <tbody class="cart-table">

  </tbody>
</table>
    </div>
     <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
    <script>
    get_orders();  
    function get_orders(){
    $.ajax({
    url:'get_orders.php',
    method:'post',
    success:function(data){
    $('.cart-table').html(data);
    }
    });
    };
    $(document).on('click','.delete-order',function(){
    var order_id = $(this).data('id');
    $.ajax({
    url:'delete_order.php',
    method:'post',
    data:{order_id:order_id},
    success:function(){
    get_orders();
    }
        
    
    });
    
    });
        $(document).on('click','.con-order',function(){
    var order_id = $(this).data('id');
    $.ajax({
    url:'con-order.php',
    method:'post',
    data:{order_id:order_id},
    success:function(){
    get_orders();
    }
        
    
    });
    
    });
    </script>
</body>

</html>
<?php
}else{
  header('location:index-shop.php');  
}

?>