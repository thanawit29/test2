<?php
include('db.php');
echo "<script>";
    echo "alert('ออกจากระบบแล้ว');";
    echo "window.location='index.php'";
    echo "</script>";
session_destroy();
?>