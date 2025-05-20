<?php
@include_once(__DIR__ . '/src/Helpers/auth.php');
@include_once(__DIR__ . '/src/Helpers/message.php');
@include_once(__DIR__ . '/src/Database/connection.php');

include_once(__DIR__ . '/template/header.php');

Database::query("SELECT * FROM `products` WHERE `products`.`id` = :id", [':id' => ]);
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
