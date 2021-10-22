<?php
include './header.php';
?>

<main>
    <a href="add.php" class="btn btn-success"> Thêm</a>
    
    <table class="table">
        <thead>
            <tr class="table-dark">
                <th scope="col">Mã</th>
                <th scope="col">tên bài thi</th>
                <th scope="col">Ngày thi</th>
                <th scope="col">Thời gian làm bài</th>
                <th scope="col">Số câu hỏi</th>
                <th scope="col">điểm</th>
                <th scope="col">ngày tạo</th>
                <th scope="col">trạng thái</th>
                <th scope="col">mã truy cập</th>
                <th scope="col">chi tiết</th>
                
            </tr>
        </thead>
        <tbody>
            
            <?php
            
            include "./config.php";
            $sql = "SELECT `id`, `exam_title`, `exam_datetime`, `duration`, `total_question`, `marks_per_right_answer`, `created_on`, `status`, `exam_code` FROM `exams`";

            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <td scope="row"><?php echo $row['id']; ?> </td>
                        <td><?php echo $row['exam_title']; ?></td>
                        <td><?php echo $row['exam_datetime']; ?></td>
                        <td><?php echo $row['duration']; ?></td>
                        <td><?php echo $row['total_question']; ?></td>
                        <td><?php echo $row['marks_per_right_answer']; ?></td>
                        <td><?php echo $row['created_on']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><?php echo $row['exam_code']; ?></td>
                        <td><a href="view.php?id=<?php echo $row['id']; ?>">chi tiết</i></a></td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</main>