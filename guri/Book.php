<?php
abstract class Book {
    protected $title;
    protected $author;
    protected $pages;
    protected $price;
    protected $category;

    public function __construct($title, $author, $pages, $price, $category) {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
        $this->price = $price;
        $this->category = $category;
    }

    // Getter and setter methods for properties

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getPages() {
        return $this->pages;
    }

    public function setPages($pages) {
        $this->pages = $pages;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
    }
    
}


?>