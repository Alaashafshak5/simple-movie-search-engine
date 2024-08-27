<?php
class Movie {
    public $title, $description, $rating;
    
    public function __construct($title, $description, $rating) {
     
        $this->title = $title;
        $this->description = $description;
        $this->rating = $rating;
    }
 
}

class wishlist {
    public $array;
    
    public function __construct() {
        $this->array = array();
    }
    
    public function addToWishlist($movie) {
        $this->array[] = $movie;
    }
   
    
    public function getCount() {
        return count($this->array);
    }
     
  
    
}
?>




