<?php
 

require_once ("DBController.php");

class Product {
       
    public function __construct() {
    
        $this->db_handle = new DBController();
    }
 


function getProduct($product = "") {

    if($product != "null"){
         $sql = "SELECT * FROM product Where pName LIKE '".$product."%'";
    } else {
         $sql = "SELECT * FROM product";
    }
           
       
            $result = $this->db_handle->runBaseQuery($sql);
            return $result;
    }

function selectProduct($product = "") {

    if($product != ""){
         $sql = "SELECT * FROM product Where pId='".$product."'";
    } else {
         $sql = "SELECT * FROM product";
    }
           
       
            $result = $this->db_handle->runBaseQuery($sql);
            return $result;
    }

}

?>