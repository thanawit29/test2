<?php
include('db.php');
$sql="SELECT * FROM act_register where reg_id='".$_GET["reg_id"]."'";
$qry=mysqli_query($conn,$sql);
$rs=mysqli_fetch_array($qry);
$act_id=$rs["act_id"];
$sql2="DELETE FROM act_register where reg_id='".$_GET["reg_id"]."'";
$qry2=mysqli_query($conn,$sql2);
$sql3="UPDATE act set act_count=act_count-1 where act_id='$act_id'";
$qry3=mysqli_query($conn,$sql3);
echo "<script>";
echo "alert('ยกเลิกลงทะเบียนสำเร็จ');";
echo "window.location='history.php'";
echo "</script>";
?>