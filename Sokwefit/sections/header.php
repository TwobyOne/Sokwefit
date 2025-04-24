<!--################################################################################################# 
        when user selects the desired currency:
            -> send an ajax request to php script 'currency.php'.
            -> change the values of the $_SESSION["currency"]["logo"] and $_SESSION["currency"]["price"].
            -> refresh the page to get the changes.

    #################################################################################################-->

<style>
    .logo {
        font-family: "Tempus Sans ITC",'Lucida Handwriting','Gabriola', serif;
        font-size: 24px; /* Adjust size as needed */
        color: #333; /* Change color as needed */
    }
</style>

<header>
   <a href="" class="logo">
    <img src="images/log.svg" alt="logo">
    SOKWEFITNESS</a>


    <nav class="navbar">
        <a class="active" href="#home">home</a>
        <a href="#Merchandise">Merchandise</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#E-Books">E-Books</a>
        <a href="#review">reviews</a>
    </nav>

    <div class="icons">
      
    <?php

        // Ensure the database connection is established
        if (!isset($connection)) {
            // Update with your actual DB credentials
            $connection = mysqli_connect("localhost", "root", "", "coffeeshop"); 
            if (!$connection) {
                die("Connection failed: " . mysqli_connect_error());
            }
        }

        if(isset($_SESSION["currency"])){
            $currency_logo = $_SESSION["currency"]["logo"];
            $currency_price = $_SESSION["currency"]["price"]; 
        } else {
            $currency_logo = $_SESSION["currency"]["logo"]="$"; 
            $currency_price = $_SESSION["currency"]["price"]=1;
        }

        // All currencies are in the table "Currency".
        // we want to fill the SELECT options.
        $query="SELECT to_currency FROM currency";
        $result=mysqli_query($connection,$query);  
    ?>

            <select id="currency_list">
           
                <?php while($row=mysqli_fetch_assoc($result)){   
                    
                        if($currency_logo == $row['to_currency']){ ?>
                            <option value="<?php echo $row['to_currency'] ?>" selected> <?php echo $row['to_currency'] ?> </option>   <?php  }
                        else{   ?>
                            <option value="<?php echo $row['to_currency'] ?>" > <?php echo $row['to_currency'] ?> </option>   <?php  }

                } ?>  
            
            </select>
                


           <!-- Social Media Icons -->
        <!-- Will hide on screens smaller than md (mobile) -->
        <a href="https://www.facebook.com/people/SOKWE-Fitness/61566860461102/" class="fab fa-facebook social-icon" target="_blank"></a>
        <a href="https://www.instagram.com/sokwefitness/" class="fab fa-instagram social-icon" target="_blank"></a>
        <a href="https://www.youtube.com/@abuujr87/featured" class="fab fa-youtube social-icon" target="_blank"></a>


            <!--<a href="./wishlist.php" class="fas fa-heart"></a>
            <a href="./cart.php" class="fas fa-shopping-cart"></a>-->
        
            <i class="fas fa-bars" id="menu-bars"></i>
    </div>

</header>





    
