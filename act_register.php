<?php
include('navbar.php');
include('type_box.php');
$sql4="SELECT *FROM act where act_id='".$_GET["act_id"]."'";
$qry4=mysqli_query($conn,$sql4);
$rs4=mysqli_fetch_array($qry4);
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
        <div class="img_box">
            <img src="img/<?=$rs4["act_img"];?>" alt="" width="100%" height="300px">
        </div><br>
        <div class="text_box">
            <?=$rs4["act_name"];?>
        </div>
        <div class="text_box2">
            <?=$rs4["act_description"];?><br><br>
            สถานที่จัด : <?=$rs4["act_location"];?><br>
            วันที่จัด : <?=$rs4["act_date"];?><br>
            ผู้เข้าร่วม : <?=$rs4["act_count"];?> คน <br><br>
        </div>
        <div class="text_box">
            กรอกข้อมูลลงทะเบียน
        </div>
        <form action="save_ActRegister.php" method="post">
            <div class="text_box2">
                <label>ชื่อจริง</label>
                <input type="text" name="reg_name" class="form-control" value="<?=$rs["u_Fname"];?>"><br>
                <label>เบอร์โทร</label>
                <input type="text" name="reg_phone" class="form-control" value="<?=$rs["u_phone"];?>"><br>
                <input type="hidden" name="act_id" value="<?=$rs4["act_id"];?>">
                <input type="submit" value="ลงทะเบียน" class="btn btn-success">
                <a href="act_detail.php?act_id=<?=$rs4["act_id"];?>" class="btn btn-danger">ย้อนกลับ</a>
            </div>
        </form>
    </div>
</div>