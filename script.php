<?php
$var = 2;
echo $var;
$db = new PDO(
    "mysql:host=;dbname=;charset=utf8mb4",
    "",
    "",
    [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, // PHP Data Object, una tupla diventa un oggetto
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Gli errori di sql vengono gestiti come eccezioni
    ]
);
?>
