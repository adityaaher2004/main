<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the email address from the form submission
    $email = $_POST['email'];
    $subject = 'GitHub Timeline Update';
    $message = 'Here are your latest GitHub timeline updates:';
    $headers = 'From: adityaaher2004@gmail.com';
    $otp = 696969;
    ini_set('SMTP', 'localhost');
    ini_set('smtp_port', 1025);

    function generateOTP(): int
    {
        return random_int(100000, 999999);
    }

    // Validate the email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: index.php');
        exit();
    } else {
        $otp = generateOTP();
        mail($email, 'OTP Verification', $otp , $headers);
        header('Location: otp.php');
        
    }
    // Save the email address to a file or database for future reference
    file_put_contents('subscribers.txt', $email . PHP_EOL, FILE_APPEND);
}
?>