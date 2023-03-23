<?php
 
require_once ("DBController.php");

class Search  {
    protected $title;
    protected $author;

    
    public function __construct($title, $author) { 
        $this->title = $title;
        $this->author = $author;
        $this->db_handle = new DBController();
    }
 
    

    function SearchEBooks($editor="", $format="") {

        if(!empty($format)){
            $sql = "SELECT * FROM books Where format='".$format."' AND title='".$this->title."' AND author='".$this->author."'";
        } else  if(!empty($editor)){
            $sql = "SELECT * FROM books Where editor='".$editor."' AND title='".$this->title."' AND author='".$this->author."'";
        } else {
            $sql = "SELECT * FROM books WHERE title='".$this->title."' AND author='".$this->author."'";
        }

       
       
        $result = $this->db_handle->runBaseQuery($sql);
        return $result;
    }
 


    
  

}

?>