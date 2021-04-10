<?php
session_start();
include 'C:\xampp\htdocs\clothes\db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
echo count_orders($_SESSION['id'],$db);



}else{
   header('location:index-shop.php'); 
}