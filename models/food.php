<?php
        require_once __DIR__.'/product.php';

        class Food extends Product {
            protected $calories;
    
            function __construct($_name, $_image, category $_category, $_price, $_quantity, $_is_available, $_description)
            {
                parent::__construct($_name, $_image, $_category, $_price, $_quantity, $_is_available, $_description);
            }
    
            public function setCalories($_calories){
                $this->calories = $_calories;
            }
    
            public function getCalories(){
                return $this->calories;
            }
    
        }
?>