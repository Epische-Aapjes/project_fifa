<?php
require ('database.php');



if (isset($_POST['voornaam']) && $_POST['voornaam'] != '')
{
    if (isset($_POST['achternaam']) && $_POST['achternaam'] != '')
    {
        if (isset($_POST['studentennummer']) && $_POST['studentennummer'] != '')
        {
            $firstname = $_POST['voornaam'];
            $lastname = $_POST['achternaam'];
            $studentid = $_POST['studentennummer'];
            $sql = "INSERT INTO tbl_players (`first_name` `last_name` `student_id`) VALUES ('$firstname''$lastname''$studentid') ";
            $database->execute($sql);
        }
        else{
            $message = 'Voer alstublieft een studenten nummer in...';
            header("location:../index.php?message= $message");
        }

    }
    else{
        $message = 'Voer alstublieft een achternaam in...';
        header("location:../index.php?message= $message");
    }
}
else{
    $message = 'Voer alstublieft een voornaam in...';
    header("location:../index.php?message= ");
}$message


$database->query($sql);




?>