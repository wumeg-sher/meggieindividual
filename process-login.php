<?php session_start();
//process login

include("html-head.php");

$username=$_POST["username"];
$password=$_POST["password"];

//connect
$dsn = "mysql:host=localhost;dbname=yarn;charset=utf8mb4";

$dbusername = "root"; 
$dbpassword = "root";  
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
    
    ?>
    <article>Logged <?= $row['username'] ?> in!
        <a href="home.php">Continue</a>
    </article>
<?php } else { ?>
    <article>Wrong username or password</article>
<?php } ?>



<body>
<h1>Agu's yarn stash</h1>


<div id="menu">
<img src="assets/mao.png">
<img src="assets/lineyarn.png">
</div>

<?php
include ("footer.php")
?>

    
</body>
</html>