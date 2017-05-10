<?php



$teamName = $_POST['team-naam'];
$player1 = $_POST['speler1'];
$player2 = $_POST['speler2'];
$player3 = $_POST['speler3'];
$player4 = $_POST['speler4'];
$player5 = $_POST['speler5'];
var_dump($player1);
var_dump($cvsData);
var_dump($fp);
$cvsData = $teamName . "," . $player1 . "," . $player2 ."," . $player3 ."," . $player4 ."," . $player5 ."\n";

$fp = fopen("Teams.csv", "a"); // $fp is now the file pointer to file $filename

if($fp) {
    $message = 'The conversion workt!';
    fwrite($fp, $cvsData); // Write information to the file
    fclose($fp); // Close the file
    header("location:../index.php?message=$message");
}
$message = 'Sorry the conversion doesnt work...';
//header("location:../index.php?message=$message");
?>