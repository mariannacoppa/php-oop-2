<?php
            class Product {
                public $name;
                public $image;
                public $price;
                public $quantity;
                public $is_available;
                public $description;
                public $category;
        
                function __construct($_name, $_image, $_category, $_price, $_quantity, $_is_available, $_description)
                {
                    $this->name = $_name;
                    $this->image = $_image;
                    $this->category = $_category;
                    $this->price = $_price;
                    $this->quantity = $_quantity;
                    $this->is_available = $_is_available;
                    $this->description = $_description;
                }
            }
?>