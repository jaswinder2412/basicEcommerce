<?php

require_once ("Book.php");
require_once ("DBController.php");

class PrintedBook extends Book {
    protected $quantity;
    protected $editor;

    public function __construct($title, $author, $pages, $price, $category, $quantity, $editor) {
        parent::__construct($title, $author, $pages, $price, $category);
        $this->quantity = $quantity;
        $this->editor = $editor;
        $this->db_handle = new DBController();
    }

    // Getter and setter methods for properties

    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public function getEditor() {
        return $this->editor; 
    }

    public function setEditor($editor) {
        $this->editor = $editor;
    }


    
    function addPBooks() {
        $query = "INSERT INTO books (title, author, pages, price, category, quantity, editor) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $paramType = "sisssss";
        $paramValue = array(
            $this->title, $this->author, $this->pages, $this->price, $this->category, $this->quantity, $this->editor
        );
        
        $insertId = $this->db_handle->insert($query, $paramType, $paramValue);
        return $insertId;
    }

}
?>