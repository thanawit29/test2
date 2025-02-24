<?php
include('db.php');
// คำสั่ง SQL ในการดึงข้อมูล (ตัวอย่าง)
$sql = "SELECT * FROM webboard ORDER BY wb_id DESC";

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
