<?php
$source = 'mysql:host=localhost;dbname=zomoroda;charset=utf8mb4;';
$user = 'root';
$pass = '';
$options=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',);
    
try{       
$db = new PDO($source,$user,$pass,$options);
$db->query('SET NAMES utf8');
$db->query('SET CHARACTERS SET utf8');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  function get_latest_products($db){
     $stat = $db->prepare('select * from products');
      $stat->execute();
      $rows = $stat->fetchAll();
      $output = '';
      foreach ($rows as $row){
      $output .='
               <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="">
                           <img src="./assets/img/'.$row['img'].'" class="card-img-top" alt="..."   height="300px;" width:100%;>
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="bg-danger p-1 text-right" style="color:white; border-radius:10px;">'.$row['salary'].' جنيه</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">'.$row['name'].'</a>
                            <p class="text-muted">'.$row['des'].'</p>
                            <center>
              <a href="details.php?id='.$row['id'].'" class="btn btn-success">المزيد من التفاصيل</a>
              </center>
                        </div>
                    </div>
                </div>';
      }
      return $output;
      
  }
     function get_women_products($db){
     $stat = $db->prepare('select * from products where status = 2');
      $stat->execute();
      $rows = $stat->fetchAll();
      $output = '';
      foreach ($rows as $row){
      $output .='
               <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="">
                            <img src="./assets/img/'.$row['img'].'" class="card-img-top" alt="..."   height="300px;">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="bg-danger p-1 text-right" style="color:white; border-radius:10px;">'.$row['salary'].' جنيه</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">'.$row['name'].'</a>
                         
                            <p class="text-muted"> '.$row['des'].'</p>
                             <center>
              <a href="details.php?id='.$row['id'].'" class="btn btn-success">المزيد من التفاصيل</a>
              </center>
                        </div>
                    </div>
                </div>';
      }
      return $output;
       
     }
function get_child_products($db){
     $stat = $db->prepare('select * from products where status = 1');
      $stat->execute();
      $rows = $stat->fetchAll();
      $output = '';
      foreach ($rows as $row){
      $output .='
               <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="">
                             <img src="./assets/img/'.$row['img'].'" class="card-img-top" alt="..."   height="300px;">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="bg-danger p-1 text-right" style="color:white; border-radius:10px;">'.$row['salary'].' جنيه</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">'.$row['name'].'</a>
                         
                            <p class="text-muted"> '.$row['des'].'</p>
                             <center>
              <a href="details.php?id='.$row['id'].'" class="btn btn-success">المزيد من التفاصيل</a>
              </center>
                        </div>
                    </div>
                </div>';
      }
      return $output;
      
}
    function get_offer_products($db){
     $stat = $db->prepare('select * from products where status = 3');
      $stat->execute();
      $rows = $stat->fetchAll();
      $output = '';
      foreach ($rows as $row){
      $output .='
               <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                           <img src="./assets/img/'.$row['img'].'" class="card-img-top" alt="..."   height="300px;">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="bg-danger p-1 text-right" style="color:white; border-radius:10px;">'.$row['salary'].' جنيه</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">'.$row['name'].'</a>
                            <p class="text-muted"> '.$row['des'].'</p>
                 <center>
              <a href="details.php?id='.$row['id'].'" class="btn btn-success">المزيد من التفاصيل</a>
              </center>
                        </div>
                    </div>
                </div>';
      
      } 
        return $output;
     }
function product_imgs($p_id,$db){
    $stat = $db->prepare('select * from imgs where p_id ='.$p_id.'');
      $stat->execute();
      $rows = $stat->fetchAll();
      $output = '';
      foreach ($rows as $row){
      $output .='<div class="carousel-item ">
                <div class="row">
                <div class="col-12">
                <a href="#">
                <img class="card-img img-fluid" src="assets/img/'.$row['img'].'" alt="Product Image 4" style="height:400px;">
                </a>
                </div>           
                 </div>
                </div>';
}
    return $output;
}
    function count_orders($u_id,$db){
         $stat = $db->prepare('select * from orders where user_id ='.$u_id.'');
      $stat->execute();
      $count = $stat->rowCount();
      $output='';
      if ($count > 0){
         $output .='<span class=" text-success" style="font-size:15px; border-radius:50%; height:100%; width:100%; font-weight:700;"><b>'.$count.'</b></span>'; 
      }else{
          $output .= '<span class=" text-success" style="font-size:15px; border-radius:50%; height:100%; width:100%;  font-weight:700;"><b>'.$count.'</b></span>'; 
      }
 return $output;
        
    }
    
 function get_search_products($s,$db){
     $stat = $db->prepare('select * from products where name like  "%'.$s.'%" or des like  "%'.$s.'%"');
      $stat->execute();
      $rows = $stat->fetchAll();
     $count = $stat->rowCount();
      $output = '';
     if ($count > 0){
      foreach ($rows as $row){
      $output .='
               <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="">
                           <img src="./assets/img/'.$row['img'].'" class="card-img-top" alt="..."   height="300px;" width:100%;>
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="bg-danger p-1 text-right" style="color:white; border-radius:10px;">'.$row['salary'].' جنيه</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">'.$row['name'].'</a>
                            <p class="text-muted">'.$row['des'].'</p>
                            <center>
              <a href="details.php?id='.$row['id'].'" class="btn btn-success">المزيد من التفاصيل</a>
              </center>
                        </div>
                    </div>
                </div>';
      }
     }else{
     $output .='<div class="alert alert-success" role="alert">
  لا توجد نتائج من فضلك اكتب طلبك بشكل اوضح
</div>';
     
     }
      return $output;
      
  }   
}catch(PDOException $e){
    echo $e->getMessage();
    
    
}