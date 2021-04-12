<?php
$servername = "localhost";
$username = "id13241015_schoolphp";
$password = "Soloboy2355%xbox";
$dbname = "id13241015_schoolphp";

try {
    $conn = new PDO("mysql:host=$servername; port=3308; dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="" placeholder="email">
    <input type="password" name="" value="" placeholder="password">
    <input type="submit" name="" value="Login">
</form>
</body>
</html>
