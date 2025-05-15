<?php

@include_once('src/Database/connection.php');

@include_once('template/header.php');

Database::query("SELECT * FROM `products`");
$products = Database::getAll();

?>

<div class="section-1">
    <div class="section-1-text">
        <center>
            <h1>Welcome to LV Bookstore</h1>
            <p>
                Your one-stop shop for all your book needs. We offer a wide range of
                books from various genres. Whether you're looking for the latest
                bestseller, a classic novel, educational materials, or niche books
                on specialized topics, we have something for everyone. Explore our
                collection and discover your next great read today!
            </p>
        </center>
    </div>
</div>

<!-- ------------------- Book Cards -------------------- -->
<div class="book-cards">
    <?php foreach ($products as $product) : ?>
        <div class="book-card">
            <a href="<?= $product->id ?>">
                <img src="<?= $product->product_img ?>">
                <div class="card-content">
                    <h3><?= $product->product_name ?></h3>
                    <p><?= $product->product_desc ?></p>
                </div>
            </a>
            <p><?= number_format($product->product_price, 2, ',', '.') ?></p>
            <button class="btn">Add to Cart</button>
        </div>
    <?php endforeach; ?>
</div>


<!-- ------------------- About -------------------- -->

<div class="section-3">
    <h2>About Us</h2>
    <p>
        We are a small bookstore located in the heart of the city. We offer a
        wide range of books from various genres. Our mission is to provide a
        cozy and welcoming environment for book lovers. We believe that books
        have the power to change lives, and we are dedicated to helping our
        customers find the perfect book for them.
    </p>
</div>

<?php
@include_once('template/footer.php');
