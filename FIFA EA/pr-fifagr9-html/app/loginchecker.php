<?php

require ('database.php');
$username = $_POST['inlineFormInput'];
$password = $_POST['inlineFormInputGroup'];

if ($username != '')
{
    if ($password != '')
    {
            $admin = 0;
            $sql ="INSERT INTO tbl_users(Username, Password, IsAdmin) VALUES ( '$username' ,'$password' , '$admin')";
            $sth = $databse->prepare('$sql');
            $sth->excute();
        $message='U bent nu ingelogd';
        header("location:../index.php?message=$message");
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