<?php
session_start();
?>
<html>
    <head>
        <title>Confirm</title>
    </head>
    <body>
<?php
$date_o = new DateTime();
$now_date = $date_o->format('Y-m-d H:i:s');
$uname = $_SESSION['uname'];
$message = htmlspecialchars($_POST['message'],ENT_QUOTES,"UTF-8");
$db = new PDO("mysql:host=localhost;dbname=Internet_Forum","name","password");
$res = $db->prepare("insert into table2 (uname,ptime,message) values (:N,:D,:M)");
$res->bindParam(":N",$uname);
$res->bindParam(":D",$now_date);
$res->bindParam(":M",$message);
$res->execute();
if($res){
    print "Post successful!<br>"
    . "<a href='main.php'>Return to main screen</a>";
}else{
    print "Post failed!<br>"
    . "<a href='main.php'>Return to main screen</a>";
}
?>
    </body>
</html>
