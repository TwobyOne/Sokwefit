<?php include 'header.php';?>

<section class="ebooks" id="ebooks">
    <h3 class="sub-heading" data-aos="fade-up">Readings</h3>
    <h1 class="heading" data-aos="fade-up">OUR <span>E-BOOKS</span></h1>

    <div class="coming-soon" data-aos="zoom-in">
        <h5 class="coming-soon-text">COMING SOON!</h5>
    </div>

    <style>
        .coming-soon {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 300px;
            margin: 2rem 0;
        }

        .coming-soon-text {
            font-size: 5rem;
            font-weight: 800;
            font-style: italic;
            color: #000;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-align: center;
            animation: pulse 2s infinite, lift 3s infinite;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            position: relative;
            font-family: 'Playfair Display', serif;
        }

        .coming-soon-text::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #ff4d4d, #ff8533);
            z-index: -1;
            filter: blur(20px);
            opacity: 0.3;
            animation: glow 3s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        @keyframes lift {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }

        @keyframes glow {
            0% { opacity: 0.3; }
            50% { opacity: 0.5; }
            100% { opacity: 0.3; }
        }
    </style>

    <!--<div class="ebooks-container">
        <div class="ebook-card">
            <div class="ebook-image">
                <img src="images/ebooks/fitness-guide.jpg" alt="Complete Fitness Guide">
            </div>
            <div class="ebook-content">
                <h3>Complete Fitness Guide</h3>
                <p>A comprehensive guide to achieving your fitness goals, including workout plans, nutrition advice, and lifestyle tips.</p>
                <div class="ebook-details">
                    <span class="price">$19.99</span>
                    <span class="pages">150 pages</span>
                </div>
                <a href="#" class="btn">Download Now</a>
            </div>
        </div>

        <div class="ebook-card">
            <div class="ebook-image">
                <img src="images/ebooks/nutrition-plan.jpg" alt="Nutrition Mastery">
            </div>
            <div class="ebook-content">
                <h3>Nutrition Mastery</h3>
                <p>Learn the science of nutrition and how to create effective meal plans for optimal performance and results.</p>
                <div class="ebook-details">
                    <span class="price">$24.99</span>
                    <span class="pages">200 pages</span>
                </div>
                <a href="#" class="btn">Download Now</a>
            </div>
        </div>

        <div class="ebook-card">
            <div class="ebook-image">
                <img src="images/ebooks/workout-routines.jpg" alt="Advanced Workout Routines">
            </div>
            <div class="ebook-content">
                <h3>Advanced Workout Routines</h3>
                <p>Take your training to the next level with these advanced workout routines and techniques.</p>
                <div class="ebook-details">
                    <span class="price">$29.99</span>
                    <span class="pages">180 pages</span>
                </div>
                <a href="#" class="btn">Download Now</a>
            </div>
        </div>
    </div>-->
</section>