<?php

require_once ("Book.php");
require_once ("DBController.php");

class Ebook extends Book {
    protected $format;
    protected $url;

    
    public function __construct($title, $author, $pages, $price, $category, $format, $url) {
        parent::__construct($title, $author, $pages, $price, $category);
        $this->format = $format;
        $this->url = $url;
        $this->db_handle = new DBController();
    }

    public function getFormat() {
        return $this->format;
    }

    public function setFormat($format) {
        $this->format = $format;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    function addEBooks() {
        $query = "INSERT INTO books (title, author, pages, price, category, format, url) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $paramType = "sisssss";
        $paramValue = array(
            $this->title, $this->author, $this->pages, $this->price, $this->category, $this->format, $this->url
        );
        
        $insertId = $this->db_handle->insert($query, $paramType, $paramValue);
        return $insertId;
    }


    
  

}

?>