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
            <h1 class="display-4 fw-bolder">Dashboard</h1>
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
        <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-1 row-cols-xl-1 justify-content-center">
            <div class="col mb-5">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
            
            $productNames = $_COOKIE['ProductName'];
            
            $productList = new Product();
            $products = $productList->getProduct($productNames);
            foreach($products as $key=> $val){
            ?>

                        <tr>
                            <th scope="row"> <img class="card-img-top" src="<?php echo trim($val['pImage']); ?>" alt="..." /></th>
                            <td><?php echo $val['pName']; ?></td>
                            <td>
                                <p><?php echo $val['pDescription']; ?></p>
                            </td>
                            <td> <?php echo $val['price']; ?> $</td>
                            <td><button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#myModal<?php echo $val['pId']; ?>">Edit Product</button>


                                <div class="modal" id="myModal<?php echo $val['pId']; ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Modal Heading</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form class="form-inline" method="post" action="/action_page.php">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="email">Product Name:</label>
                                                        <input type="text" value="<?php echo $val['pName']; ?>" class="form-control" id="pName" name="pName">
                                                    </div>    <div class="form-group">
                                                        <label class="sr-only" for="email">Product Description:</label>
                                                    <textarea   class="form-control" id="pDescription" name="pDescription"><?php echo $val['pDescription']; ?></textarea>
                                                    </div>    <div class="form-group">
                                                        <label class="sr-only" for="email">Product price:</label>
                                                        <input type="text" class="form-control" value="<?php echo $val['price']; ?>" id="price" name="price">
                                                    </div>  
                                                    <br>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </td>
                        </tr>


                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php';?>
