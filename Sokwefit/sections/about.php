<section class="about" id="about">

    <h3 class="sub-heading" data-aos="fade-up">About Us</h3>
    <h1 class="heading" data-aos="fade-up">Why Choose Us?</h1>

    <div class="about-info">
        <div class="image" data-aos="fade-right">
            <img src="images/about.png" alt="About Sokwefitness">
        </div>

        <div class="content" data-aos="fade-left">
            <h3>Transforming Lives Through Fitness</h3>
            <p>At Sokwefitness, under the leadership of Abuu JR, we're more than just a fitness center - we're your partners in wellness. Our commitment goes beyond providing equipment; we create an ecosystem that nurtures your journey to a healthier lifestyle.</p>
            <p>Experience excellence through our premium facilities and exclusive merchandise, carefully curated to elevate your fitness journey. Every product and service we offer reflects our dedication to quality and your success.</p>
            
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>Swift Delivery</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>Flexible Payments</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 Support</span>
                </div>
            </div>
        </div>
    </div>

    <h3 class="sub-heading" data-aos="fade-up"> Customers </h3>
    <h1 class="heading" data-aos="fade-up"> Happy Customers! </h1>

    <div class="row" id="gallery" data-aos="fade-up">
        <div class="col-lg-10 m-auto">
            <div class="customer-table-img-slider swiper-container" id="icon">
                <div class="swiper-wrapper">
                    <?php for($i=1; $i<8;$i++){ ?>
                        <div class="swiper-slide">
                            <img src="./images/customers/c<?php echo $i ?>.jpg" 
                                 data-fancybox="table-slider"
                                 class="customer-table-img">
                        </div>
                    <?php } ?>       
                </div>
                
                <!-- Add Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <h3 class="sub-heading" data-aos="fade-up"> Team </h3>
    <h1 class="heading" data-aos="fade-up"> Our Beautiful Team! </h1>


    <div class="row team-slider" data-aos="fade-up">
        <div class="swiper-wrapper">

<!-- get all team member informations from table TEAM  -->
<?php
    $query="SELECT member_name, member_image, member_role FROM team";
    $result=mysqli_query($connection,$query);
    
    if($result){
        while($row=mysqli_fetch_assoc($result)){  ?>       

            <div class="col-lg-4 swiper-slide">
                <div class="team-box text-center">
                    <img src="./images/team/<?php echo $row['member_image'] ?>" class="team-img">

                    <h3 class="h3-title"><?php echo $row['member_name'] ?></h3>
                    <p> <?php echo $row['member_role'] ?> </p>
                    <div class="social-icon">
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

<?php }} ?>

        </div>

        <div class="swiper-pagination"></div>
    </div>



</section>

<script>
new Swiper('.customer-table-img-slider', {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  centeredSlides: true,
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  }
});
</script>
