<?php
session_start();
include 'C:\xampp\htdocs\clothes\db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$stat = $db->prepare('select * from orders where user_id ='.$_SESSION['id'].'');
$stat->execute();
$rows = $stat->fetchAll();
$output='';
$eye = '';
$con='';    
foreach($rows as $row){
if ($row['status'] == 1){
   $eye ='<i class="fa fa-eye"></i>'; 
}else{
$eye ='<i class="fa fa-eye-slash"></i>';
}
if ($row['con'] == 1){
    $con = '<span class="text-dark m-2 bg-warning p-1" style="border-radius:5px;">تم الارسال</span>';
    
}else{
   $con ='<button class="btn btn-warning con-order" data-id='.$row['id'].'>اكمال الطلب</button>'; 
}
$output .='
     <tr>
      <th scope="row" style="width:60px;">
      <img src="./assets/img/'.$row['img'].'" class="card-img-top" alt="..."   height="60px;" width="100%;">
      </th>
      <td>'.$row['name'].'</td>
      <td>'.$row['pieaces'].'</td>
        <td>'.$row['pieaces'] * $row['salary'].'</td>
        <td>'.$eye.'</td>
      <td>
      
     '.$con.'
     <button class="btn btn-danger delete-order" data-id='.$row['id'].'>&times;</button>     
     </td>
    </tr>

';

}
    echo $output;
}else{
    header('locarion:index.php');
}
?>