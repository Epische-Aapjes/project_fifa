<?php

require('../index.html');


$teamName = $_GET['team-naam'];
$fn = 'het werkt lol';
$cvsData = $teamName . "," . $fn . "\n";

$fp = fopen("formTest.csv", "a"); // $fp is now the file pointer to file $filename

if($fp) {
    $message = 'The conversion workt!';
    fwrite($fp, $cvsData); // Write information to the file
    fclose($fp); // Close the file
    header("location:../index.php?message=$message");
}
$message = 'Sorry the conversion doesnt work...';
header("location:../index.php?message=$message");
?>