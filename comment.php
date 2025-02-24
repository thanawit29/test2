<?php
include('style.php');
$sql="INSERT INTO `comment` (`comment_id`, `comment`) VALUES (NULL, 'ทดสอบ5');";
$qry=mysqli_query($conn,$sql);
$rs=mysqli_fetch_array($qry);
?>
<div class="mid_box" style="width:35%">
    <div class="act_box">
        <div class="text_box"style="text-align:center; font-center:30px;">ความคิดเห็น</div>
            <div class="text_box2" style="margin-left:30px;">
            <form action="save_comment.php" method="post">
                <span>ความคิดเห็น</span><br>
                <textarea name="comment" id="" cols="30" rows="10" class="form-control" style="width:90%"></textarea><br>
                <a href="index.php" class="btn btn-success" style="width:90%; height:50px; margin-top:10px; font-size:20px;">แสดงความคิดเห็น</a>
                <a href="index.php" class="btn btn" style="width:90%; margin-top:10px;">ย้อนกลับ</a>
            </form>            
            </div>
    </div>
</div>