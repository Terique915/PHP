<?php
$email = $_POST["email"];
$pass= $_POST["password"];


$servername = "localhost";
$username = "id13241015_schoolphp";
$password = "Soloboy2355%xbox";
$dbname = "id13241015_schoolphp";

try {
    $conn = new PDO("mysql:host=$servername; port=3308; dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$query= ("SELECT email, password FROM logindb WHERE email = '$email' AND  password = '$pass'");
$Results= $conn->query($query);
$Results->execute() or die("ERROR 2");


while($row = $Results->fetch()) {
    if ($_POST['email'] == $email && $_POST['password'] == $pass) {
        $result = true;
        echo "WELCOME";
        break 1;
    }

}














    



