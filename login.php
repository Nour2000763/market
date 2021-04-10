<?php
session_start();

include 'C:\xampp\htdocs\clothes\db.php';?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $phone = $_POST['phone'];
    $pass = $_POST['password'];
    $stat=$db->prepare('select * from users where phone=? and pass=?');
    $stat->execute(array($phone,$pass));
    $rows = $stat->fetch();
    $count= $stat->rowCount();
    if ($count > 0){
        $_SESSION['id'] = $rows['id'];
        $_SESSION['name'] = $rows['name'];
        $_SESSION['phone'] = $rows['phone'];
        header('location:index-shop.php');
    }else{
         $error_login = '<div class="alert alert-danger">Please Check <b>Phone Number Or Password</b></div>';
        
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>زمرده | الصفحه الرئيسيه</title>
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
form {
    
    box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);
    background: white;
        }
.container {
  padding: 16px;

}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #007bff;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
    </style>
</head>
<body class="bg-light">
<div class="container">
<div class="row">
  <div class="col-md-3 col-xs-12">
    </div>  
  <div class="col-md-6 col-xs-12">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <?php
        if (isset($error_login)){
            echo $error_login;
            
        }
        ?>
  <div class="container border">
    <h1>تسجيل الدخول</h1>
    <hr>
    <label for="phone"><b>رقم الهاتف</b></label>
    <input type="text" placeholder=" رقم الهاتف" name="phone" id="phone" required autocomplete="off">

    <label for="psw"><b>كلمة المرور</b></label>
    <input type="password" placeholder=" كلمة مرور " name="password" id="password" required>
    <hr>
    <button type="submit" class="registerbtn">تسجيل الدخول</button>
  </div>

  <div class="container signin">
    <p><a href="register.php">انشاء حساب</a>.</p>
  </div>
</form>
    
    
  </div>  
  <div class="col-md-3 col-xs-12"></div>  
</div>
</div>
</body>
</html>