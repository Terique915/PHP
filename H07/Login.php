<?php
 session_start();
  $users = array(
     "Terique" => array("pwd" => "1234", "rol" => "Admin"),
      "Eren" => array("pwd" => "1235", "rol" => "Gebruiker")

  );

  if (isset($_GET["loguit"])){
      $_SESSION = array();
      session_destroy();
  }

  if (isset($_POST['knop'])
      && isset($users[$_POST['username']])
      && $users[$_POST["username"]]["pwd"]== $_POST['pwd']){
      $_SESSION["user"] = array("naam"=>$_POST['username'],
                                "pwd"=> $users[$_POST['username']]['pwd'],
                                "rol"=>$users[$_POST['username']]['rol']
       );
      $message = "Welcome ". $_SESSION["user"]["naam"]. " met de rol ".  $_SESSION["user"]["rol"] ;
  }
  else{
    $message ="Login";
  }
  print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1><?php echo $message; ?></h1>
<form action="<?php echo  $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" name= "username" value="">
    <input type= "password" name="pwd" value="">
    <input type="submit" name="knop" value="login">
</form>
<p><a href="website.php">Website</p>
<p><a href="admin.php">Admin Website</p>
<p><a href="Login.php?loguit">Uitloggen </p>
</body>
</html>