<?php
include('db.php');
if ($_SESSION["u_id"]) {
    if ($_SESSION["u_level"] == "admin") {
        $sql = "SELECT * FROM inbox ORDER BY in_id DESC";
    } else {
        $sql = "SELECT * FROM inbox WHERE u_id = '" . $_SESSION["u_id"] . "' OR u_level = 'admin' ORDER BY in_id DESC";
    }
}
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