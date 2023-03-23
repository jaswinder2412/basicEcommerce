<?php include 'header.php';




require_once ("Product.php");

?>
<header class="bg-dark imagebanner py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Trendy Fashion, Asthenic Collection, <br /> Winter Wear Buy Online</h1>
            <p class="lead fw-normal text-white-50 mb-0">The ultimate clothing to see the world in.

                <br>Be exclusive, Be Devine, Be yourself.

            </p>
            <br>
            <button class="btn btn-primary customlight btn-lg">Shop Collection</button>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
       
      
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="http://localhost/gurifinal/assets/images/image22.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-1">
                        <div class="text-start">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Asthentic Wear</h5>
                           
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="http://localhost/gurifinal/assets/images/image21.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-1">
                        <div class="text-start"> 
                            <h5 class="fw-bolder">Fancy Product</h5>
                           
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="http://localhost/gurifinal/assets/images/image23.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-1">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Winter Collection</h5> 
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Section-->
<section class="bg-dark custombanner py-5">
   <div class="blackopacity">
         
   </div>
    <div class="container relativepos px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Trendy Fashion, Asthenic Collection, <br /> Winter Wear Buy Online</h1>
            <p class="lead fw-normal text-white-50 mb-0">The ultimate clothing to see the world in.

                <br>Be exclusive, Be Devine, Be yourself.

            </p>
            <br>
            <button class="btn btn-primary customlight btn-lg">Shop Collection</button>
        </div>
    </div>
</section>
<!-- Section-->
<section class="py-5">
   <div style="margin : 0 !important" class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">
            <div class="col mb-3"><hr></div>
            <div class="col mb-3 text-center text-dark"><h2>Products</h2></div>
            <div class="col mb-3"><hr></div>
        </div>
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
         <?php 
            
            $productList = new Product();
            $products = $productList->getProduct();
            foreach($products as $key=> $val){
            ?>  
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="<?php echo trim($val['pImage']); ?>" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder"><?php echo $val['pName']; ?> </h5>
                            <!-- Product price-->
                           <?php echo $val['price']; ?>$
                        </div> 
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="addcart.php?id=<?php echo $val['pId'];?>">Add to Cart</a></div>
                    </div>
                </div>
            </div> 
 <?php } ?>
        </div>
    </div>
</section>
<?php include 'footer.php';?>