<?php
 

require_once ("DBController.php");

class Userinfo {
       
    public function __construct() {
    
        $this->db_handle = new DBController();
    }

function GetUser($uid) {
    
            $sql = "SELECT * FROM user Where uId ='". $uid."'";
       
            $result = $this->db_handle->runBaseQuery($sql);
            return $result;
    }


function Loginuser($email) {
    
            $sql = "SELECT * FROM user Where email ='". $email."'";
       
            $result = $this->db_handle->runBaseQuery($sql);
            return $result;
    }


}

?>