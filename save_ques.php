<?php 
include('db.php');
$query_ques = mysqli_query($conn, "SELECT * FROM question");

foreach($query_ques as $ques) {
    $answer = $_POST['answer'.$ques['que_id']];
    $query = mysqli_query($conn, "INSERT INTO ques_do VALUES ({$ques['que_id']},'".$_SESSION["u_id"]."','$answer')");
}

if($query) {
    echo "<script>";
    echo "alert('บันทึกสำเร็จ');";
    echo "window.location='index.php'";
    echo "</script>";
    
}else{
    echo "<script>";
    echo "alert('บันทึกไม่สำเร็จ');";
    echo "window.location='ques.php'";
    echo "</script>";
}

?>