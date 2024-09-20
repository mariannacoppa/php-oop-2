<?php 
require_once __DIR__.'/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>php-oop-2</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Catalogo Prodotti</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($products as $product){ ?>
            <div class="col-12 col-md-3 col-lg-6">
                <div class="card">
                    <img src="<?php echo $product->image; ?>" class="img fluid" alt="<?php echo $product->name; ?>">
                    <div class="card-body">
                        <h5 class="card title"><?php echo $product->name; ?></h5>
                        <p class="d-flex">
                            <span class="me-2">Categoria: </span><i class="<?php echo $product->category->icon; ?>"></i>
                        </p>
                        <p>Tipologia prodotto: 
                            <?php 
                            $className = $product->getClassName();
                            if($className == 'Product'){
                                echo 'Accessorio';
                            }
                            elseif($className == 'Game'){
                                echo 'Gioco <br>';
                                echo 'Materiale: '.$product->getMaterial();
                            }
                            elseif($className == 'Bed'){
                                echo 'Letto <br>';
                                echo 'Dimensioni : '.$product->getSize();
                            }
                            elseif($className == 'Food'){
                                echo 'Cibo <br>';
                                echo 'Calorie: '.$product->getCalories();
                            }
                            ?></p>
                        <p>

                        <?php echo $product->getProductDetails() ?>
                        </p>
                        <p> <?php echo $product->description; ?> </p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>