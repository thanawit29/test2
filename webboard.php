<?php
include('navbar.php');
if($_SESSION["u_id"]){
}else{
    echo "<script>";
    echo "alert('กรุณาเข้าสู่ระบบก่อน');";
    echo "window.location='index.php'";
    echo "</script>";
}
$sql3="SELECT * FROM webboard where wb_id ORDER BY wb_id DESC";
$qry3=mysqli_query($conn,$sql3);
$sql4 = "SELECT * FROM member where u_id='".$_SESSION["u_id"]."'";
$qry4 = mysqli_query($conn, $sql4);
$rs4=mysqli_fetch_array($qry4);
$sql5 = "SELECT * FROM webboard where u_id='" . $rs4["u_id"] . "'";
$qry5 = mysqli_query($conn, $sql5);
$rs5=mysqli_fetch_array($qry5);
?>

<div class="content_">
<div class="text_box">กระดานสนทนา</div>
            <?php
            if ($_SESSION["u_id"]) {
            ?>
                <form action="save_webboard.php" method="post">
                    <textarea name="wb_content" class="form-control" id="" cols="30" rows="10"  required></textarea><br>

                    <input type="hidden" name="wb_sender" value="<?= $rs4["u_Fname"]; ?>">
                    <input type="hidden" name="u_id" value="<?= $rs4["u_id"]; ?>">
                    <input type="submit" value="ยืนยัน" class="btn btn-success">
                    &nbsp; <a href="index.php" class="btn btn-danger" >ย้อนกลับ</a>
                </form>
            <?php
            }
            ?>
            
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
            <td><?= $rs3["wb_sender"]; ?></td>
            <td width="60%"><?= $rs3["wb_content"]; ?></td>
            <td><?= $rs3["wb_date"]; ?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // ฟังก์ชันสำหรับดึงข้อมูล
    function fetchData() {
        $.ajax({
            url: "wb_conn.php",
            type: "GET",
            dataType: "json", // ตรวจสอบตรงนี้ ต้องเป็น "json"
            success: function(data) {
                // แสดงหรืออัพเดตข้อมูลใน div ที่มี id="result"
                var resultHtml = "";
                $.each(data, function(index, item) {
                    resultHtml += '<tr><td>' + item.wb_sender + '</td>';
                    resultHtml += '<td width="60%">' + item.wb_content + '</td>';
                    resultHtml += '<td>' + item.wb_date + '</td></tr>';
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