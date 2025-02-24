<?php
include('navbar.php');
include('type_box.php');
$sql3 = "SELECT * FROM news where n_id='" . $_GET["n_id"] . "'";
$qry3 = mysqli_query($conn, $sql3);
$rs3 = mysqli_fetch_array($qry3);
$nview = $rs3["n_view"] + 1;
$sql4 = "UPDATE news set n_view='$nview' where n_id='" . $rs3["n_id"] . "'";
$qry4 = mysqli_query($conn, $sql4);
$sql5 = "SELECT * FROM comment where n_id='" . $rs3["n_id"] . "'";
$qry5 = mysqli_query($conn, $sql5);
?>
<div class="mid_box">
    <div class="act_box">
        <div class="img_box">
            <img src="img/<?=$rs3["n_img"];?>" alt="" width="100%" height="300px">
        </div><br>
        <div class="text_box">
            <?=$rs3["n_name"];?>  
        </div>
        <div class="text_box2">
        <?=$rs3["n_description"];?><br><br>
        
            วันที่ : <?=$rs3["n_date"];?><br>
            ผู้เข้าชม : <?=$nview?> คน <br><br>

    <a onclick="window.history.back()" href="#" class="btn btn-secondary">กลับ</a>
                    
        </div>
    </div>
    <div class="act_box" style="padding:1%; ">
                        <div class="card-body" style="margin-top:2%; margin-left:-2%">
                        <form action="save_comment.php" method="post">
                            <div class="input-group">
                                <input type="text" name="c_content" required id="" class="form-control mx-2" placeholder="แสดงความคิดเห็น">
                                <input type="hidden" name="n_id" value="<?= $rs3["n_id"]; ?>">
                                <button type="submit" class="btn btn-outline-primary">ส่ง</button>
                            </div>
                        </form>
                        </div>
                        <?php
            while ($rs5 = mysqli_fetch_array($qry5)) {
            ?>
                <tr>
                <div class="card-body" style="width:100%; background-color:lightgrey; border-radius:15px; padding:10px;">
                    <b><?= $rs5["c_sender"]; ?></b><br>
                    <?= $rs5["c_content"]; ?><tr></tr>
                </div><br>
                </tr>
            <?php
            }
            ?>
                    </div>
</div>