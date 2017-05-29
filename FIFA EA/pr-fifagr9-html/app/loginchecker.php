<?php

require_once ('database.php');
$username = $_POST['username'];
$password = $_POST['password'];


//$admin = 0;
//$stmt = $database->prepare("SELECT Username FROM tbl_users WHERE Username = (:username)");
//var_dump($stmt);
// $stmt->bindParam(':username', $username);
// var_dump($stmt);
// $stmt->execute();
//$stmt->bindParam(':password', $password);
//$stmt->bindParam(':admin', $admin);
// var_dump($username);
//var_dump($password);


if ($username != '')
{
    if ($password != '')
    {
        if ($username == 'admin')
        {
            if ($password == 'admin')
            {
                $message = 'u bent ingelogd! Welkom terug admin';
                header("location:../public/resultaten.php?message=$message");
            }
            else{
                $message = 'u bent ingelogd! Welkom terug';
                header("location:../no-login/resultaten.php?message=$message");
            }
        }
        else{
            $message = 'u bent ingelogd!';
            header("location:../no-login/resultaten.php?message=$message");
        }

    }
    else{
        $message = 'Vul alstublief een wachtwoord in';
        header("location:../index.php?message=$message");
    }

}
else{
    $message = 'Vul alstublief een gebruikersnaam in';
    header("location:../index.php?message=$message");
}






?>