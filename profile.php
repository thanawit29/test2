<?php
include('navbar.php');
include('type_box.php');
$sql4="SELECT *FROM member where u_id='".$_SESSION["u_id"]."'";
$qry4=mysqli_query($conn,$sql4);
$rs4=mysqli_fetch_array($qry4);
?>
<div class="mid_box">
<div class="act_box">
        <div class="text_box"> ข้อมูลผู้ใช้ <br></div>
            <div class="text_box2">
                <span>ชื่อผู้ใช้</span>
                <input type="text" name="username" class="form-control" value="<?=$rs4["username"];?>" disabled><br>
                <span>รหัสผ่าน</span>
                <input type="password" name="password" class="form-control" value="<?=$rs4["password"];?>" disabled><br>
                <span>ชื่อจริง</span>
                <input type="text" name="u_Fname" class="form-control" value="<?=$rs4["u_Fname"];?>"  disabled><br>
                <span>นามสกุล</span>
                <input type="text" name="u_Lname" class="form-control" value="<?=$rs4["u_Lname"];?>"  disabled><br>
                <span>โทรศัพท์</span>
                <input type="text" name="u_phone" class="form-control" value="<?=$rs4["u_phone"];?>"  disabled><br>
                <span>ที่อยู่</span><br>
                <textarea name="u_address" id="" cols="30" rows="10" class="form-control" disabled><?=$rs4["u_address"];?></textarea><br>
                <span>เพศ</span>
                <input name="u_gender" id="" class="form-control" value=<?=$rs4["u_gender"];?> disabled>
                <span>อายุ</span>
                <input type="number" name="u_age" class="form-control" value="<?=$rs4["u_age"];?>" disabled><br>
                <a href="edit_profile.php?u_id=<?=$rs4["u_id"];?>" class="btn btn-danger" >แก้ไข</a>
            </div>
    </div>
</div>