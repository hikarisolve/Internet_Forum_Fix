<?php
session_start();
?>
<html>
    <head>
        <title>User Registration</title>
    </head>
    <body>
        Please enter your username and password.<br><br>
        <form action="registerresult.php" method="post">
            User name: <input type="text" name="uname"><br>
            Password: <input type="password" name="upass"><br>
            <input type="submit" value="Register">
        </form>
    </body>
</html>
