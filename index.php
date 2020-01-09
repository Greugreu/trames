<?php

require 'functions/debug.php';

$fichier = file_get_contents('./files/cars.json');

$json = json_decode($fichier, true);

foreach ($json as $cars) {
    $keys = array_keys($cars);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cars</title>
</head>
<body>
    <table>
        <caption>Cars</caption>
        <thead>
            <?php
            $head = '<tr>';
            foreach ($keys as $key) {
                $head .= $key;
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

<?php

