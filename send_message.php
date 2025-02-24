<?php
include('db.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["in_chat"];
    $userId = $_POST["u_id"];
    $userName = $_POST["in_name"];
    $currentTime = date('Y-m-d H:i:s');

    // Connect to the MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ma";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert message into the database
    $sql = "INSERT INTO inbox (in_chat, u_id, in_date, in_name) VALUES ('$message', '$userId', '$currentTime', '$userName')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location='inbox.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
