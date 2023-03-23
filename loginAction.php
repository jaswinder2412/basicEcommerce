<?php


require_once ("DBController.php"); 
require_once ("Usermodel.php");
require_once ("Userinfo.php");

session_start();

if(isset($_POST['register'])){
    
extract($_POST);

$uType = 2;

 $Usermodel = new Usermodel($fName,$lName,$uType,$email,$password);
            $result = $Usermodel->addUser(); 
           
    $_SESSION["userId"] =  $result;
    
 header('Location: index.php');
    
    die;
}

if(isset($_POST['login'])){    
  
extract($_POST);

 $Usermodel = new Userinfo();
            $result = $Usermodel->Loginuser($email); 
           
    if(empty($result)){
         header('Location: signin.php?user=not');
        die;
    }
    
    
    $_SESSION["userId"] =  $result[0]['uId'];
  
 header('Location: index.php');
    
    die;
}


?>
