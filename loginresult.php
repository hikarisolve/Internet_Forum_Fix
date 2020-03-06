<?php
ini_set('display_errors',1);
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
$res = $db->prepare("select uname from table1 where uname=:N and upass=:P");
$res->bindParam(':N',$name);
$res->bindParam(':P',$pass);
$res->execute();
if($res->rowCount()>0){
    $_SESSION['uname'] = $name;
    print "Login successful.<br>Please move from the link below."
    . "<a href='main.php'>Internet Forum</a>";
    
}else{
    session_destroy();
    print "Wrong User Name or Password.<br>Please log in again.<br>"
     . "<a href='login.html'>Log in</a>";
}
?>
    </body>
</html>
