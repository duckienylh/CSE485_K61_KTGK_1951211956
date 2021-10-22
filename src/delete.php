<?php

include './config.php';
$id = $_GET['id'];
    // Bước 02:
    
    $sql = "DELETE FROM `exams` WHERE id = '$id'";

    echo $sql;
    $result = mysqli_query($conn,$sql);
    // Bước 03:
    if($result > 0){
        header("Location:index.php");
    }else{
        header("Location:error.php");
    }


    //Bước 04: Đóng kết nối
    mysqli_close($conn);

   
?>