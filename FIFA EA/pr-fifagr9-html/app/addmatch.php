<?php

require ('database.php');



$teamHome = $_POST['team'];
$teamAway = $_POST['teamAway'];

if($teamAway != '' || $teamAway != 'none')
{
    if($teamHome != '' || $teamHome != 'none')
    {
        $sqlHome ="SELECT `id` FROM tbl_teams WHERE `name` = '$teamHome'";
        $sqlAway ="SELECT `id` FROM tbl_teams WHERE `name` = $teamAway";

        $stmt = $database->prepare("$sqlHome");
        $stmt->execute();
        $fetchType = PDO::FETCH_ASSOC;
        $count = $stmt->rowCount();
        $results = $stmt->fetchall($fetchType);

        var_dump($count);
        var_dump($results);
        var_dump($stmt);
    }
    else{
        $message = 'Vul Beide partijen in...';
        header("location:../public/invoer_resultaten.php?message=$message");
    }
}
else{
    $message = 'Vul Beide partijen in...';
    header("location:../public/invoer_resultaten.php?message=$message");
}















?>