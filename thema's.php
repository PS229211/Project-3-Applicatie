<?php
//database linken
include_once "./classes/partijenDB.php";
$db = new partijenDB();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Overview</title>
    <link rel="stylesheet" href="./css/thema.css">
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

<article><br>

<h1 class="h1">Thema's<h1>
    <p class="text2">Dit zijn de thema's die op dit moment belangrijk zijn in de politiek<br></p>
            <table class="transbox">
                <tr class="text1">
                    <th>thema</th>
                </tr>

                <?php
                    // informatie ophalen uit functie
                    $rows = $db->selectThema();
                    foreach($rows as $row)
                    {
                        // tabel laten zien
                        echo "<tr >
                                <td class='border_bottom'>$row[thema]</td>
                            </tr>";
                    }
                ?>
            </table>
        </article>
    </body>
</html>