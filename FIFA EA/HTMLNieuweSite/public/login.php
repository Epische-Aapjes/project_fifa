<?php require ('../header.php'); ?>

<title>Login</title>

<div class="login">
    <h1>Login</h1>
        <form action="./app/loginchecker.php" method="post" class="form-inline">
            <label for="inlineFormInput">Username:</label>
            <input type="text" name="username">
            <label for="inlineFormInput">Password:</label>
            <input type="password" name="password">
            <label for="inlineFormInput">
                <input type="checkbox"> Remember me</label>
            <button type="submit">Submit</button>
                        <?php
                        error_reporting(0);

                        if ($_GET['message'])
                        {
                            $message = $_GET['message'];
                            echo "<div class='alert alert-danger' role='alert'>";
                            echo "   <a href='login.php' class='alert-link'>$message</a>";
                            echo "   en probeer het opnieuw.";
                            echo "</div>";
                        }
                        else{
                        }
                        ?>
</form>
</div>

<?php require ('../footer.php'); ?>