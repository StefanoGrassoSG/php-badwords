<?php 

    $testo = $_GET['phrase'];
    $password = $_GET['password'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Risultato 
    </h1>

    <h2>
        <?php
        echo $testo . strlen($testo);
        echo '<br>';
        echo str_replace('ass', '***', $password);
        ?>
    </h2>
</body>
</html>