<?php
    require_once __DIR__.'/product.php';

    class Bed extends Product{
        protected $size;

        function __construct($_name, $_image, $_price, $_quantity, $_is_available, Category $_category){
            parent::__construct($_name, $_image, $_price, $_quantity, $_is_available, $_category);
        }

        public function setSize($_size){
            $this->size = $_size;
        }

        public function getSize(){
            return $this->size;
        }

        public function getClassName(){
            return get_class();
        }
    }
?>