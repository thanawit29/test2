<?php
include('db.php');
$sql4="INSERT INTO act_register (reg_date,reg_name,reg_phone,act_id,u_id) values ('".date("Y-m-d H:i:s")."','".$_POST["reg_name"]."','".$_POST["reg_phone"]."','".$_POST["act_id"]."','".$_SESSION["u_id"]."')";
$qry4=mysqli_query($conn,$sql4);
$sql5="UPDATE act set act_count=act_count+1 where act_id='".$_POST["act_id"]."'";
$qry5=mysqli_query($conn,$sql5);
echo "<script>";
echo "alert('ลงทะเบียนสำเร็จ');";
echo "window.location='history.php'";
echo "</script>";
?>