<?php
include('navbar.php');
if(!$_SESSION["u_id"]){
    echo "<script>";
    echo "alert('กรุณาเข้าสู่ระบบก่อน');";
    echo "window.location='index.php'";
    echo "</script>";
}

if ($_SESSION["u_id"]) {
    if ($_SESSION["u_level"] == "admin") {
        $sql3 = "SELECT * FROM inbox ORDER BY in_id DESC";
    } else {
        $sql3 = "SELECT * FROM inbox WHERE u_id = '" . $_SESSION["u_id"] . "' OR u_level = 'admin' ORDER BY in_id DESC";
    }
    $qry3 = mysqli_query($conn, $sql3);
}

$sql4 = "SELECT * FROM member where u_id='".$_SESSION["u_id"]."'";
$qry4 = mysqli_query($conn, $sql4);
$rs4 = mysqli_fetch_array($qry4);
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="content_">
    <div class="text_box">กระดานสนทนา</div>

    <?php if ($_SESSION["u_id"]) { ?>
        <form action="send_message.php" method="post">
            <textarea name="in_chat" class="form-control" id="" cols="30" rows="10" required></textarea><br>
            <input type="hidden" name="in_name" value="<?= $rs4["u_Fname"]; ?>">
            <input type="hidden" name="u_id" value="<?= $_SESSION["u_id"]; ?>">
            <input type="hidden" name="u_level" value="<?= $_SESSION["u_level"]; ?>">
            <input type="submit" value="ยืนยัน" class="btn btn-success">
            &nbsp; <a href="index.php" class="btn btn-danger">ย้อนกลับ</a>
        </form>
    <?php } ?>

    <table class="table" bgcolor="white">
        <tr>
            <th>ชื่อ</th>
            <th>สนทนา</th>
            <th>วันที่</th>
        </tr>
        <tbody id="result"> <!-- ตั้ง id เป็น "result" เพื่ออัพเดตข้อมูล -->
            <?php
            $i = 1;
            while ($rs3 = mysqli_fetch_array($qry3)) {
            ?>
            <tr>
                <td><?= $rs3["in_name"]; ?></td>
                <td width="60%"><?= $rs3["in_chat"]; ?></td>
                <td><?= $rs3["in_date"]; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
<script>
$(document).ready(function() {
    // ฟังก์ชันสำหรับดึงข้อมูล
    function fetchData() {
        $.ajax({
            url: "in_conn.php",
            type: "GET",
            dataType: "json", // ตรวจสอบตรงนี้ ต้องเป็น "json"
            success: function(data) {
                // แสดงหรืออัพเดตข้อมูลใน div ที่มี id="result"
                var resultHtml = "";
                $.each(data, function(index, item) {
                    resultHtml += '<tr><td>' + item.in_name + '</td>';
                    resultHtml += '<td width="60%">' + item.in_chat + '</td>';
                    resultHtml += '<td>' + item.in_date + '</td></tr>';
                });
                $("#result").html(resultHtml);
            },
            error: function(error) {
                // จัดการข้อผิดพลาด (ถ้ามี)
                console.log("เกิดข้อผิดพลาด: " + error);
            }
        });
    }

    // ตั้งเวลาในการดึงข้อมูลทุกๆ 1 วินาที
    setInterval(fetchData, 500);
});
</script>
    </table>
</div>

