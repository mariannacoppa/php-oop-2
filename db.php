<?php
    //importo le classi
    require_once __DIR__.'/models/category.php';
    require_once __DIR__.'/models/bed.php';
    require_once __DIR__.'/models/food.php';
    require_once __DIR__.'/models/game.php';
    require_once __DIR__.'/models/product.php';

    //variabili categorie cane e gatto (istanze della claasse category)
    $dog = new Category('Cane', 'fa-solid-fa-dog');
    $cat = new Category('Gatto', 'fa-solid-fa-cat');

    $product = new Product('Collare', 'https://picsum.photos/200/300', $dog, 13.00, 20, true, 'Lorem ipsum dolor sit amet');
    $product->description = "Lorem ipsum dolor";
    $food = new Food('Croccantini', 'https://picsum.photos/200/300', $dog, 10.00, 20, true, 'Lorem ipsum dolor sit amet');
    $food->setCalories(500);
    
    $game = new Game('Pallina', 'https://picsum.photos/200/300', 2.50, 5, true, $cat);
    $game->setMaterial('Spago');
    
    $bed = new Bed('Ciambella', 'https://picsum.photos/200/300', 18.00, 0, false, $cat);
    $bed->setSize('50 x 20 x 40');
    
    var_dump($product->getProductDetails());
?>