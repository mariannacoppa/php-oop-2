<?php
    //importo le classi
    require_once __DIR__.'/models/category.php';
    require_once __DIR__.'/models/bed.php';
    require_once __DIR__.'/models/food.php';
    require_once __DIR__.'/models/game.php';

    //variabili categorie cane e gatto (istanze della claasse category)
    $dog = new Category('Cane', 'fa-solid fa-dog fa-xl mt-2');
    $cat = new Category('Gatto', 'fa-solid fa-cat fa-xl mt-2');

    $product = new Product('Collare', 'https://picsum.photos/200/200', $dog, 13.00, 20, true, 'Lorem ipsum dolor sit amet');
    $product->description = "Lorem ipsum dolor";

    $food = new Food('Croccantini', 'https://picsum.photos/200/200', $dog, 10.00, 20, true, 'Lorem ipsum dolor sit amet');
    $food->setCalories(500);

    $game = new Game('Pallina', 'https://picsum.photos/200/200', $cat, 2.50, 5, true, 'Lorem ipsum dolor sit amet');
    $game->setMaterial('Lana');

    $bed = new Bed('Ciambella', 'https://picsum.photos/200/200', $cat, 18.00, 0, false, 'Lorem ipsum dolor sit amet');
    $bed->setSize('40 x 20 x 300');

    // creo array di prodotti
    $products = [
        $product, 
        $game, 
        $bed, 
        $food
    ];
?>