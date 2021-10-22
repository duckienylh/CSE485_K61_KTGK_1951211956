<?php
include './header.php';
$id = $_GET['id'];
include "./config.php";




?>

<main class="container">
    <h2>sửa thông tin </h2>


    

        <?php
        $sql = "SELECT `id`, `exam_title`, `exam_datetime`, `duration`, `total_question`, `marks_per_right_answer`, `created_on`, `status`, `exam_code` FROM `exams` WHERE id = '$id'";


        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <form method="post">
                    <!-- <div class="form-group row">
                        <label for="empName" class="col-sm-2 col-form-label">Mã</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ex-id" value="<?php //echo $row['id']; ?>">
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label for="empPosition" class="col-sm-2 col-form-label">tên bài thi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ex-title" value="<?php echo $row['exam_title']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="empEmail" class="col-sm-2 col-form-label">Ngày thi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ex-datetime" value="<?php echo $row['exam_datetime']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="empMobile" class="col-sm-2 col-form-label">Thời gian làm bài</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ex-dur" value="<?php echo $row['duration']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="empMobile" class="col-sm-2 col-form-label">số câu hỏi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ex-ques" value="<?php echo $row['total_question']; ?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="empMobile" class="col-sm-2 col-form-label">điểm</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ex-marks" value="<?php echo $row['marks_per_right_answer']; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="empMobile" class="col-sm-2 col-form-label">trạng thái</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ex-status" value="<?php echo $row['status']; ?>">
                        </div>
                    </div>

                    <!-- <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Trạng thái</label>
        <div class="col-sm-10">
            <select name="ex-status">
                <option value="Pending">Pending</option>
                <option value="Created">Created</option>
                <option value="Started">Started</option>
                <option value="Completed">Completed</option>
            </select>
        </div>
    </div> -->

                    <div class="form-group row">
                        <label for="empMobile" class="col-sm-2 col-form-label">mã truy cập</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ex-code" value="<?php echo $row['exam_code']; ?>">
                        </div>
                    </div>
                    


            <?php
            }
        }
            ?>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" name="btnupdate" class="btn btn-success">update</button>
                </div>
            </div>

    
</main>
<?php

if(isset($_POST['btnupdate']))
    {
        
        $title = $_POST['ex-title'];
        $datetime = $_POST['ex-datetime'];
        $duration = $_POST['ex-dur'];
        $total_question = $_POST['ex-ques'];
        $marks_answer = $_POST['ex-marks'];

        $status = $_POST['ex-status'];
        $code = $_POST['ex-code'];
        

        $sql2 = "UPDATE `exams` SET `exam_title`='$title',`exam_datetime`='$datetime',`duration`='$duration',`total_question`='$total_question',`marks_per_right_answer`='$marks_answer',`status`='$status',`exam_code`='$code' 
        WHERE id = '$id' ";
        
    $result = mysqli_query($conn, $sql2);
    if ($result > 0) {
        
        header("Location:index.php");
    } else {
        header("Location:error.php");
    }
    }
?>

<?php
include "./footer.php";
?>