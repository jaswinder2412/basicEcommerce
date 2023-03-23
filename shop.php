<?php include 'header.php';




require_once ("Product.php");
$cookie_name = "ProductName";
if(isset($_GET['pName'])){
    $cookie_value = $_GET['pName'];
    $pnames = $_GET['pName'];
} else {
    $cookie_value = "null";
     $pnames = "";
}
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

?>

<!-- Section-->
<section class="bg-dark custombanner py-5">
    <div class="blackopacity">

    </div>
    <div class="container relativepos px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Shop Page</h1>
            <p class="lead fw-normal text-white-50 mb-0">The ultimate clothing to see the world in.

                <br>Be exclusive, Be Devine, Be yourself.

            </p>
        </div>
    </div>
</section>
<!-- Section-->
<section class="py-5">
    <div style="margin : 0 !important" class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">
        <div class="col mb-3">
            <hr>
        </div>
        <div class="col mb-3 text-center text-dark">
            <h2>Products</h2>
        </div>
        <div class="col mb-3">
            <hr>
        </div>
    </div>
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
            </div>
            <div class="col mb-5">

                <form action="shop.php" method="get">
                    <div class="form-group">
                        <input type="text" class="form-control" id="pName" name="pName" value="<?php echo $pnames;  ?>" placeholder="Search Product">
                        <br>
                        <input type="submit" class="btn  form-control btn-dark"  name="submit" Value="Search">

                    </div>
                </form>
            </div>
            <div class="col mb-5">
                <a href="shop.php" class="btn btn-primary">Reset</a>
            </div>
            <div class="col mb-5">
            </div>
            <?php 
            
            $productNames = $_COOKIE['ProductName'];
            
            $productList = new Product();
            $products = $productList->getProduct($productNames);
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
                            <?php echo $val['price']; ?> $
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
