<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username != '')
{
    if ($password != '')
    {

    }
    else
    {
        $message = 'Vul alstublief een wachtwoord in';
        header("location:../app/login.php?message=$message");
    }

}
else{
    $message = 'Vul alstublief een gebruikersnaam in';
    header("location:../app/login.php?message=$message");
}






?>