<?php

require('../index.html');


$teamName = $_POST['team-naam'];
$fn = 'het werkt lol';
$cvsData = $teamName . "," . $player1 . "," . $player2 ."\n";

$fp = fopen("Teams.csv", "a"); // $fp is now the file pointer to file $filename

if($fp) {
    $message = 'The conversion workt!';
    fwrite($fp, $cvsData); // Write information to the file
    fclose($fp); // Close the file
    header("location:../index.php?message=$message");
}
$message = 'Sorry the conversion doesnt work...';
header("location:../index.php?message=$message");
?>