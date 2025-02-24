<?php
include('db.php');
$sql="SELECT * FROM member where username='".mysqli_real_escape_string($conn,$_POST["username"])."'";
$qry=mysqli_query($conn,$sql);
$rs=mysqli_fetch_array($qry);
if(!$rs){
    $sql="INSERT INTO member(username,password,u_Fname,u_Lname,u_phone,u_address,u_gender,u_age) values
    ('".$_POST["username"]."',
    '".$_POST["password"]."',
    '".$_POST["u_Fname"]."',
    '".$_POST["u_Lname"]."',
    '".$_POST["u_phone"]."',
    '".$_POST["u_address"]."',
    '".$_POST["u_gender"]."',
    '".$_POST["u_age"]."')";
    $qry=mysqli_query($conn,$sql);
    if($qry){
        echo "<script>";
        echo "alert('สมัครสมาชิกสำเร็จ');";
        echo "window.location='login.php'";
        echo "</script>";
    }else{ 
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='register.php'";
        echo "</script>";
    }
}else{    
    echo "<script>";
    echo "alert('มีชื่อบัญชีผู้ใช้นี้แล้ว');";
    echo "window.location='register.php'";
    echo "</script>";
}

?>