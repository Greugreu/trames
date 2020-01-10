<?php

require 'functions/debug.php';
/*include 'functions/functions.php';*/

$fichier = file_get_contents('./files/cars.json');

$json = json_decode($fichier, true);

$ordered = 'Name';
$sens = 'petit';
if (!empty($_GET['ordered'])) {
    $ordered = $_GET['ordered'];
}
if (!empty($_GET['michel'])) {
    $sens = $_GET['michel'];
}


foreach ($json as $cars) {
    $keys = array_keys($cars);
}

usort($json,function($a,$b) use($ordered, $sens){
    if ($a[$ordered] < $b[$ordered]) {
        if ($sens == 'petit'){
            return -1;
        } else {
            return 1;
        }
    } elseif ($a[$ordered] > $b[$ordered]) {
        if ($sens == 'petit'){
            return 1;
        } else {
            return -1;
        }
    } else {
        return 0;
    }
});

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cars</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<form action="#" method="get">
    <select name="ordered">
        <option value="Name">Name</option>
        <option value="Cylinders">Cylinders</option>
        <option value="Displacement">Displacement</option>
        <option value="Acceleration">Acceleration</option>
    </select>
    <select name="michel">
        <option value="petit">Croissant</option>
        <option value="grand">Décroissant</option>
    </select>
    <input type="submit" name="submitted" value="Go">
</form>
<table>
    <caption>Cars</caption>
    <thead>
    <?php
    $head = '<tr>';
    foreach ($keys as $key) {
        $head .= '<th>'.$key.'</th>';
    }
    $head .= '</tr>';
    echo $head;
    ?>
    </thead>
    <?php
    $col = '<tbody>';
    foreach ($json as $cars2) {
        $col .= '<tr>';
        foreach ($cars2 as $car) {
            $col .= '<td>'.$car.'</td>';
        }
        $col .= '</tr>';
    }
    $col .= '</tbody>';
    echo $col
    ?>
</table>
</body>
</html>
