<?php
//database linken
include_once "./classes/partijenDB.php";
$db = new partijenDB();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Overview</title>
    <link rel="stylesheet" href="./css/partijen.css">
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
    <!-- <nav class="menu">
        <li>
            <a class="menu" href="home.php">Home</a>
        </li>
        <li>
            <a class="menu" href="partijen.php">Partijen</a>
        </li>
        <li>
            <a class="menu" href="thema's.php">Thema’s</a>
        </li>   
    </nav> -->

        <article>
        <h1 class="h1">Partijen<h1>
            <table class="transbox"><br><br>
                <tr class="text1">
                    <th>Partij</th>
                    <th>Adres</th>
                    <th>Postcode</th>
                    <th>Gemeente</th>
                    <th>Emailadres</th>
                    <th>Telefoonnummer</th>
                </tr>

                <?php
                    // informatie ophalen uit functie
                    $rows = $db->selectPartijen();
                    foreach($rows as $row)
                    {
                        // tabel laten zien
                        echo "<tr >   
                                <td class='border_bottom'>$row[naam]</td>
                                <td class='border_bottom'>$row[adres]</td>
                                <td class='border_bottom'>$row[postcode]</td>
                                <td class='border_bottom'>$row[gemeente]</td>
                                <td class='border_bottom'>$row[emailadres]</td>
                                <td class='border_bottom'>$row[telefoonnummer]</td>
                            </tr>";
                    }
                ?>
            </table>
        </article>
    </body>
</html>