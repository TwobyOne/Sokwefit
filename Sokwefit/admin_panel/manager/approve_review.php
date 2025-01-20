<?php
include_once('../../includes/db_connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $reviewId = $_POST['id'];
    $action = $_POST['action'];

    if ($action === 'approve') {
        $query = "UPDATE review_table SET approved = 1 WHERE review_id = ?";
    } elseif ($action === 'unapprove') {
        $query = "UPDATE review_table SET approved = 0 WHERE review_id = ?";
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid action.']);
        exit;
    }

    $stmt = $connection->prepare($query);
    if ($stmt === false) {
        echo json_encode(['success' => false, 'message' => 'Prepare failed: ' . $connection->error]);
        exit;
    }

    $stmt->bind_param("i", $reviewId);
    $success = $stmt->execute();

    if ($success) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Execute failed: ' . $stmt->error]);
    }

    $stmt->close();
}
?>
