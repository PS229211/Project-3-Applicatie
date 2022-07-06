<?php
//database linken
include_once "./classes/partijenDB.php";
$db = new partijenDB();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Overview</title>
    <link rel="stylesheet" href="./css/stemwijzer.css">
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
    <h1 class="h1">Stemwijzer<h1>
    <p class="text2">Op deze pagina begint de stemwijzer.<br> 
    Je krijgt allemaal stellingen en je moet zeggen of je het daarmee eens of oneens bent.<br>
    Aan de hand van jou antwoorden wordt er een partij gekozen die bij jou past</p><br><br>
    <form method="POST" action="antwoord.php">
            <table class="transbox">
                    <tr class="text1">
                        <th>Standpunten</th>
                        <th>Eens</th>
                        <th>Oneens</th>
                    </tr>

                    <?php
                    // informatie ophalen uit functie
                    $rows = $db->selectStandpunten();
                    $counter = 0;
                    foreach($rows as $row)
                    {
                        $counter++;
                        // tabel laten zien
                        echo "<tr>
                                <td class='border_bottom'>$row[standpunt]</td>
                                <td>
                                    <input type='radio' id='$row[standpunt_id]' name='$counter' required value='1'>
                                </td>
                                <td>
                                    <input type='radio' id='$row[standpunt_id]' name='$counter' required value='0'>
                                </td>
                            </tr>";
                    }
                    ?>
            </table>
            <br>
            <input type="submit" value="Verzend antwoorden">
        </form>
    </article>
</body>
</html>