<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>GitHub Timeline Updates</title>
</head>

<body>
    <form action="process.php" method="POST">
        <input type="text" name="email" placeholder="Enter Email">
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            echo $emailErr;
        } else {
            echo "Email Confirmed: " . $email;
        }
    }
    ?>

</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>GitHub Timeline Updates</title>
</head>

<body>
    <form action="process.php" method="POST">
        
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            echo $emailErr;
        } else {
            echo "Email Confirmed: " . $email;
        }
    }
    ?>
</body>
</html>
