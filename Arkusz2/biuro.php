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
    <header>
        <h1>Podróże z uśmiechem</h1>
    </header>
    <main>
        <section class='blok-ciasteczek'>
            <?php
            if (!isset($_COOKIE['ciastko'])) {
                setcookie('ciastko', 1);
                echo '<p>Witaj! Nasza strona używa ciasteczek</p>';
            } else {
                echo '<p>Witaj ponownie na naszej stronie</p>';
            }
            ?>
        </section>
        <section class='lewy'>
            <h2>Nasze wycieczki</h2>
            <ol>
                <li>1. autokarowe</li>
                <ul>
                    <li>po Polsce</li>
                    <li>do Niemiec i Czech</li>
                </ul>

                <li>1. samolotem</li>
                <ul>
                    <li>Grecja</li>
                    <li>Barcelona</li>
                    <li>Wenecja</li>
                </ul>
            </ol>

            <h2>Pobierz dokumenty</h2>
            <p><a href='./regulamin.txt'>Regulamin biura podróży</a></p>
            <p><a href='http://galeria.pl' target='_blank'>Zdjęcia z naszych wycieczek</a></p>
        </section>
        <section class='prawy'>
            <table>
                <tr>
                    <td><img src='./polska.jpg' alt='Zwiedzanie Krakowa'></td>
                    <td><img src='./wlochy.jpg' alt='Wenecja i nie tylko'></td>
                </tr>
                <tr>
                    <td><img src='./grecja.jpg' alt='Gorące greckie wyspy'></td>
                    <td><img src='./hiszpania.jpg' alt='Słoneczna Barcelona'></td>
                </tr>
            </table>
        </section>
    </main>
    <footer>
        <p>Stronę przygotował: PESEL</p>
    </footer>
</body>

</html>