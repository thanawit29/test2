<?php
include('navbar.php');
include('type_box.php');
$sql3="SELECT *FROM act_register where u_id='".$_SESSION["u_id"]."'";
$qry3=mysqli_query($conn,$sql3);
if($_SESSION["u_id"]){}
else{
    echo "<script>";
    echo "alert('กรุณาเข้าสู่ระบบก่อน');";
    echo "window.location='login.php'";
    echo "</script>";
}
?>
<div class="mid_box">
    <div class="act_box">
    <table class="table">
        <tr>
            <td>รูปกิจกรรม</td>
            <td>เวลา</td>
            <td>ชื่อกิจกรรม</td>
            <td>ชื่อจริง</td>
            <td>เบอร์โทร</td>
            <td>ลบ</td>
        </tr>
        <?php
        while($rs3=mysqli_fetch_array($qry3)){
        $sql4="SELECT *FROM act where act_id='".$rs3["act_id"]."'";
        $qry4=mysqli_query($conn,$sql4);
        $rs4=mysqli_fetch_array($qry4);
        ?>
        <tr>
            <td><img src="img/<?=$rs4["act_img"];?>" alt="" width="100%"></td>
            <td><?=$rs3["reg_date"];?></td>
            <td><?=$rs4["act_name"];?></td>
            <td><?=$rs3["reg_name"];?></td>
            <td><?=$rs3["reg_phone"];?></td>
            <td><a href="cancel_reg.php?reg_id=<?=$rs3["reg_id"];?>" class="btn btn-danger">ยกเลิก</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    </div>
</div>