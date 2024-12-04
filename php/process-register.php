<?php
//process registration of new user 

require_once "../include/dbsessions.php";
include("../include/html-head.php");
include("../include/menu.php");

$username = $_POST["regUsername"];
$password = $_POST["regPassword"];
$confirmPassword = $_POST["regConfirmPassword"];


// Check if the username already exists
$stmt = $pdo->prepare("SELECT COUNT(*) 
    FROM `users` 
    WHERE `username` = :username");
$stmt->bindParam(':username', $username);
$stmt->execute();
$userCount = $stmt->fetchColumn();

?> <content> <?php

    if ($password !== $confirmPassword) {
        ?>
        <br>
        <article>Passwords to not match. Please try again.
        <br>
        <button onclick="location.href ='login.php';" class="menuButton">Back</button>
        </article><?php
    } else if ($userCount > 0) {
        ?>        
        <br>
        <article>Username taken, please use a different username.
        <br>
        <button onclick="location.href ='login.php';" class="menuButton">Back</button>
        </article><?php
    } else {
    
    // Insert the new user into the database
    $stmt = $pdo->prepare("INSERT INTO `users` (`username`, `password`, `tier`) 
        VALUES (:username, :password, 'user')");

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute(); 

    // Set the session variables
    $_SESSION['loggedIn'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['tier'] = 'user'; 
    ?>
    <br>
    <article><h3>Successfully registered <?=$_SESSION['username'] ?>! <h3>
    <br>
    <button onclick="location.href ='home.php';" class="menuButton">Continue</button>
    </article>

    <?php } ?>
    </content>

<body>


<?php
include ("../include/footer.php")
?>

    
</body>
</html>