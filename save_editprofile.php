<?php
include('db.php');
$sql4="UPDATE member set password='".$_POST["password"]."',
u_Fname='".$_POST["u_Fname"]."',
u_Lname='".$_POST["u_Lname"]."',
u_phone='".$_POST["u_phone"]."',
u_address='".$_POST["u_address"]."',
u_gender='".$_POST["u_gender"]."',
u_age='".$_POST["u_age"]."' where u_id='".$_SESSION["u_id"]."'";
$qry4=mysqli_query($conn,$sql4);
$rs4=mysqli_fetch_array($qry4);
echo "<script>";
echo "alert('แก้ไขสำเร็จ');";
echo "window.location='profile.php'";
echo "</script>";
?>