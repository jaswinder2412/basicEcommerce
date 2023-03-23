<?php
 

require_once ("DBController.php");

class Usermodel {
    protected $fName;
    protected $lName;
    protected $uType;
    protected $email;
    protected $password; 

    
    public function __construct($fName, $lName, $uType, $email, $password) {
        $this->fName = $fName;
        $this->lName = $lName;
        $this->uType = $uType;
        $this->email = $email;
        $this->password = $password;
        $this->db_handle = new DBController();
    }


    function addUser() {
        $query = "INSERT INTO user (fName, lName, uType, email, password) VALUES (?, ?, ?, ?, ?)";
        $paramType = "sisss";
        $paramValue = array(
            $this->fName, $this->lName, $this->uType, $this->email, $this->password);
        
        $insertId = $this->db_handle->insert($query, $paramType, $paramValue);
        return $insertId;
    }


    
  

}

?>