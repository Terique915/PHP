<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
<?php
    for ($i = 0; $i < 30; $i++){
        for ($j=0; $j<$i; $j++){
            echo "*";
        }
        echo "*<br>";
    }
?>
</body>
</html>
