<?php
session_start();
include_once('../../includes/db_connect.php');

if (!isset($_SESSION['manager_id'])) {
    die(json_encode(['success' => false, 'message' => 'Unauthorized']));
}

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $review_id = mysqli_real_escape_string($connection, $_POST['id']);
    $action = mysqli_real_escape_string($connection, $_POST['action']);
    
    switch($action) {
        case 'approve':
            $query = "UPDATE review_table SET approved = 1 WHERE review_id = '$review_id'";
            break;
        case 'unapprove':
            $query = "UPDATE review_table SET approved = 0 WHERE review_id = '$review_id'";
            break;
        case 'delete':
            $query = "DELETE FROM review_table WHERE review_id = '$review_id'";
            break;
        default:
            die(json_encode(['success' => false, 'message' => 'Invalid action']));
    }
    
    if (mysqli_query($connection, $query)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => mysqli_error($connection)]);
    }
}
?>
