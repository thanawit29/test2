<?php
include('navbar.php');
include('type_box.php');

// ดึงข้อมูลข่าว
$sql3 = "SELECT * FROM news WHERE n_id='" . $_GET["n_id"] . "'";
$qry3 = mysqli_query($conn, $sql3);
$rs3 = mysqli_fetch_array($qry3);

// เพิ่มจำนวนผู้เข้าชม
$nview = $rs3["n_view"] + 1;
$sql4 = "UPDATE news SET n_view='$nview' WHERE n_id='" . $rs3["n_id"] . "'";
$qry4 = mysqli_query($conn, $sql4);

// ดึงข้อมูลความคิดเห็น
$sql5 = "SELECT * FROM comment WHERE n_id='" . $rs3["n_id"] . "'";
$qry5 = mysqli_query($conn, $sql5);

// ฟังก์ชันตัดข้อความ
function truncateText($text, $limit = 30) {
    $text = trim($text);
    if (mb_strlen($text, 'UTF-8') > $limit) {
        $text = mb_substr($text, 0, $limit, 'UTF-8');
        $last_space = mb_strrpos($text, ' ', 0, 'UTF-8');
        if ($last_space !== false) {
            $text = mb_substr($text, 0, $last_space, 'UTF-8');
        }
        $text .= '...';
    }
    return $text;
}
?>
<div class="mid_box">
    <div class="act_box">
        <div class="img_box">
            <img src="img/<?= $rs3["n_img"]; ?>" alt="" width="100%" height="300px">
        </div><br>
        <div class="text_box">
            <?= $rs3["n_name"]; ?>
        </div>
        <div class="text_box2">
            <?= $rs3["n_description"]; ?><br><br>

            วันที่ : <?= $rs3["n_date"]; ?><br>
            ผู้เข้าชม : <?= $nview ?> คน <br><br>

            <a onclick="window.history.back()" href="#" class="btn btn-secondary">กลับ</a>

        </div>
    </div>
    <div class="act_box" style="padding:1%;">
        <div class="card-body" style="margin-top:2%; margin-left:-2%">
            <form action="save_comment.php" method="post">
                <div class="input-group">
                    <input type="text" name="c_content" required id="" class="form-control mx-2" placeholder="แสดงความคิดเห็น">
                    <input type="hidden" name="n_id" value="<?= $rs3["n_id"]; ?>">
                    <button type="submit" class="btn btn-outline-primary">ส่ง</button>
                </div>
            </form>
        </div>
        <?php while ($rs5 = mysqli_fetch_array($qry5)) { ?>
            <div class="card-body" style="width:100%; background-color:lightgrey; border-radius:15px; padding:10px;">
                <b><?= $rs5["c_sender"]; ?></b><br>
                
                <div id="comment_short_<?= $rs5['c_id']; ?>">
    <span onclick="toggleComment(<?= $rs5['c_id']; ?>)">
        <?= htmlspecialchars(truncateText($rs5["c_content"], 30)); ?>
    </span>
</div>
<div id="comment_full_<?= $rs5['c_id']; ?>" style="display: none;">
    <span onclick="toggleComment(<?= $rs5['c_id']; ?>)">
        <?= htmlspecialchars($rs5["c_content"]); ?>
    </span>
</div>




            </div><br>
        <?php } ?>
    </div>
</div>

<script>
function toggleComment(commentId) {
    var fullComment = document.getElementById("comment_full_" + commentId);
    var shortComment = document.getElementById("comment_short_" + commentId);

    if (fullComment.style.display === 'none') {
        // แสดงข้อความทั้งหมด
        fullComment.style.display = 'block';
        shortComment.style.display = 'none';
    } else {
        // แสดงข้อความที่มี limit
        fullComment.style.display = 'none';
        shortComment.style.display = 'block';
    }
}
</script>











