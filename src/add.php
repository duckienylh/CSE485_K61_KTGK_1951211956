<?php
include './header.php';
include './config.php';
?>

<main class="container">
    <h2>Thêm thông tin </h2>

    <form method="post">
        <div class="form-group row">
            <label for="empName" class="col-sm-2 col-form-label">Mã</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ex-id">
            </div>
        </div>
        <div class="form-group row">
            <label for="empPosition" class="col-sm-2 col-form-label">tên bài thi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ex-title">
            </div>
        </div>
        <div class="form-group row">
            <label for="empEmail" class="col-sm-2 col-form-label">Ngày thi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ex-datetime">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">Thời gian làm bài</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ex-dur">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">số câu hỏi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ex-ques">
            </div>
        </div>

        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">điểm</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ex-marks">
            </div>
        </div>

        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">trạng thái</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ex-status">
            </div>
        </div>

        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">mã truy cập</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ex-code">
            </div>
        </div>

        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" name="btnsubmit" class="btn btn-success">add</button>
            </div>
        </div>
</main>
<?php
if (isset($_POST['btnsubmit'])) {

    $id = $_POST['ex-id'];
    $title = $_POST['ex-title'];
    $datetime = $_POST['ex-datetime'];
    $duration = $_POST['ex-dur'];
    $total_question = $_POST['ex-ques'];
    $marks_answer = $_POST['ex-marks'];
    $status = $_POST['ex-status'];
    $code = $_POST['ex-code'];

    $sql = "INSERT INTO `exams`(`id`, `exam_title`, `exam_datetime`, `duration`, `total_question`, `marks_per_right_answer`, `status`, `exam_code`) 
    VALUES ('$id','$title','$datetime','$duration','$total_question','$marks_answer','$status','$code')";

    echo $sql;
    $result = mysqli_query($conn, $sql);

    if ($result > 0) {
        header("Location:index.php");
    } else {
        echo "Lỗi!";
    }
    //Bước 04: Đóng kết nối
    mysqli_close($conn);
}

?>
<?php
include "./footer.php";
?>