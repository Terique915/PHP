<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<style>

</style>
<table border="1">


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

$query ="SELECT * FROM cursist";
$stmt= $conn->prepare($query) or die("ERROR 1");
$stmt->execute() or die("ERROR 2");

while ($row =$stmt->fetch()){
    echo "<tr>";
    echo "<td>". $row['cursistnr']."</td>";
    echo "<td>". $row['naam']."</td>";
    echo "<td>". $row['roepnaam']."</td>";
    echo "<td>". $row['straat']."</td>";
    echo "<td>". $row['postcode']."</td>";
    echo "<td>". $row['plaats']."</td>";
    echo "<td>". $row['geslacht']."</td>";
    echo "<td>". $row['geb_datum']."</td>";

    echo "</tr>";
}
?>

</table>
</body>