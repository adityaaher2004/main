<?php
include 'otp.php';
echo $otp.otp;
include 'index.php';
echo $otp.email;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $subject = 'GitHub Timeline Update OTP';
    $message = 'Here are your latest GitHub timeline updates:';
    $headers = 'From: adityaaher2004@gmail.com';
    ini_set('SMTP', 'localhost');
    ini_set('smtp_port', 1025);
    $client_otp = $_POST['$client_otp'];
    if ($client_otp != $otp){
        echo "Wrong OTP. Please Retry from Main Menu.";
        sleep(10);
        header('Location: index.php');
        exit();
    }
    else{
        echo "OTP validated. You will start recieving GitHub emails soon.";
        sleep(5);
        $UserIdtxt = $email . "||";
        $all_ids = explode("||", file_get_contents("user_id.txt"));
        if (!in_array($email, $all_ids)) {
            file_put_contents('subscribers.txt', $email . PHP_EOL, FILE_APPEND);
        }
        file_put_contents('subscribers.txt', $email . PHP_EOL, FILE_APPEND);
    }
}
?>