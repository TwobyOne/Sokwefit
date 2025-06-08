<?php
$products = [
    [
        'name' => 'Gym Mug',
        'description' => 'Stylish and durable mug, in perfect uses for water, protein shakes or coffee.',
        'image' => 'images/Mugs/mugs.png'
    ],
    [
        'name' => 'Gym Pullover',
        'description' => 'Premium gym pullover for maximum comfort during workouts.',
        'image' => 'images/random/b3.jpg'
    ],
    [
        'name' => 'Gym Bag',
        'description' => 'High-quality gym bag to keep your gear organized.',
        'image' => 'images/random/b2.jpg'
    ],
    [
        'name' => 'T-Shirt',
        'description' => 'Comfortable and stylish gym t-shirt with Sokwefitness branding.',
        'image' => 'images/random/Tshirt.jpg'
    ],
    [
        'name' => 'Vest',
        'description' => 'Comfortable and stylish gym vest with Sokwefitness branding, for workouts and training.',
        'image' => 'images/Vest/vest_black_and_hand_on_chest.png'
    ],
    [
        'name' => 'Gym Crop Top',
        'description' => 'Comfortable and stylish gym crop top with Sokwefitness branding, for workouts and training, especially for women.',
        'image' => 'images/Vest/vest_black_and_white_full_logo_on_chest_3.png'
    ],
    [
        'name' => 'Towel',
        'description' => 'Comfortable and stylish gym towel with Sokwefitness branding, with motivational words of Eat, sleep and train.',
        'image' => 'images/Towel/WHITE_EAT_SLEEP_TRAIN.png'
    ],
    [
        'name' => 'Gym Mat',
        'description' => 'Comfortable and stylish gym t-shirt with Sokwefitness branding.',
        'image' => 'images/Mat/white_yoga_mat_sf_full_logo.png'
    ]
];
?>

<section class="merchandise-section bw-section py-5 position-relative" id="merchandise">
    <div class="container">
        <div class="merch-intro mb-5">
        <h3 class="sub-heading" data-aos="fade-up">Explore More</h3>
        <h1 class="heading" data-aos="fade-up">OUR <span>MERCHANDISE</span></h1>
            <img src="images/Sokwe logo 1.png" alt="Our Merchandise" class="img-fluid w-100 merch-intro-img">
        </div>
        <div class="row g-5 justify-content-center">
            <?php foreach ($products as $product): ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card merchandise-card flex-fill text-center">
                    <img src="<?php echo $product['image']; ?>" class="card-img-top bw-img" alt="<?php echo $product['name']; ?>">
                    <div class="card-body d-flex flex-column align-items-center">
                        <h5 class="card-title mb-2"><?php echo $product['name']; ?></h5>
                        <p class="card-text"><?php echo $product['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- Floating WhatsApp Button -->
        <a href="https://wa.me/255743536373" target="_blank" class="whatsapp-float-btn">
            <i class="fab fa-whatsapp"></i> Order Now on WhatsApp
        </a>
    </div>
</section> 