<?php
   ob_start();
   session_start();

require_once ("DBController.php"); 
require_once ("Userinfo.php");
require_once ("Cart.php");

$cartchec = new Cart();
$checkcount = $cartchec->getCart();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Infinity Clothing</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">
                <img src="assets/images/Logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="shop.php">All Products</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="shop.php">Popular Items</a></li>
                            <li><a class="dropdown-item" href="shop.php">New Arrivals</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                </ul>
                <form class="d-flex">
                    <?php if(isset($_SESSION["userId"])){ $userinfo = new Userinfo();
                                                        $userinformation = $userinfo->GetUser($_SESSION["userId"]);
                                                     ?>
                    <a class="btn btn-outline-dark" href="signin.php">
                        <i class="bi-person-square me-1"></i>
                        <?php
                                                         if(isset($userinformation[0]) && !empty($userinformation[0])){
                                                             echo "Welcome " . $userinformation[0]['fName'];
                                                         }
                                                      
                                                       
                                                 ?>
                    </a> &nbsp;  
                       
                       <?php
                                                         if(isset($userinformation[0]) && !empty($userinformation[0])){ 
                    
                                                             if($userinformation[0]['uType'] == 1){
                    ?>
                       <a class="btn btn-outline-dark" href="dashbord.php">
                        <i class="bi-person-square me-1"></i>
                        Dashbord
                    </a> <?php } } ?>&nbsp; 
                       <a class="btn btn-outline-dark" href="logout.php">
                        <i class="bi-person-square me-1"></i>
                        Logout
                    </a>  &nbsp; 
                    <?php       } else {
    
    ?>
                    <a class="btn btn-outline-dark" href="signin.php">
                        <i class="bi-person-square me-1"></i>

                    
                        <?php
                        echo " SignIn";
                        }?>
  </a> &nbsp;
                        <a class="btn btn-outline-dark" href="mycart.php">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill"><?php echo count($checkcount); ?></span>
                        </a>
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->
