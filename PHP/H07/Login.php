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


if (isset($_POST["loguit"])) {
    $_SESSION = array();
    session_destroy();
}
if (isset($_POST['knop'])) {


    if (empty($_POST['usernaam'] || empty($_POST['pwd']))) {
            echo "full in required fields";
    } else {
        $query = "SELECT name, level FROM loginrol WHERE name = :name AND password = :password AND level = :level";
        $statement = $conn->prepare($query);
        $statement->execute(
            array(
                'name' => $_POST['usernaam'],
                'password' => $_POST['pwd'],
                'level' => $_POST['level']


            )
        );
        $count = $statement->rowCount();
        if ($count > 0) {

            if ($_POST['level'] == 'Admin') {
                header('location: admin.php');
            } else {
                header('location: website.php');
            }
        }
        if ($_POST['usernaam'] <> 'name') {
            echo "Wrong usernaam";
        }
        elseif ($_POST['pwd'] <>'password'){
            echo "Wrong Password";
       }



    }



}

?>

    <title>Title</title>
</head>
<body>
<h1></h1>
<form action="<?php echo  $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" name= "usernaam" id="usernaam" value="">
    <input type= "password" name="pwd" value="">
    <select name="level">
        <option>Admin</option>
        <option>Gebruiker</option>
    </select>
    <input type="submit" name="knop" value="login">
</form>

<p><a href="Login.php?loguit">Uitloggen </p>
</body>
</html>