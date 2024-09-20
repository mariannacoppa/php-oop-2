<?php
    class Product {
        public $name;
        public $image;
        public $category;
        public $price;
        public $quantity;
        public $is_available;
        public $description;

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

        public function getProductDetails(){
            try{
                $string = 'Prezzo:'.$this->price.'&euro; <br>';
                //throw new Exception('Il prezzo deve contenere caratteri numerici');
            }catch(Exception $e){
                $string = 'Prezzo non disponibile';
            }

            if($this->is_available){
                $string.= "Disponibilità: ".$this->quantity;
            }
            else{
                $string.= "Prodotto non disponibile";
            }

            return $string;
        }

        public function getClassName(){
            return get_class($this);
        }
    }
?>