<?php

require_once ('database.php');
$username = $_POST['username'];
$password = $_POST['password'];





if ($username != '')
{
    if ($password != '')
    {
        $admin = 0;
        $stmt = $database->prepare("INSERT INTO tbl_users (Username, Password, IsAdmin) VALUES ( :username, :password, :admin)");

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':admin', $admin);

        $stmt->execute();

        $message='U bent nu ingelogd';
        // header("location:../index.php?message=$message");
    }
    else
    {
        $message = 'Vul alstublief een wachtwoord in';
        header("location:../index.php?message=$message");
    }

}
else{
    $message = 'Vul alstublief een gebruikersnaam in';

    header("location:../index.php?message=$message");
}






?>