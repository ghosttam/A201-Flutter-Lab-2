<?php
    error_reporting(0);
    include_once("dbconnect.php");
    $email = $_GET['email'];
    $otp = $_GET['key'];
    
    $sql = "SELECT * FROM MERCHANT WHERE EMAIL = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $sqlupdate = "UPDATE MERCHANT SET OTP = '1' WHERE EMAIL = '$email' AND OTP = '$otp'";
        if ($conn->query($sqlupdate) === TRUE){
            echo 'success';
        }else{
            echo 'failed';
        }   
    }else{
        echo "failed";
    }
    
    
?>