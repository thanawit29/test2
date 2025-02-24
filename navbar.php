<?php
include('style.php');
$sql="SELECT *FROM member where u_id='".$_SESSION["u_id"]."'";
$qry=mysqli_query($conn,$sql);
$rs=mysqli_fetch_array($qry);
?>
<div class="navbar_ fixed-top shadow-sm">
    <a href="index.php">
        <div class="menu_">หน้าแรก</div>
    </a>
    <a href="act_search.php">
        <div class="menu_">ค้นหา</div>
    </a>
    <a href="history.php">
        <div class="menu_">ประวัติ</div>
    </a>
    <a href="webboard.php">
        <div class="menu_">webboard</div>
    </a>
    <?php
    if($rs){
    ?>
    <a href="profile.php">
        <div class="menu_"><?=$rs["u_Fname"];?></div>
    </a>
    <a href="logout.php">
        <div class="menu_" style="float:right; margin-left:-8%;">ออกจากระบบ</div>
    </a>
    <?php
    if($_SESSION["u_level"]=="admin"){
    ?>
    <a href="admin/member.php">
        <div class="menu_" style="float:right; margin-right:8%; margin-left:-18%;">จัดการหลังบ้าน</div>
    </a>
    <?php
    }else{
    }
}else{
    ?>
    <a href="login.php">
        <div class="menu_">เข้าสู่ระบบ</div>
    </a>
    <?php
    }
    ?>
</div>
<div class="left_box">
    <div class="sidebar_">
        <?php
        if($rs){
        ?>
        <div class="menu2_">
            <a href="profile.php" style="font-size:24px;"><?=$rs["u_Fname"];?></a>
        </div>
        <?php
        }else{
        ?>
        <div class="menu2_">
            <a href="login.php" style="font-size:24px;">โปรดเข้าสู่ระบบก่อน</a>
        </div>
        <?php
        }
        ?>
    <a href="index.php">
        <div class="menu2_">หน้าแรก</div>
    </a>
    <a href="news.php">
        <div class="menu2_">ข่าวสาร</div>
    </a>
    <a href="activity.php">
        <div class="menu2_">กิจกรรม</div>
    </a>
    <a href="act_search.php">
        <div class="menu2_">ค้นหา</div>
    </a>
    <a href="history.php">
        <div class="menu2_">ประวัติ</div>
    </a>
    <a href="ques.php">
        <div class="menu2_">แบบประเมิน</div>
    </a>
    <a href="inbox.php">
        <div class="menu2_">ติดต่อเรา</div>
    </a>
    </div>
</div>