<?php
include('style.php');
$sql4="SELECT *FROM act_type";
$qry4=mysqli_query($conn,$sql4);
?>
<div class="right_box">
    <div class="sidebar_" style="float:left; margin-left:15px;">
        <div class="menu2_" style="font-size:26px">
            ประเภทกิจกรรม
        </div>
        <?php
        while($rs4=mysqli_fetch_array($qry4)){
        ?>
        <div class="menu2_">
            <a href="act_type.php?act_type=<?=$rs4["type_name"];?>" style="color:black;">
                <?=$rs4["type_name"];?>
            </a>
        </div>
        <?php
        }
        ?>
    </div>
</div>