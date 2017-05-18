




<!doctype html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="row">
        <div class="col-sm-9">
            <div class="row">
                <div class="col-8 col-sm-6">
                </div>
                <div class="col-4 col-sm-6">
                    <h1>Login</h1>
                    <form action="./app/loginchecker.php" method="post" class="form-inline">

                         
                        <label class="sr-only" for="inlineFormInput">Username</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="username">

                        <label class="sr-only" for="inlineFormInput">Password</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                            <!--<div class="input-group-addon"></div>-->
                            <input type="password" class="form-control" id="inlineFormInputGroup" name="password">
                        </div>
                        <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <?php
                        error_reporting(0);

                        if ($_GET['message'])
                        {
                            $message = $_GET['message'];
                            echo "<div class='alert alert-danger' role='alert'>";
                            echo "  <strong>Oh snap!</strong>";
                            echo "   <a href='login.php' class='alert-link'>$message</a>";
                            echo "   en probeer het opnieuw.";
                            echo "</div>";
                        }
                        else{

                        }
                        ?>
                    </form>


                          <div class="button-class" ></div>
                       <ul class="button-ul" >
                      <li><button  class="button"  onclick="window.location.href='no-login/resultaten.php'">zonder inloggen</button></li>
                                                                       
                     <li> <button  class="button"  onclick="window.location.href='no-login/register.php'">registreren</button>   </li> 
                      </ul>  
                </div>
            </div>
        </div>
    </div>
</body>
</html>