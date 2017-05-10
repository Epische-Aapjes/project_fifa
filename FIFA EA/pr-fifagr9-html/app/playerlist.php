<?php

require ('database.php');

$sth = $database->prepare("SELECT first_name FROM tbl_players");
$sth->execute();

$result = $sth->fetchAll();
var_dump($result);

foreach ($result as $player)
{
    $players = implode(',', $player);

    echo "<p>$players</p>";
}

?>