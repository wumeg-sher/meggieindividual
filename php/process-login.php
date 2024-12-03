<?php 
//process login

require_once "../include/dbsessions.php";
include("../include/html-head.php");

$username=$_POST["username"];
$password=$_POST["password"];

//prepare
$stmt = $pdo-> prepare("SELECT `username`, `userId`, `tier`
    FROM `users` 
    WHERE `username` = ? AND `users`.`password` = ?;");

$stmt->bindParam(1, $username, PDO::PARAM_STR); 
$stmt->bindParam(2, $password, PDO::PARAM_STR); 


//execute
$stmt->execute(); 

$row = $stmt->fetch();

include("../include/menu-noLinks.php");

if($row ){ 
    $_SESSION['loggedIn'] = true;
    $_SESSION['username'] = $row['username'];
    $_SESSION['userId'] = $row['userId'];
    $_SESSION['tier'] = $row['tier'];
    ?>
    <article>Logged <?= $row['username'] ?> in!
        <a href="home.php">Continue</a>
    </article>
<?php } else { ?>
    <article>Wrong username or password</article>
<?php } ?>



<body>


<?php
include ("../include/footer.php")
?>

    
</body>
</html>