<?php
include('db.php');
$sql="SELECT * FROM member where u_id='".$_SESSION["u_id"]."'";
$qry=mysqli_query($conn,$sql);
$rs=mysqli_fetch_array($qry);

$sql2="INSERT INTO webboard (wb_content,wb_date,wb_sender,u_id) values ('".$_POST["wb_content"]."','".date("Y-m-d H:i:s")."','".$_POST["wb_sender"]."','".$_POST["u_id"]."')";
$qry2=mysqli_query($conn,$sql2);
        echo "<script>";
        echo "window.location='webboard.php'";
        echo "</script>";
?>