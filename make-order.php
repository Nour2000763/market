<?php
session_start();
include 'C:\xampp\htdocs\clothes\db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $data =array(
    ':name' => $_POST['name'],
    ':img' => $_POST['img'],
    ':salary' => $_POST['salary'],
    ':colors' => $_POST['color'],
    ':size' => $_POST['size'],
    ':phone' =>$_POST['phone'],
    ':adress'  =>$_POST['adress'],
    ':user_id' =>$_SESSION['id'],
    ':p_id' =>$_POST['p_id'],
    ':details' => $_POST['details'],
    ':city' => $_POST['city'],
    ':pieaces' => $_POST['pieaces']
    
      
);
$query ='insert into orders(name,img,salary,colors,size,phone,adress,user_id,p_id,details,city,pieaces) values(:name,:img,:salary,:colors,:size,:phone,:adress,:user_id,:p_id,:details,:city,:pieaces)';
$stat =$db ->prepare($query);

if($stat->execute($data)){
    echo 'ok';
}else{
    echo 'fail';
}
   
    
}else{
    echo 'You Can Not Enter This Page';
}

?>