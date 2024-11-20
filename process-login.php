<?php session_start();
//process login

$username=$_POST["username"];
$password=$_POST["password"];



//connect
$dsn = "mysql:host=localhost;dbname=contactinfo;charset=utf8mb4";

$dbusername = "root"; 
$dbpassword = "";  
$pdo = new PDO($dsn, $dbusername, $dbpassword); 


//prepare
$stmt = $pdo-> prepare("SELECT `username`, `userId`, `tier`
    FROM `users` 
    WHERE `username` = ? AND `users`.`password` = ?;");

$stmt->bindParam(1, $username, PDO::PARAM_STR); 
$stmt->bindParam(2, $password, PDO::PARAM_STR); 


//execute
$stmt->execute(); 

$row = $stmt->fetch();

if($row ){ 
    $_SESSION['loggedIn'] = true;
    $_SESSION['username'] = $row['username'];
    $_SESSION['userId'] = $row['userId'];
    $_SESSION['tier'] = $row['tier'];
    
    ?>
    <article>Logged in! <?= $row['username'] ?>
        <a href="home.php">View records</a>
    </article>
<?php } else { ?>
    <article>Wrong username or password</article>
<?php } ?>




<!DOCTYPE html>
<html lang="en">
<head>

    
    <title>Login screen</title>
</head>
<body>
    
</body>
</html>