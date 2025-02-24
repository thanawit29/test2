<?php
include('db.php');
// Include your database connection code here

if (isset($_GET['comment_id'])) {
    $commentId = $_GET['comment_id'];

    // Query to get the full comment based on comment_id
    $sql = "SELECT c_content FROM comment WHERE c_id = $commentId";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo $row['c_content']; // Return the full comment content
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
