<?php
include('db.php');

// คำสั่ง SQL ในการดึงข้อมูลการสนทนา
$sql = "SELECT in_chat, in_name, in_date FROM inbox ORDER BY in_id DESC";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);

$conn->close();
?>
