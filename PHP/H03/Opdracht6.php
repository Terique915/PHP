
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table{
            border: 6px;
        }
        img{
            width: 40px;
        }

    </style>
</head>
<body>
<table>
<?php
$zwemclubs = array(
    " De spartelkuikens" => 25,
    "De waterbuffels"   => 32,
    "Plonsmderin"       =>11,
    "Bommetje"          =>23

);

foreach ($zwemclubs as $clubnaam => $zwemmers){
    echo "<tr>";

    echo "<td>$clubnaam</td>";

    echo "<td>$zwemmers</td>";

    echo '<td>';
    $plaatjes = floor($zwemmers/5);
    for ($i = 0; $i < $plaatjes ; $i ++){
        echo "<img src='img/zwemmen.png'>";
    }
    echo '</td>';

    echo '</tr>';
}

?>
</table>
</body>
</html>
