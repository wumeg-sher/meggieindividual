<?php 
//process login

require_once "../include/dbsessions.php";
include("../include/html-head.php");

$username=$_POST["username"];
$password=$_POST["password"];

$stmt = $pdo-> prepare("SELECT `username`, `userId`, `tier`
    FROM `users` 
    WHERE `username` = ? AND `users`.`password` = ?;");

$stmt->bindParam(1, $username, PDO::PARAM_STR); 
$stmt->bindParam(2, $password, PDO::PARAM_STR); 

$stmt->execute(); 

$row = $stmt->fetch();

include("../include/menu-noLinks.php");

?> <content> <?php
if($row ){ 
    $_SESSION['loggedIn'] = true;
    $_SESSION['username'] = $row['username'];
    $_SESSION['userId'] = $row['userId'];
    $_SESSION['tier'] = $row['tier'];
    ?>
    <br>
    <article><h3>Logged <?= $row['username'] ?> in!<h3>
    <button onclick="location.href ='home.php';" class="menuButton">Continue</button>
    </article>
<?php } else { ?>
    <article>Wrong username or password</article>
    <button onclick="location.href ='login.php';" class="menuButton">Back</button>
<?php } ?>


</content>
<body>


<?php
include ("../include/footer.php")
?>

    
</body>
</html>