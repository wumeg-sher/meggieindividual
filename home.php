<?php session_start();
//process login


if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true ){

$userId = $_SESSION['userId'];
//connect
$dsn = "mysql:host=localhost;dbname=yarn;charset=utf8mb4";

$dbusername = "root"; 
$dbpassword = "";  
$pdo = new PDO($dsn, $dbusername, $dbpassword); 


//prepare
$stmt = $pdo -> prepare("SELECT * FROM `yarn`;");

//execute
$stmt->execute();

//process 


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <script type="text/javascript" src="js/lib/jquery-1.11.1.min.js" ></script>
    <script> 
      $(function(){ $("head").load("header.html") });
    </script>

    <title>Homepage</title>
</head>
<body>


<h1>Agu's yarn stash</h1>

<div id="menu">
<img src="assets/mao.png">
<img src="assets/lineyarn.png">
</div>



    <article>
        Logged in as <?=$_SESSION['username']?>
    </article>

    <article>
    <a href="insert.php">Add new entry</a>
    <a href="project-page.php">Project page</a>
    <ul>
        <?php
        while($row = $stmt-> fetch()) {
            ?><li><?= $row["yarnType"] ?>
                <?= $row["yarnColor"] ?>
                weight: <?= $row["yarnWeight"] ?>
                quantity: <?= $row["quantity"] ?>
                location: <?= $row["location"] ?>
                dye lot: <?= $row["dyeLot"] ?>

                <?php if($_SESSION['userId']==1){ ?>
                <a href= "delete-confirmation.php?pid=<?= $row["yarnId"]
                    ?> ">Delete</a>
                <a href= "update-confirmation.php?pid=<?= $row["yarnId"]
                    ?> ">Update</a>
                <?php } ?>
            
            </li>
            <?php } ?>
    </ul>

    </article>

    
</body>
</html>


<?php }else{ ?>
    <h1>Access denied, please log in to see this page<h1>
    <article> <a href="login.php">Log in here</a>
    </article>
    <?php } ?>



    <section id="footer">
        <p>Just a little site by Agu</p>
        <p>Agu 2024</p>
    </section>
    
</body>
</html>


