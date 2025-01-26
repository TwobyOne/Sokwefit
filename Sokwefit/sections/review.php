<section class="review" id="review">

    <h3 class="sub-heading" data-aos="fade-up"> customer's review </h3>
    <h1 class="heading" data-aos="fade-up"> what they say </h1>


    <!-- In this section we used bootstrap for the design, and JQUERY... -->
    <div   div class="container">
    	<div class="card">
    		<div class="card-body">
    			<div class="row">

    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Reviews</h3>
    				</div>

    				<div class="col-sm-4">
                    <p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div>

    				<div class="col-sm-4 text-center">
    					<h3 class="mt-4 mb-3">Write Review Here</h3>
    					<button type="button" name="add_review" id="add_review" class="btn">Review</button>
    				</div>

    			</div>
    		</div>
    	</div>
    </div>   

    <div class="swiper-container review-slider">
            <div class="swiper-wrapper" id="reviews_swiper">
            
            </div>

    </div>

        

</section>


<!-- Pop up modal for review -->
<div id="review_modal" class="modal fade" tabindex="-1" role="dialog">
  	<div class="modal-dialog modal-dialog-centered" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4 star_rating">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group review_input">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
	        	</div>
	        	<div class="form-group review_input">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn" id="save_review">Submit</button>
                    <button type="button" class="btn btn-default" id="cancel_review">cancel</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>

<script>
$(document).ready(function() {
    load_rating_data();

    function load_rating_data() {
        $.ajax({
            url: "submit_rating.php",
            method: "POST",
            data: { action: 'load_data' },
            dataType: "JSON",
            success: function(data) {
                // Update the average rating and total reviews
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_reviews);

                // Update the star counts
                $('#total_five_star_review').text(data.five_star_review);
                $('#total_four_star_review').text(data.four_star_review);
                $('#total_three_star_review').text(data.three_star_review);
                $('#total_two_star_review').text(data.two_star_review);
                $('#total_one_star_review').text(data.one_star_review);

                // Update progress bars
                $('#five_star_progress').css('width', (data.five_star_review/data.total_reviews * 100) + '%');
                $('#four_star_progress').css('width', (data.four_star_review/data.total_reviews * 100) + '%');
                $('#three_star_progress').css('width', (data.three_star_review/data.total_reviews * 100) + '%');
                $('#two_star_progress').css('width', (data.two_star_review/data.total_reviews * 100) + '%');
                $('#one_star_progress').css('width', (data.one_star_review/data.total_reviews * 100) + '%');

                // Clear existing reviews
                $('#reviews_swiper').empty();

                // Add the reviews to the swiper
                if(data.review_data.length > 0) {
                    data.review_data.forEach(function(review) {
                        var stars = '';
                        for(var i = 1; i <= 5; i++) {
                            var starClass = i <= review.user_rating ? 'text-warning' : 'star-light';
                            stars += '<i class="fas fa-star ' + starClass + ' mr-1"></i>';
                        }

                        var reviewHtml = `
                            <div class="swiper-slide">
                                <div class="box">
                                    <div class="stars">
                                        ${stars}
                                    </div>
                                    <p>${review.user_review}</p>
                                    <h3>${review.user_name}</h3>
                                    <span>${review.datetime}</span>
                                </div>
                            </div>
                        `;
                        $('#reviews_swiper').append(reviewHtml);
                    });
                }

                // Initialize or update Swiper
                if(typeof reviewSwiper !== 'undefined') {
                    reviewSwiper.update();
                } else {
                    reviewSwiper = new Swiper('.review-slider', {
                        spaceBetween: 20,
                        loop: true,
                        autoplay: {
                            delay: 2500,
                            disableOnInteraction: false,
                        },
                        breakpoints: {
                            640: { slidesPerView: 1 },
                            768: { slidesPerView: 2 },
                            1024: { slidesPerView: 3 },
                        },
                    });
                }
            }
        });
    }
});
</script>







