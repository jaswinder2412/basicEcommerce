<?php include 'header.php';




require_once ("Product.php");
require_once ("Cart.php");
 

?>

<!-- Section-->
<section class="bg-dark custombanner py-5">
    <div class="blackopacity">

    </div>
    <div class="container relativepos px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Cart</h1>
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
                            <th scope="col">Price</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
            
            $mycart = new Cart();
                        $cartList = $mycart->getCart();
            
          $ary = [];
            foreach($cartList as $key=> $val){
                  $productList = new Product();
            $products = $productList->selectProduct($val['pId']);
                array_push($ary,$products[0]['price']);
            ?>

                        <tr>
                            <th scope="row"> <img width="150" class="" src="<?php echo trim($products[0]['pImage']); ?>" alt="..." /></th>
                            <td><?php echo $products[0]['pName']; ?></td>
                           
                            <td> <?php echo $products[0]['price']; ?> $</td>
                             

 
                        </tr>


                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>
                                
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                Total = <?php  echo array_sum($ary); ?>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php';?>
