<?php
include('style.php');
?>
<div class="mid_box" style="width:25%">
    <div class="act_box">
        <div class="text_box"style="text-align:center; font-center:30px;">KKWIND CARE <br>
        เข้าสู่ระบบ</div>
            <div class="text_box2" style="margin-left:30px;">
            <form action="log_check.php" method="post">
                <span>ชื่อผู้ใช้</span>
                <input type="text" name="username" class="form-control" style="width:90%" placeholder="โปรดกรอกชื่อผู้ใช้" required><br>
                <span>รหัสผ่าน</span>
                <input type="password" name="password" class="form-control" style="width:90%" placeholder="โปรดกรอกรหัสผ่าน" required><br>
                <input type="submit" value="เข้าสู่ระบบ" class="btn btn" style="width:90%; height:50px; background-color:1d9bf0; color:fff; font-size:20px;"  >
                <a href="index.php" class="btn btn-danger" style="width:90%; height:50px; margin-top:10px; font-size:20px;">ย้อนกลับ</a>
                <a href="register.php" class="btn btn" style="width:90%; margin-top:10px;">สมัครสมาชิก</a>
            </form>            
            </div>
    </div>
</div>