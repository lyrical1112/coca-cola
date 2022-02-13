<?php
    $conn = mysqli_connect("localhost","ainwj","Q!w2e3r4","ainwj");

    // Check connection
    if(mysqli_connect_errno()){
        echo "MySQL 연결에 실패하였습니다 : " . mysqli_connect_error();
    }
    
?>