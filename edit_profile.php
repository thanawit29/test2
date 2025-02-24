<?php
include('navbar.php');
include('type_box.php');
$sql4="SELECT *FROM member where u_id='".$_SESSION["u_id"]."'";
$qry4=mysqli_query($conn,$sql4);
$rs4=mysqli_fetch_array($qry4);
?>
<div class="mid_box">
<div class="act_box">
        <div class="text_box"> แก้ไขข้อมูลผู้ใช้ <br></div>
            <div class="text_box2">
            <form action="save_editprofile.php" method="post">
                <span>ชื่อผู้ใช้</span>
                <input type="text" name="username" class="form-control" value="<?=$rs4["username"];?>" disabled><br>
                <span>รหัสผ่าน</span>
                <input type="password" name="password" class="form-control" value="<?=$rs4["password"];?>" ><br>
                <span>ชื่อจริง</span>
                <input type="text" name="u_Fname" class="form-control" value="<?=$rs4["u_Fname"];?>"  ><br>
                <span>นามสกุล</span>
                <input type="text" name="u_Lname" class="form-control" value="<?=$rs4["u_Lname"];?>"  ><br>
                <span>โทรศัพท์</span>
                <input type="text" name="u_phone" class="form-control" value="<?=$rs4["u_phone"];?>" minlength="10" maxlength="10" ><br>
                <span>ที่อยู่</span><br>
                <textarea name="u_address" id="" cols="30" rows="10" class="form-control" ><?=$rs4["u_address"];?></textarea><br>
                <span>เพศ</span>
                <select name="u_gender" id="" class="form-control" value=<?=$rs4["u_gender"];?>>
                    <option value="ชาย">ชาย</option>
                    <option value="หญิง">หญิง</option>
                    <option value="อื่นๆ">อื่นๆ</option>
                </select>
                <span style="color:red;">**ทุกการแก้ไข กรุณาเลือกข้อมูลใหม่ทุกครั้ง ขออภัยในความไม่สะดวก**</span><br><br>
                <span>อายุ</span>
                <input type="number" name="u_age" class="form-control" value=<?=$rs4["u_age"];?>><br>
                <input type="submit" value="ยืนยัน" class="btn btn-success">
                <a href="profile.php?u_id=<?=$rs4["u_id"];?>" class="btn btn-danger" >ย้อนกลับ</a>
                </form> 
            </div>
    </div>
</div>