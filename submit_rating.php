<?php

if(isset($_POST["action"]))
{
    if($_POST["action"] == "load_data")
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

        // Update the main query to only get approved reviews
        $query = "SELECT * FROM review_table WHERE approved = 1 ORDER BY datetime DESC";

        $result = $connect->query($query);

        while($row = $result->fetch_assoc())
        {
            $review_content[] = array(
                'user_name'     =>  $row["user_name"],
                'user_review'   =>  $row["user_review"],
                'rating'        =>  $row["user_rating"],
                'datetime'      =>  $row["datetime"]
            );

            if($row["user_rating"] == '5')
            {
                $five_star_review++;
            }
            if($row["user_rating"] == '4')
            {
                $four_star_review++;
            }
            if($row["user_rating"] == '3')
            {
                $three_star_review++;
            }
            if($row["user_rating"] == '2')
            {
                $two_star_review++;
            }
            if($row["user_rating"] == '1')
            {
                $one_star_review++;
            }

            $total_review++;
            $total_user_rating = $total_user_rating + $row["user_rating"];
        }

        $average_rating = $total_user_rating / $total_review;

        $output = array(
            'average_rating'    =>  number_format($average_rating, 1),
            'total_review'      =>  $total_review,
            'five_star_review'  =>  $five_star_review,
            'four_star_review'  =>  $four_star_review,
            'three_star_review' =>  $three_star_review,
            'two_star_review'   =>  $two_star_review,
            'one_star_review'   =>  $one_star_review,
            'review_data'       =>  $review_content
        );

        echo json_encode($output);
    }

    // When submitting a new review, set approved to 0 by default
    if($_POST["action"] == "submit_rating")
    {
        $data = array(
            ':user_name'        =>  $_POST["user_name"],
            ':user_rating'      =>  $_POST["rating_data"],
            ':user_review'      =>  $_POST["user_review"],
            ':datetime'         =>  time()
        );

        // Update the insert query to include approved column
        $query = "INSERT INTO review_table 
                 (user_name, user_rating, user_review, datetime, approved) 
                 VALUES (:user_name, :user_rating, :user_review, :datetime, 0)";

        $statement = $connect->prepare($query);
        $statement->execute($data);
        echo "Your Review & Rating Successfully Submitted. It will appear after approval.";
    }
} 