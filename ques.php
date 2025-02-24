<?php
include('navbar.php');
include('type_box.php');
$sql6="SELECT *FROM question";
$qry6=mysqli_query($conn,$sql6);
$i=1;
if($_SESSION["u_id"]){}
else{
    echo "<script>";
    echo "alert('กรุณาเข้าสู่ระบบก่อน');";
    echo "window.location='login.php'";
    echo "</script>";
}
?>
<div class="mid_box">
    <div class="act_box">
    <h2 class="mt-3 mb-4 text-center"> แบบประเมิน</h2>

    
    <?php 
    while($rs6=mysqli_fetch_array($qry6)):
    ?>
                              <form action="save_ques.php" method="post" enctype="multipart/form-data" style="margin-left:30px;">
                                <h6 class="mb-2"><?php echo $i++ ?>. <?=$rs6["que_body"];?></h5>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answer<?php echo $rs6['que_id'] ?>" id="5_<?php echo $rs6['que_id'] ?>" value="5" required>
                                <label class="form-check-label" for="5_<?php echo $rs6['que_id'] ?>">มากที่สุด</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answer<?php echo $rs6['que_id'] ?>" id="4_<?php echo $rs6['que_id'] ?>" value="4" required>
                                <label class="form-check-label" for="4_<?php echo $rs6['que_id'] ?>">มาก</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answer<?php echo $rs6['que_id'] ?>" id="3_<?php echo $rs6['que_id'] ?>" value="3" required>
                                <label class="form-check-label" for="3_<?php echo $rs6['que_id'] ?>">ปานกลาง</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answer<?php echo $rs6['que_id'] ?>" id="2_<?php echo $rs6['que_id'] ?>" value="2" required>
                                <label class="form-check-label" for="2_<?php echo $rs6['que_id'] ?>">น้อย</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answer<?php echo $rs6['que_id'] ?>" id="1_<?php echo $rs6['que_id'] ?>" value="1" required>
                                <label class="form-check-label" for="1_<?php echo $rs6['que_id'] ?>">น้อยที่สุด</label>
                            </div>

                           
                            <?php
                            endwhile;
                            ?>
                        
                            <div class="mt-5" style="text-align:center;">
                                <input type="submit" value="บันทึกข้อมูล" class="btn btn-primary col-12" style="width:80%;">
                            </div>

                            </form>

    </div>
</div>