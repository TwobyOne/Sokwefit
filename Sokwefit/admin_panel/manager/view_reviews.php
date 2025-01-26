<?php session_start();

if (!isset($_SESSION['manager_id'])) {
	header("location:../index.php");
	exit();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../images/log.svg" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Manager</title>
	    
	<!-- Bootstrap css file -->
	<link rel="stylesheet" href="../../plugins/bootstrap-5.1.3/css/bootstrap.min.css">

    <!-- font awesome css cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

	<!--  Iconify SVG framework link -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

	<!-- custom css file link  -->
    <link rel="stylesheet" href="../css/custom.css">
	<link rel="stylesheet" href="../css/sidebar.css">
	<link rel="stylesheet" href="../css/top_navbar.css">

	<!--google material icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">

	  
</head>
<body>

<?php

include_once('../../includes/db_connect.php');


?>


  
<div class="wrapper">
	<div class="body-overlay"></div>


        <?php 
	
		// sidebar
		include('../includes/manager_sidebar.php'); ?>


        <div id="content">
		
        <?php 
			$section="Reviews";
			
			include('../includes/top_navbar.php'); ?>
		
			<div class="main-content">
                <h4>View All Reviews</h4>
				<hr />

                <div class="stars_container">
                    <div class="star_element">
                        <i class="fas fa-star submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                        <span> 1 star approved reviews</span>
                    </div>

                    <div class="star_element">
                         <i class="fas fa-star submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                         <span> 2 star approved reviews </span>
                        </div>

                    <div class="star_element">
                      <i class="fas fa-star submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                      <span> 3 star approved reviews </span>
                    </div>

                    <div class="star_element">
                         <i class="fas fa-star submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                         <span> 4 star approved reviews </span>
                    </div>
                    
                    <div class="star_element">
                         <i class="fas fa-star submit_star mr-1" id="submit_star_5" data-rating="5"></i>
                         <span> 5 star approved reviews </span>
                    </div>
                 
                </div>
                <hr />
                
                <div class="approved-reviews">
            <h4>Reviews Approval Section</h4>
    
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Rating</th>
                        <th>Review</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM review_table WHERE approved = 0 ORDER BY datetime DESC";
                    $result = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['user_name']) . "</td>";
                        echo "<td>" . $row['user_rating'] . " ★</td>";
                        echo "<td>" . htmlspecialchars($row['user_review']) . "</td>";
                        echo "<td>" . $row['datetime'] . "</td>";
                        echo "<td>";
                        echo "<button class='btn btn-success approve-btn' data-id='" . $row['review_id'] . "'>Approve</button> ";
                        echo "<button class='btn btn-danger delete-btn' data-id='" . $row['review_id'] . "'>Delete</button>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

                <hr />
                <h4>Statistics & Reports</h4>
				<hr />

                <div class="reviews_stat">

                    <?php

                        // get the nb of people who rated in a specific month
                        // get the nb of stars

                        $month_array = array_fill(0,12,0);
                        $average_rating_month_array = array_fill(0,12,0);
                        $star_array = array_fill(0,5,0);
                        
                        $query = "SELECT user_rating,datetime From review_table where datetime LIKE CONCAT('%-%-',YEAR(CURRENT_DATE));";
                        $result = mysqli_query($connection,$query);

                        while($row = mysqli_fetch_assoc($result)){
                            $values = explode('-',$row["datetime"]);    // date: 3-6-2022
                            $monthValue = $values[1];
                            $starValue = $row["user_rating"];
                            
                            switch($monthValue){
                                case 1: $month_array[0]++; $average_rating_month_array[0]+=$starValue; break;
                                case 2: $month_array[1]++; $average_rating_month_array[1]+=$starValue; break;
                                case 3: $month_array[2]++; $average_rating_month_array[2]+=$starValue; break;
                                case 4: $month_array[3]++; $average_rating_month_array[3]+=$starValue; break;
                                case 5: $month_array[4]++; $average_rating_month_array[4]+=$starValue; break;
                                case 6: $month_array[5]++; $average_rating_month_array[5]+=$starValue; break;
                                case 7: $month_array[6]++; $average_rating_month_array[6]+=$starValue; break;
                                case 8: $month_array[7]++; $average_rating_month_array[7]+=$starValue; break;
                                case 9: $month_array[8]++; $average_rating_month_array[8]+=$starValue; break;
                                case 10: $month_array[9]++;$average_rating_month_array[9]+=$starValue; break;
                                case 11: $month_array[10]++; $average_rating_month_array[10]+=$starValue; break;
                                case 12: $month_array[11]++; $average_rating_month_array[1]+=$starValue; break;
                            }

                            

                            switch($starValue){
                                case 1: $star_array[0]++; break;
                                case 2: $star_array[1]++; break;
                                case 3: $star_array[2]++; break;
                                case 4: $star_array[3]++; break;
                                case 5: $star_array[4]++; break;    
                            }
                        }

                        for($i=0; $i<12; $i++){

                            if($month_array[$i] != 0)
                                 $average_rating_month_array[$i] = number_format($average_rating_month_array[$i]/$month_array[$i],1);
                                
                            }

                        $month_array = implode('-',$month_array);
                        $star_array = implode('-',$star_array); 
                        $average_rating_month_array = implode('-',$average_rating_month_array);   

                        // Check if $values is set before using it
                        if (isset($values)) {
                            $hiddenYearValue = $values[2]; // Use $values safely
                        } else {
                            $hiddenYearValue = ''; // Default value if $values is not set
                        }
                    ?>

                    <input type="hidden" id="hidden-year" value="<?php echo $hiddenYearValue; ?>" />
                    <input type="hidden" id="hidden-stats" value=<?php echo $month_array; ?> />
                    <input type="hidden" id="hidden-stars" value=<?php echo $star_array; ?> />
                    <input type="hidden" id="hidden-average" value=<?php echo $average_rating_month_array; ?> />
                    
                   
                    <div class="container1">
                        <div> 
                            <canvas id="myChart" style="width:40vw; "></canvas>
                        </div>

                        <button class="status">
                            <span class="shadow"></span>
                            <span class="edge"></span>
                            <span class="front text"> View Status
                            </span>
                        </button>

                    </div>
                    
                    <div style="position:relative; width:40vw; "> 
                        <canvas id="myChart2" ></canvas>
                    </div>
                    `
                </div>
                


            </div>
        </div>
</div>


<!--##################################################################################### 
        when the manager click on star button
        a popup modal appears -> let the manager view all reviews
    ##################################################################################### -->

    <div id="add_modal" class="modal fade" tabindex="-1" role="dialog">
  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    	<div class="modal-content">

            <!-- modal title -->
            <div class="modal-header">
                <h3 class="modal-title" id="NAME"></h3>
	      	</div>

            <!--  modal body -->
			<form method="post" class="form-horizontal">
				<div class="modal-body">   
					<div class="content-wrapper">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12">	
									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default">
												<div class="panel-body">
		
                                                    <div class="review"> 
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Rating</th>
                                                                    <th>Review</th>
                                                                    <th>Date</th>
                                                                    <th>Status</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $query = "SELECT * FROM review_table WHERE approved = 0 ORDER BY datetime DESC";
                                                                $result = mysqli_query($connection, $query);
                                                                while($row = mysqli_fetch_assoc($result)) {
                                                                    echo "<tr>";
                                                                    echo "<td>" . htmlspecialchars($row['user_name']) . "</td>";
                                                                    echo "<td>" . $row['user_rating'] . " ★</td>";
                                                                    echo "<td>" . htmlspecialchars($row['user_review']) . "</td>";
                                                                    echo "<td>" . $row['datetime'] . "</td>";
                                                                    echo "<td>" . ($row['approved'] ? 'Approved' : 'Pending') . "</td>";
                                                                    echo "<td>";
                                                                    echo "<button class='btn btn-success approve-btn' data-id='" . $row['review_id'] . "'>Approve</button> ";
                                                                    echo "<button class='btn btn-danger delete-btn' data-id='" . $row['review_id'] . "'>Delete</button>";
                                                                    echo "</td>";
                                                                    echo "</tr>";
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                 	
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> 					
					</div>

					<div class="modal-footer">
						<input class="btn btn-primary" type="button" name="cancel" id="cancel" value="Cancel">
					</div>
				</div>
			</form>
    	</div>
  	</div>
</div>

<!--##################################################################################### 
        when the manager click on status button
        a popup modal appears -> let the manager view shop status
    ##################################################################################### -->

    <div id="add_modal2" class="modal fade" tabindex="-1" role="dialog">
  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    	<div class="modal-content">

            <!-- modal title -->
            <div class="modal-header">
                <h3 class="modal-title" id="NAME"></h3>
	      	</div>

            <!--  modal body -->
			<form method="post" class="form-horizontal">
				<div class="modal-body">   
					<div class="content-wrapper">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12">	
									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default">
												<div class="panel-body">
		
                                                <div style="position:relative; width:50vw; "> 
                                                    <canvas id="myChart3" ></canvas>
                                                </div>

                                                <div class="status_info">
                                                    <h2 class="status_elm">Total average</h2>
                                                    <hr />

                                                    <h3 class="status_elm2"></h3>

                                                </div>
                                                
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> 					
					</div>

					<div class="modal-footer">
						<input class="btn btn-primary" type="button" name="cancel" id="cancel2" value="Cancel">
					</div>
				</div>
			</form>
    	</div>
  	</div>
</div>



<script src="js/popper.min.js"></script>

<!-- bootstrap js file-->
<script src="../../plugins/bootstrap-5.1.3/js/bootstrap.min.js"></script>

<!-- jquery js file  -->
<script src="../../plugins/jquery-3.6.0/jquery.min.js"></script>

<!-- sweetalert2 js file -->
<script src="../../plugins/sweetalert2/sweetalert2.js"></script>

<!-- chart.js file -->
<script src="../../plugins/chart.js-3.7.1/chart.min.js"></script>

<script src="../js/script.js" type="text/javascript"></script>
<script src="../js/charts.js" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        // Approve review
        $(document).on('click', '.approve-btn', function() {
            var reviewId = $(this).data('id');
            $.ajax({
                url: 'approve_review.php',
                type: 'POST',
                data: { id: reviewId, action: 'approve' },
                dataType: 'json',  // Specify that we expect JSON response
                success: function(response) {
                    if (response.success) {
                        Swal.fire('Success', 'Review approved successfully!', 'success')
                        .then(() => location.reload());
                    } else {
                        Swal.fire('Error', response.message || 'Error approving review.', 'error');
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire('Error', 'Server error occurred. Please try again.', 'error');
                }
            });
        });

        // Unapprove review
        $(document).on('click', '.unapprove-btn', function() {
            var reviewId = $(this).data('id');
            $.ajax({
                url: 'approve_review.php',
                type: 'POST',
                data: { id: reviewId, action: 'unapprove' },
                dataType: 'json',  // Specify that we expect JSON response
                success: function(response) {
                    if (response.success) {
                        Swal.fire('Success', 'Review unapproved successfully!', 'success')
                        .then(() => location.reload());
                    } else {
                        Swal.fire('Error', response.message || 'Error unapproving review.', 'error');
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire('Error', 'Server error occurred. Please try again.', 'error');
                }
            });
        });

        // Delete review
        $(document).on('click', '.delete-btn', function() {
            var reviewId = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'approve_review.php',
                        type: 'POST',
                        data: { id: reviewId, action: 'delete' },
                        dataType: 'json',  // Specify that we expect JSON response
                        success: function(response) {
                            if (response.success) {
                                Swal.fire('Deleted!', 'Review has been deleted.', 'success')
                                .then(() => location.reload());
                            } else {
                                Swal.fire('Error', response.message || 'Error deleting review.', 'error');
                            }
                        },
                        error: function(xhr, status, error) {
                            Swal.fire('Error', 'Server error occurred. Please try again.', 'error');
                        }
                    });
                }
            });
        });
    });
</script>
  

</body>
  
</html>


