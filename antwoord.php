<?php
//database linken
include_once "./classes/partijenDB.php";
$db = new partijenDB();

var_dump($_POST);

$rows = $db->selectMeningen();
var_dump($rows);

?>