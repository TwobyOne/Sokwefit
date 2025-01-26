<?php


// #######################################################################################################
//  we have used Ajax request, so when user click on submit button after filling review fields, and rating
//  data will be sent to this PHP script. 
//  We'll write all the actions like submit review, load all reviews from database, etc..
// #######################################################################################################


include('../includes/db_connect.php');

if (isset($_POST["action"])){

    // Insert reviews data into database
    if ($_POST["action"] == "submit_rating")
    {
        // Validate and sanitize inputs
        $username = mysqli_real_escape_string($connection, trim($_POST["user_name"]));
        $userRating = filter_var($_POST["rating_data"], FILTER_VALIDATE_INT, array("options" => array("min_range" => 1, "max_range" => 5)));
        $userReview = mysqli_real_escape_string($connection, trim($_POST["user_review"]));
        $datetime = date('Y-m-d'); // Changed to SQL-friendly date format

        // Validate inputs
        if (empty($username) || empty($userReview) || $userRating === false) {
            echo "Invalid input data";
            exit;
        }

        $query = "INSERT INTO review_table(user_name, user_rating, user_review, datetime, approved) 
                 VALUES (?, ?, ?, ?, 0)";  // Set approved to 0 by default
                 
        // Use prepared statement
        $stmt = mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($stmt, "siss", $username, $userRating, $userReview, $datetime);
        
        if (mysqli_stmt_execute($stmt)) {
            echo "Review submitted successfully! Waiting for approval.";
        } else {
            echo "Error submitting review";
        }
        mysqli_stmt_close($stmt);
    }



    // Retrieve reviews data from database
    if ($_POST["action"] == "load_data") 
    {
        $average_rating = 0;
        $total_review = 0;
        $five_star_review = 0;
        $four_star_review = 0;
        $three_star_review = 0;
        $two_star_review = 0;
        $one_star_review = 0;
        $total_user_rating = 0;
        $review_content = array();

        $query2 = "SELECT * FROM review_table WHERE approved = 1 ORDER BY review_id DESC";

        $result = mysqli_query($connection, $query2);

        if (!$result) {
            echo json_encode(array("error" => "Error loading reviews"));
            exit;
        }

        while ($row = mysqli_fetch_assoc($result)) {

            // associative array 
            $review_content[] = array(
                "user_name" => $row["user_name"],
                "user_review" => $row["user_review"],
                "rating" => $row["user_rating"],
                "datetime" => $row["datetime"]);

            if ($row["user_rating"] == '5')
                $five_star_review++;
            if ($row["user_rating"] == '4')
                $four_star_review++;
            if ($row["user_rating"] == '3')
                $three_star_review++;
            if ($row["user_rating"] == '2')
                $two_star_review++;
            if ($row["user_rating"] == '1')
                $one_star_review++;


            $total_review++;

            $total_user_rating += $row["user_rating"];

        }

        $average_rating = $total_user_rating / $total_review;

        // we save all the info in array variable and encode it in json format for sending it to AJAX
        $output = array(
            'average_rating' => number_format($average_rating, 1),
            'total_review' => $total_review,
            'five_star_review' => $five_star_review,
            'four_star_review' => $four_star_review,
            'three_star_review' => $three_star_review,
            'two_star_review' => $two_star_review,
            'one_star_review' => $one_star_review,
            'review_data' => $review_content
        );

        echo json_encode($output);
    }
}

?>