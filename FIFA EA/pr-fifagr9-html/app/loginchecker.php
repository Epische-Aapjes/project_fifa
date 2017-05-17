<?php

require ('database.php');
$username = $_POST['username'];
$password = $_POST['password'];
var_dump($username);
var_dump($password);
if ($username != '')
{
    if ($password != '')
    {
            $admin = 0;
            $stmt = $databse->prepare("INSERT INTO tbl_users(Username, Password, IsAdmin) VALUES ( :username, :password, :admin)");

            $stmt->excute();
        $message='U bent nu ingelogd';
        //header("location:../index.php?message=$message");
    }
    else
    {
        $message = 'Vul alstublief een wachtwoord in';
        //header("location:../app/login.php?message=$message");
    }

}
else{
    $message = 'Vul alstublief een gebruikersnaam in';

    //header("location:../app/login.php?message=$message");
}






?>