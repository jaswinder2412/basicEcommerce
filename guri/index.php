<?php
require_once ("DBController.php");
require_once ("Ebook.php");
require_once ("PrintedBook.php");
require_once ("Search.php");

$db_handle = new DBController();

 
// $action = "";
if (! empty($_GET["action"])) {
    $action = $_GET["action"];
}else { 
    echo " Action Required";
}

if(empty($_GET["title"])){
    echo "Title can not be empty";
    die;
}
else {
    $title = $_GET["title"];
}
if(empty($_GET["author"])){
    echo "Author can not be empty";
    die;
}
else {
    $author = $_GET["author"];
}

switch ($action) {
    case "Ebook-Add":
        if (isset($_GET['url'])) {

            
if(empty($_GET["pages"])){
    echo "pages can not be empty";
    die;
}
else {
    $pages = $_GET["pages"];
}
if(empty($_GET["price"])){
    echo "price can not be empty";
    die;
}
else {
    $price = $_GET["price"];
}
if(empty($_GET["category"])){
    echo "category can not be empty";
    die;
}
else {
    $category = $_GET["category"];
}

            if(empty($_GET["format"])){
                echo "format can not be empty";
                die;
            }
            else {
                $format = $_GET["format"];
            }if(empty($_GET["url"])){
                echo "url can not be empty";
                die;
            }
            else {
                $url = $_GET["url"];
            }

            $Books = new Ebook($title,$author,$pages,$price,$category,$format,$url);
            $result = $Books->addEBooks(); 
           
            $returnarray = array("message"=>"bookadded", "lastInsertedId"=>$result);
 
  
            // json_encode function 
            $json_pretty = json_encode($returnarray, JSON_PRETTY_PRINT);
            echo "<pre>" . $json_pretty . "<pre/>";
           
        }
       
        break;
    case "Printed-Add":
        if (isset($_GET['editor'])) {

            
if(empty($_GET["pages"])){
    echo "pages can not be empty";
    die;
}
else {
    $pages = $_GET["pages"];
}
if(empty($_GET["price"])){
    echo "price can not be empty";
    die;
}
else {
    $price = $_GET["price"];
}
if(empty($_GET["category"])){
    echo "category can not be empty";
    die;
}
else {
    $category = $_GET["category"];
}

            if(empty($_GET["quantity"])){
                echo "quantity can not be empty";
                die;
            }
            else {
                $quantity = $_GET["quantity"];
            }if(empty($_GET["editor"])){
                echo "editor can not be empty";
                die;
            }
            else {
                $editor = $_GET["editor"];
            } 

            $Books = new PrintedBook($title,$author,$pages,$price,$category,$quantity,$editor);
            $result = $Books->addPBooks(); 
           
            $returnarray = array("message"=>"bookadded", "lastInsertedId"=>$result);
 
  
            // json_encode function 
            $json_pretty = json_encode($returnarray, JSON_PRETTY_PRINT);
            echo "<pre>" . $json_pretty . "<pre/>";
           
        }
       
        break;

        case "SearchBook":
            if (isset($_GET['editor'])) {
    
                if(empty($_GET["editor"])){
                    echo "editor can not be empty";
                    die;
                }
                else {
                    $editor = $_GET["editor"];
                } 
    
                $Books = new Search($title,$author);
                $result = $Books->SearchEBooks($editor,null); 
               
                $returnarray = array("message"=>"Success", "Result"=>$result);
     
      
                // json_encode function 
                $json_pretty = json_encode($returnarray, JSON_PRETTY_PRINT);
                echo "<pre>" . $json_pretty . "<pre/>";
                
            } else if (isset($_GET['format'])) {
    
                if(empty($_GET["format"])){
                    echo "format can not be empty";
                    die;
                }
                else {
                    $format = $_GET["format"];
                } 
    
                $Books = new Search($title,$author);
                $result = $Books->SearchEBooks(null,$format); 
               
                $returnarray = array("message"=>"Success", "Result"=>$result);
     
      
                // json_encode function 
                $json_pretty = json_encode($returnarray, JSON_PRETTY_PRINT);
                echo "<pre>" . $json_pretty . "<pre/>";
                
            } else     {
    
             
    
                $Books = new Search($title,$author);
                $result = $Books->SearchEBooks(null,null); 
               
                $returnarray = array("message"=>"Success", "Result"=>$result);
     
      
                // json_encode function 
                $json_pretty = json_encode($returnarray, JSON_PRETTY_PRINT);
                echo "<pre>" . $json_pretty . "<pre/>";
                
            }
           
            break;
     
    
    default:
        echo "Action Needed";
        break;
}
?>