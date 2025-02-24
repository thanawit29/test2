<?php
include('navbar.php');
include('type_box.php');
$sql4="SELECT *FROM act where act_type='".$_GET["act_type"]."'";
$qry4=mysqli_query($conn,$sql4);
?>
<div class="mid_box">
<div class="act_box">
        <div class="text_box">กิจกรรม</div>
    </div>
    <?php
    while($rs4=mysqli_fetch_array($qry4)){
    ?>
    <div class="act_box">
        <a href="act_detail.php?act_id=<?=$rs4["act_id"];?>" style="color:black;">
        <div class="img_box">
            <img src="img/<?=$rs4["act_img"];?>" alt="" width="100%" height="300px">
        </div><br>
        <div class="text_box">
            <?=$rs4["act_name"];?>
        </div>
        <div class="text_box2">
            สถานที่จัด : <?=$rs4["act_location"];?><br>
            วันที่จัด : <?=$rs4["act_date"];?><br>
            ผู้เข้าร่วม : <?=$rs4["act_count"];?> คน <br><br>
            คลิกเพื่อดูรายละเอียด
        </div>
        </a>
    </div>
    <?php
    }
    ?>
</div>