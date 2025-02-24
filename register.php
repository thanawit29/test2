<?php
include('style.php');
?>
<div class="mid_box" style="width:35%">
    <div class="act_box">
        <div class="text_box"style="text-align:center; font-center:30px;">KKWIND CARE <br>
        สมัครสมาชิก</div>
            <div class="text_box2" style="margin-left:30px;">
            <form action="reg_check.php" method="post">
                <span>ชื่อผู้ใช้</span>
                <input type="text" name="username" class="form-control" style="width:80%" placeholder="ภาษาอังกฤษเท่านั้น" required><br>
                <span>รหัสผ่าน</span>
                <input type="password" name="password" class="form-control" style="width:80%" required><br>
                <span>ชื่อจริง</span>
                <input type="text" name="u_Fname" class="form-control" style="width:80%"  required><br>
                <span>นามสกุล</span>
                <input type="text" name="u_Lname" class="form-control" style="width:80%"  required><br>
                <span>โทรศัพท์</span>
                <input type="text" name="u_phone" class="form-control" style="width:80%" minlength="10" maxlength="10" placeholder="ตัวเลข 10 หลัก เช่น 0855555555"  required><br>
                <span>ที่อยู่</span><br>
                <textarea name="u_address" id="" cols="30" rows="10" class="form-control" style="width:80%"></textarea><br>
                <span>เพศ</span>
                <select name="u_gender" id="" class="form-control" style="width:40%">
                    <option value="ชาย">ชาย</option>
                    <option value="หญิง">หญิง</option>
                    <option value="อื่นๆ">อื่นๆ</option>
                </select><br>
                <span>อายุ</span>
                <input type="number" name="u_age" class="form-control" style="width:40%"><br>
                <input type="submit" value="สมัครสมาชิก" class="btn btn" style="width:90%; height:50px; background-color:1d9bf0; color:fff; font-size:20px;"  >
                <a href="index.php" class="btn btn-danger" style="width:90%; height:50px; margin-top:10px; font-size:20px;">ย้อนกลับ</a>
                <a href="login.php" class="btn btn" style="width:90%; margin-top:10px;">เข้าสู่ระบบ</a>
            </form>            
            </div>
    </div>
</div>