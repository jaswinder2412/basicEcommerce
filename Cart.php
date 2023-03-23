<?php
 

require_once ("DBController.php");



class Cart {
       
    public function __construct() {    
        $this->db_handle = new DBController();
    }
 
 

function getCart() {
            $sql = "SELECT * FROM cart";       
            $result = $this->db_handle->runBaseQuery($sql);
            return $result;
    }
    
    
    
    function addcart($uid,$pid,$totalCount) {
        
        $query = "INSERT INTO cart (uId, pId, totalCount) VALUES (?, ?, ?)";
        $paramType = "sis";
        $paramValue = array($uid, $pid, $totalCount);
        
        $insertId = $this->db_handle->insert($query, $paramType, $paramValue);
        return $insertId;
    }



}

?>