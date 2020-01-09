<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cars</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
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
