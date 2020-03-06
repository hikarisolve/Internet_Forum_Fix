<?php
session_start();
$uname = htmlspecialchars($_SESSION['uname'],ENT_QUOTES,"UTF-8");
$npass = htmlspecialchars($_POST['npass'],ENT_QUOTES,"UTF-8");
?>

<html>
    <head>
        <title>Confirm</title>
    </head>
    <body>
<?php
$db = new PDO("mysql:host=localhost;dbname=Internet_Forum","name","password");
$res = $db->prepare("update table1 set upass=:P where uname='$uname'");
$res->bindParam(":P",$npass);
$res->execute();
if($res){
    print "Password change successful!<br>"
    . "<a href='main.php'>Back to the Internet_Forum</a>";   
}else{
    print "Password change failed<br>"
    . "<a href='main.php'>Back to the Internet_Forum</a>";
}
?>
    </body>
</html>
