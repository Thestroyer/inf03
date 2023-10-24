<?php
    if(!isset($_COOKIE['ciastko'])){
        setcookie('ciastko', 1);
        echo '<p>Witaj! Nasza strona używa ciasteczek</p>';
    }
    else{
        echo '<p>Witaj ponownie na naszej stronie</p>';
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turystyka to moja pasja</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header></header>
    <section class='blok-ciasteczek'></section>
    <section class='lewy'></section>
    <section class='prawy'></section>

</body>
</html>