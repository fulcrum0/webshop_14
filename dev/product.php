<?php
@include_once(__DIR__ . '/src/Helpers/auth.php');
@include_once(__DIR__ . '/src/Helpers/message.php');
@include_once(__DIR__ . '/src/Database/connection.php');

include_once(__DIR__ . '/template/header.php');

if (!isset($_GET['product_id'])) {
    setError('failed', 'Geen ID van het product ontvangen.');
    header('Location: index.php');
    exit(0);
}

$product_id = $_GET['product_id'];

// Now get all the products
Database::query("SELECT * FROM `products` WHERE `products`.`id` = :id", [':id' => $product_id]);
$product = Database::get();
?>

<div class="product-box">
    <div class="img-cont">
        <img src="<?= $product->image ?>" alt="" />
    </div>
    <div class="desc-cont">
        <h3><?= $product->name ?></h3>
        <p><?= $product->desc ?></p>
    </div>
    <div class="buy-cont">
        <p><?= $product->price ?></p>
        <a href="#" class="btn">Add to Cart</a>
    </div>
</div>

<?php

include_once(__DIR__ . '/template/footer.php');
