<?php

require('./database.php');

$teamName = $_POST['team-naam'];
$player1 = $_POST['speler1'];
$player2 = $_POST['speler2'];
$player3 = $_POST['speler3'];
$player4 = $_POST['speler4'];
$player5 = $_POST['speler5'];

if ($teamName != '' )
{
    $stmt = $database->prepare("INSERT INTO tbl_teams (`poule_id`, `name`) VALUES ('0','$teamName')");
    $stmt->execute();


    $stmt = $database->prepare("SELECT `id` FROM tbl_teams WHERE `name` = '$teamName'");
    $stmt->execute();
    $fetchType = PDO::FETCH_ASSOC;
    $count = $stmt->rowCount();
    $results = $stmt->fetchall($fetchType);

    $teamid = implode($results);

    var_dump($teamid);
    var_dump($count);
    var_dump($results);
    
    for($i =1; $i <= 5; $i++) {
        $players = "player$i";
        echo $players;
        $stmt = $database->prepare("INSERT INTO tbl_players(`team_id`) VALUES ('$results') WHERE `first_name` = '$players' ");
        $stmt->execute();
    }




    //makes new page
    //$teams = fopen("./storage/$teamName.html", "w");

    $stmt = $database->prepare("INSERT INTO tbl_players(``,)");
    $stmt->execute();

    $fp = fopen("./storage/teams.csv", "a"); // $fp is now the file pointer to file $filename
    if($fp) {
        $cvsData = "," . $teamName . "\n";
        $message = 'Het is mij gelukt!';

        fwrite($fp, $cvsData); // Write information to the file
        fclose($fp); // Close the file
       // header("location:../public/invoer_spelers.php?message=$message");
    }
    else{
        $message = 'Helaas is het mij niet gelukt...';
       // header("location:../public/invoer_spelers.php?message=$message");
    }
}
else{
  $message =  '';
 // header("location:../public/invoer_spelers.php?message=$message");
}






?>