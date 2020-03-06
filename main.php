<?php
session_start();
?>
<html>
    <head>
        <title>Internet Forum</title>
    </head>
    <body>
        <a href="post.php">Post</a>
        <a href="passchange.php">Change password</a>
        <a href="logout.php">Logout</a><br><br>
<?php
$db = new PDO("mysql:host=localhost;dbname=Internet_Forum","name","password");
$res = $db->query("select * from table2 order by id desc");
while($res_f = $res->fetch()){
    $name = $res_f['uname'];
    $ptime = $res_f['ptime'];
    $message = $res_f['message'];
    $id = $res_f['id'];

    print "{$id}[{$name}] {$ptime}<br><br>"
    . "{$message}<br><br>";
}
?>
    </body>
</html>
