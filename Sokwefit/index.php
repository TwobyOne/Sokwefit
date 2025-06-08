<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <title>Sokwefitness - Your Ultimate Fitness Destination</title>

    <meta name="description" content="Sokwefitness offers a variety of fitness services and products to help you achieve your health goals. Join us for personalized training and nutrition plans.">
    <link rel="canonical" href="https://www.yourwebsite.com/">

    <!-- Open Graph tags for social media sharing -->
    <meta property="og:title" content="Sokwefitness - Your Ultimate Fitness Destination">
    <meta property="og:description" content="Join Sokwefitness for personalized training and nutrition plans.">
    <meta property="og:image" content="https://www.yourwebsite.com/images/log.svg">
    <meta property="og:url" content="https://www.yourwebsite.com/">

    <!-- swiper css file -->
    <link rel="stylesheet" href="./plugins/swiper-8.0.7/css/swiper.min.css">

    <!-- font awesome css cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- bootstrap css file -->
    <link rel="stylesheet" href="./plugins/bootstrap-5.1.3/css/bootstrap.min.css">

    <!-- aos css file -->
    <link rel="stylesheet" href="./plugins/aos-2.3.4/css/aos.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/offer.css">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/toppings_modal.css">
    <link rel="stylesheet" href="./css/extra.css">
    <link rel="stylesheet" href="./css/review.css">
    <link rel="stylesheet" href="./css/order.css">
    <link rel="stylesheet" href="./css/merchandise.css">
    <link rel="stylesheet" href="./css/ebooks.css">
    <link rel="stylesheet" href="assets/css/merchandise.css">
    

</head>
<body>

<!-- ######################################################################################
     we divided the index file into several php files, to organize and simplify the code.
     all the php files are under the FOLDER: 'sections'.

     we used jquery for:
        - adding data to cart.
        - adding reviews.
        - placing orders.
        - changing the currency.

     all the jquery files are under the FOLDER: 'js'

     all requests are sent to php scripts -> under FOLDER: 'scripts'.
     ###################################################################################### -->

<!-- Main content starts here -->
<!--<h1>Welcome to Sokwefitness</h1>-->
<p>Your journey to fitness starts here. Explore our services and products!</p>

<!-- Database connection -->
<?php include_once('./includes/db_connect.php'); ?>    

<!-- header section -->
<?php include('./sections/header.php'); ?> 

<!-- home section  -->
<?php include('./sections/home.php'); ?> 

<!-- offers section  -->
<?php //include('./sections/offer.php'); ?> 

<!-- about section  -->
<?php include('./sections/about.php'); ?> 

<!-- Merchandise -->
 <?php include('./sections/merchandise.php'); ?>

<!-- PopUp toppings modal section  -->
<?php //include('./sections/toppings_modal.php'); ?> 

<!-- menu section  -->
<?php include('./sections/menu.php'); ?>

<!-- E-Books section -->
<?php include('./sections/ebooks.php'); ?>

<!-- review section  -->
<?php include('./sections/review.php'); ?> 

<!-- footer section  -->
<?php include('./sections/footer.php'); ?> 

<!-- loader part  -->

<!-- jquery js file  -->
<script src="./plugins/jquery-3.6.0/jquery.min.js"></script>

<!-- bootstrap js file-->
<script src="./plugins/bootstrap-5.1.3/js/bootstrap.min.js"></script>

<!-- swiper js file -->
<script src="./plugins/swiper-8.0.7/js/swiper.min.js"></script>

<!-- aos js file -->
<script src="./plugins/aos-2.3.4/js/aos.js"></script>

<!-- sweetalert2 js file -->
<script src="./plugins/sweetalert2/sweetalert2.js"></script>
 
<script src="js/script.js"></script>
<script src="js/currency.js"></script>
<script src="js/addToCart.js"></script>
<script src="js/wishlist.js"></script>
<script src="js/reviews.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>