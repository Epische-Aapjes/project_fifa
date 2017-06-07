<?php

require_once ('database.php');
$username = $_POST['username'];
$password = $_POST['password'];





if ($username != '')
{
    $sql = "SELECT Username FROM tbl_users WHERE Username = '$username'";
    $sth = $database->prepare($sql);
    $sth->execute();
    $fetchType = PDO::FETCH_ASSOC;
    $count = $sth->rowCount();
    $results = $sth->fetchall($fetchType);
    if ($count == 0)
    {
        if ($password != '')
        {
            $sql = "SELECT Password FROM tbl_users WHERE password = '$password'";
            $sth = $database->prepare($sql);
            $sth->execute();
            $fetchType = PDO::FETCH_ASSOC;
            $count = $sth->rowCount();
            $results = $sth->fetchall($fetchType);
            if ($count == 0)
            {
                $admin = 0;
                $stmt = $database->prepare("INSERT INTO tbl_users (Username, Password, IsAdmin) VALUES ( '$username', '$password', '$admin')");
                $stmt->execute();

            $message = 'U bent nu ingelogd';
            header("location:../index.php?message=$message");
            }
        }
        else
        {
            $message = 'Vul alstublief een wachtwoord in';
            header("location:../index.php?message=$message");
        }
    }
    else{
        $message ='Deze is al gebruikt';
        header("location:../no-login/register.php?message=$message");
    }

}
else{
    $message = 'Vul alstublief een gebruikersnaam in';

    header("location:../index.php?message=$message");
}






?>