<?php
session_start();
$name = htmlspecialchars($_POST['uname'],ENT_QUOTES,"UTF-8");
$pass = htmlspecialchars($_POST['upass'],ENT_QUOTES,"UTF-8");
?>

<html>
    <head>
        <title>Confirm</title>
    </head>
    <body>
<?php
$db = new PDO("mysql:host=localhost;dbname=Internet_Forum","name","password");
$res = $db->prepare("select uname from table1 where uname=:N");
$res->bindParam(":N",$name);
$res->execute();
if($res->rowCount()===0){
    $res_i = $db->prepare("insert into table1 values (:N,:P)");
    $res_i->bindParam(":N",$name);
    $res_i->bindParam(":P",$pass);
    $res_i->execute();
    if($res_i){
        print "User registration completed!<br>"
        . "Please log in from the link below.<br>"
        . "<a href='login.html'>Login</a>";
    }else{
        print "User registration failed<br>"
        . "<a href='register.php'>Register again</a>";
    }
}else{
    session_destroy();
    print "User registration failed.<br>"
    . "This username is already in use.<br>"
    . "Please register with another username<br>"
    . "<a href='register.php'>Register again</a>";
}
?>
    </body>
</html>
