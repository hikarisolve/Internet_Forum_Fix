<?php
session_start();
?>
<html>
    <head>
        <title>Post</title>
    </head>
    <body>
        <form action="postresult.php" method="post">
            Enter what you want to post!<br>
            <br>
            <textarea name="message" rows="4" cols="50">Please enter the message here</textarea><br>
            <input type="submit" value="Post">
        </form>
    </body>
</html>
