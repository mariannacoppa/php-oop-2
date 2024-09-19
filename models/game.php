<?php
    require_once __DIR__.'/product.php';

    class Game extends Product{
        protected $material;

        function __construct($_name, $_image, $_price, $_quantity, $_is_available, Category $_category)
        {
            parent::__construct($_name, $_image, $_price, $_quantity, $_is_available, $_category);
        }

        public function setMaterial($_material) {
            $this->material = $_material;
        }

        public function getMaterial(){
            return $this->material;
        }

        public function getClassName()
        {
            return get_class();
        }
    }
?>