<?php

require_once ('database.php');
$username = $_POST['username'];
$password = $_POST['password'];

//checks the input
if ($username != '')
{
    //selects the username
    $sql = "SELECT Username FROM tbl_users WHERE Username = '$username'";
    $sth = $database->prepare($sql);
    $sth->execute();
    $fetchType = PDO::FETCH_ASSOC;
    $count = $sth->rowCount();
    $results = $sth->fetchall($fetchType);
    //checks if it exists
    if ($count > 0)
    {
        //does the same for the password
        if ($password != '')
        {
            $sql = "SELECT Password FROM tbl_users WHERE password = '$password'";
            $sth = $database->prepare($sql);
            $sth->execute();
            $fetchType = PDO::FETCH_ASSOC;
            $count = $sth->rowCount();
            $results = $sth->fetchall($fetchType);
            if ($count >0)
            {
                if ($username == 'admin' && $password == 'admin')
                {
                        $message = 'u bent ingelogd! Welkom terug admin';
                        header("location:../public/resultaten.php?message=$message");
                }
                else{
                    $message = 'u bent ingelogd!';
                    header("location:../no-login/resultaten.php?message=$message");
                }
            }
            else{
                $message = 'Geen geldige wachtwoord';
                header("location:../index.php?message=$message");
            }


        }
        else{
            $message = 'Vul alstublieft een wachtwoord in';
            header("location:../index.php?message=$message");
        }
    }
    else
    {
        $message = 'Geen geldige gebruikersnaam';
        header("location:../index.php?message=$message");
    }


}
else{
    $message = 'Vul alstublieft een gebruikersnaam in';
    header("location:../index.php?message=$message");
}






?>