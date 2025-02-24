<?php
include('db.php');
$n_id=$_POST["n_id"];
$sql="SELECT * FROM member where u_id='".$_SESSION["u_id"]."'";
$qry=mysqli_query($conn,$sql);
$rs=mysqli_fetch_array($qry);
$sql2="INSERT INTO comment (c_content,n_id,c_sender) values ('".$_POST["c_content"]."','".$_POST["n_id"]."','".$rs["u_Fname"]."')";
$qry2=mysqli_query($conn,$sql2);
        echo "<script>";
        echo "window.location='news_detail.php?n_id=$n_id'";
        echo "</script>";
?>