<?php
//process registration of new user 

require_once "../include/dbsessions.php";
include("../include/html-head.php");
include("../include/menu-noLinks.php");

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


    if ($password !== $confirmPassword) {
        ?><article>Passwords to not match. Please try again.
            <a href="login.php">Back</a>
        </article><?php
    } else if ($userCount > 0) {
        ?><article>Username taken, please use a different username.
            <a href="login.php">Back</a>
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
    
    <article>Successfully registered <?=$_SESSION['username'] ?>! 
        <a href="home.php">Continue</a>
    </article>

    <?php } ?>

<body>


<?php
include ("../include/footer.php")
?>

    
</body>
</html>