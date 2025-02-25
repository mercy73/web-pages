<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $phonenumber = $_POST["phonenumber"];
    $password = $_POST["password"];

    
	echo '<h2>Registration Successful</h2>';
    echo '<p>Username: ' . $username . '</p>';
    echo '<p>Phone Number: ' . $phoneNumber . '</p>';
}
else
echo'INFORMATION NOT FOUND'
    ?>
    
</body>
</html>