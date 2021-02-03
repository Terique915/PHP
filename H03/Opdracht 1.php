<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage</title>

</head>
<body>
<?php
    for ($i = 1; $i <=10; $i++){
        echo "<img src='img/dog". $i .".jpg'>";
    }
?>
</body>
</html>