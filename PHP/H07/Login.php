<?php


session_start();
$servername = "localhost";
$username = "id13241015_schoolphp";
$password = "Soloboy2355%xbox";
$dbname = "id13241015_schoolphp";

try {
    $conn = new PDO("mysql:host=$servername; port=3308; dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if (isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}
if (isset($_POST['knop'])) {
    $usernaam = $_POST["usernaam"];
    $pass = $_POST["pwd"];
    $query = "SELECT name, level FROM loginrol WHERE name = '$usernaam'AND password = '$pass' ";
    $Results = $conn->query($query);

    while ($row = $Results->fetch()) {
        echo $row['name'];echo"  "; echo $row['level'] ;

        if ($usernaam == $row['name'] && $_POST['pwd'] == $pass) {
            $result =true;


        }
        else{
            echo "onjuist gegevens";
        }
    }



}



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1></h1>
<form action="<?php echo  $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" name= "usernaam" id="usernaam" value="">
    <input type= "password" name="pwd" value="">
    <input type="submit" name="knop" value="login">
</form>
<p><a href="website.php">Website</p>
<p><a href="admin.php">Admin Website</p>
<p><a href="Login.php?loguit">Uitloggen </p>
</body>
</html>