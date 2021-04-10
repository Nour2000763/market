<?php
session_start();
include 'C:\xampp\htdocs\clothes\db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$stat = $db->prepare('update orders set con = 1 where id ='.$_POST['order_id'].'');
$stat->execute();



}else{
   header('location:index-shop.php'); 
}