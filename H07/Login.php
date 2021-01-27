<?php
  $users = array(
      "Terique" => "1234",
      "Joey" => "1235"


  );
  if (isset($_POST['knop'])
      && isset($users[$_POST['username']])
      && ($users[$_POST["username"]] == $_POST['pwd'])){
      $_SESSION["user"] = $_POST["username"];
      $message = "Welcome";
  }
  else{
    $message ="Inloggen";
  }
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
<p><a href="H07/website.php">Website</p>
</body>
</html>