<?php
require 'functions/debug.php';

if ($toto = fopen('./files/test.html', 'a+')) {
   if (is_writable('./files/test.html')) {
       $msg = '<!DOCTYPE html>' . PHP_EOL .
'<html lang="en">'. PHP_EOL .
'<head>'. PHP_EOL .
'    <meta charset="UTF-8">'. PHP_EOL .
'    <title>Title</title>'. PHP_EOL .
'</head>'. PHP_EOL .
'<body>'. PHP_EOL .

'</body>'. PHP_EOL .
'</html>'. PHP_EOL;

       fwrite($toto, $msg);
   } else {
       echo 'marche po';
   }
} else {
    echo 'File does not exist';
}
echo $msg;
debug($toto);
fclose($toto);
