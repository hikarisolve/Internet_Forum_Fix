<?php
session_start();
?>
<html>
    <head>    
        <title>Password change</title>
    </head>
    <body>
        Please enter each<br><br>
        <form action="passchangeresult.php" method="post">
            New Password:<input type="password" name="npass"><br>
            <input type="submit" value="Change">
        </form>
    </body>
</html>
