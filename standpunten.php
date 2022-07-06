<?php
//database linken
include_once "./classes/partijenDB.php";
$db = new partijenDB();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Overview</title>
    <link rel="stylesheet" href="./css/standpunten.css">
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
        <h1 class="h1">Standpunten<h1>
            <table class="transbox"><br><br>
                <tr class="text1">
                    <th>Standpunten</th>
                    <th>Thema’s</th>
                </tr>

                <?php
                    // informatie ophalen uit functie
                    $rows = $db->selectStandpuntenThema();

                    foreach($rows as $row)
                    { 
                        // tabel laten zien
                        echo "<tr>   
                                <td>$row[standpunt]</td>
                                <td>$row[thema]</td>
                            </tr>";
                    }
                ?>
            </table>
        </article>
    </body>
</html>