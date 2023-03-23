<?php
require_once ("Cart.php");

 session_start();

if(isset($_GET['id'])){
   if(isset($_SESSION["userId"])){  
  $uid = $_SESSION["userId"];
   } else {
       $uid = 0;
   }
    $totalCount = 1;
    $pid = $_GET['id'];
 $Usermodel = new Cart();
$result = $Usermodel->addcart($uid,$pid,$totalCount); 
           

    
 header('Location: index.php');
    
    die;
}



?>