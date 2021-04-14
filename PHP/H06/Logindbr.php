<?php
$email = $_POST["email"];
$password= $_POST["password"];


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

$query ="SELECT email, password FROM logindb";
$Results= $conn->query($query);

while($row = $Results->fetch()){
    if ($_POST['email']==$email && $_POST['password']== $password){
        $result = true;
    }
    else{
        $result = false;
    }

}
if ($result == true){
    echo "WELCOME";
}
else{
    echo "SORRY, geen toegang";
}


?>
