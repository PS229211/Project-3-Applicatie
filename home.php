<?php
//database linken
include_once "./classes/partijenDB.php";
$db = new partijenDB();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Overview</title>
    <link rel="stylesheet" href="./css/home.css">
</head>

<body>
<header>
    <img src="afb/votelogo2.png" alt="" class="plaatje1">
    <nav class="navMenu">
        <a href="home.php">Homepage</a>
        <a href="partijen.php">Partijen</a>
        <a href="thema's.php">Thema's</a>
        <a href="standpunten.php">Standpunten</a>
        <div class="dot"></div>
    </nav>
    </header>

    <article>
        <h1 class="h1">Home-pagina<h1>
        <table class="transbox"><br><br>
            <p class="text2">Het doel van deze website is om u te helpen met uw keuze voor de verkiezingen<br>
            klik op de knop om te beginnen met de stemwijzer.</p>
        </table>
            <form method="POST" action="stemwijzer.php">
                <input value="start" type="submit">
            </form>

    </article>

</body>
</html>