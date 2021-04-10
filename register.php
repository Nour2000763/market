<?php  
session_start();
include 'C:\xampp\htdocs\clothes\db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $stat =$db->prepare('select * from users where phone=? and pass=?');
    $stat->execute(array($_POST['phone'],$_POST['password']));
    $count = $stat->rowCount();
    $exist='';
    if($count == 1){
        
        $exist = '<div class="alert alert-success" role="alert">
         This is Account Already Exist
         </div>';
        
    }else{
  $stat=$db->prepare('insert into users(name,phone,pass) values(:name,:phone,:pass)');
          $done  = $stat->execute(array(
            'name'=>$_POST['name'],
            'phone'=>$_POST['phone'],
            'pass'=>$_POST['password']
            )); 
        if($done){
            $stat=$db->prepare('select id from users where phone='.$_POST['phone'].'');
            $stat->execute();
            $id = $stat->fetch();
            $_SESSION['id'] = $id['id'];
           $_SESSION['name']=$_POST['name'];
           $_SESSION['phone']=$_POST['phone'];
             header('location:index-shop.php');   
            
        }
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
  background-color: #4CAF50;
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
  <div class="container border">
      <?php
      if(isset($exist)){
         echo $exist; 
      }
      ?>
    <h1>تسجيل الدخول</h1>
    <p>اهلا بك في موقعنا زمرده اشترك الان وشاهد افضل العروض</p>
      <a href="index.php">الصفحه الرئيسيه</a>
    <hr>

    <label for="name"><b>الاسم</b></label>
    <input type="text" placeholder="كتابة الاسم" name="name" id="name" required autocomplete="off">

    <label for="phone"><b>رقم الهاتف</b></label>
    <input type="text" placeholder="كتابة رقم الهاتف" name="phone" id="phone" required autocomplete="off">

    <label for="psw"><b>كلمة المرور</b></label>
    <input type="password" placeholder="كتابة كلمة مرور لك" name="password" id="password" required autocomplete="off">
    <hr>
    <button type="submit" class="registerbtn">انشاء حساب</button>
  </div>

  <div class="container signin">
    <p> لدي حساب <a href="login.php">تسجيل الدخول</a>.</p>
  </div>
</form>
    
    
  </div>  
  <div class="col-md-3 col-xs-12"></div>  
</div>
</div>
</body>
</html>