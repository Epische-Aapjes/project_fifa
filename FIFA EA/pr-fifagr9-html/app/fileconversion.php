<?php

require_once ('./database.php');

$teamName = $_POST['team-naam'];
$player1 = $_POST['speler1'];
$player2 = $_POST['speler2'];
$player3 = $_POST['speler3'];
$player4 = $_POST['speler4'];
$player5 = $_POST['speler5'];

var_dump($player1);
var_dump($player2);
var_dump($player3);
var_dump($player4);
var_dump($player5);

$cvsData = $teamName . "," . $player1 . "," . $player2 ."," . $player3 ."," . $player4 ."," . $player5 ."\n";

$fp = fopen("Teams.csv", "a"); // $fp is now the file pointer to file $filename

if($fp) {
    $message = 'Het is mij gelukt!';

    $stmt = $database->prepare("INSERT INTO tbl_teams VALUE (':team')");
    $stmt->bindParam(':team', $teamName);
    $stmt->excute();
    //fwrite($fp, $cvsData); // Write information to the file
    fclose($fp); // Close the file
   // header("location:../index.php?message=$message");
}
else{
    $message = 'Helaas is het mij niet gelukt...';
   // header("location:../index.php?message=$message");
}

?>