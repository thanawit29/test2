<?php
include('navbar.php');
include('type_box.php');
$sql4="SELECT *FROM act where act_id='".$_GET["act_id"]."'";
$qry4=mysqli_query($conn,$sql4);
$rs4=mysqli_fetch_array($qry4);
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
            <a href="act_register.php?act_id=<?=$rs4["act_id"];?>" class="btn btn-success">ลงทะเบียน</a>
            <a href="index.php" class="btn btn-danger">ย้อนกลับ</a>
            
        </div>
        </a>
    </div>
</div>