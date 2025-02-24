<?php
include('db.php');
$sql="SELECT * FROM member where username='".mysqli_real_escape_string($conn,$_POST["username"])."' AND password='".mysqli_real_escape_string($conn,$_POST["password"])."' ";
$qry=mysqli_query($conn,$sql);
$rs=mysqli_fetch_array($qry);
if($rs){
    $_SESSION["u_id"]=$rs["u_id"];
    $_SESSION["u_level"]=$rs["u_level"];
    if($rs["u_level"]=="admin"){
        echo "<script>";
        echo "alert('ยินดีต้อนรับแอดมิน');";
        echo "window.location='admin/member.php'";
        echo "</script>";
    }else{ 
        echo "<script>";
        echo "alert('เข้าสู่ระบบแล้ว');";
        echo "window.location='index.php'";
        echo "</script>";
    }
}else{    
    echo "<script>";
    echo "alert('ชื่อผู้ใช้หรือรหัสผ่านผิด');";
    echo "window.location='login.php'";
    echo "</script>";
}

?>