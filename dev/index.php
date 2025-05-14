<?php

@include_once('template/header.php');

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
        // <!-- first book card starts -->
        <a href="product.html">
            <div class="book-card">
                <img src="img/blue.png" alt="Book 1" />
                <div class="card-content">
                    <h3>First Aid Book</h3>
                    <p>€14.95</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </a>
        <!-- first book card ends -->
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
