<?php session_start();
//shows information to be deleted and confirmation 

include("html-head.php");

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true ){

//recieve personId
$yarnId = $_GET["pid"];

//connect
$dsn = "mysql:host=localhost;dbname=yarn;charset=utf8mb4";

$dbusername = "root"; 
$dbpassword = "root";  
$pdo = new PDO($dsn, $dbusername, $dbpassword); 


//prepare
$stmt = $pdo-> prepare("SELECT * FROM `yarn` WHERE `yarnId` = $yarnId;");


//execute
$stmt->execute();




?>


<body>

    <h1>Are you sure that you want to delete this entry?</h1>
    <article>
    <?php if($row = $stmt->fetch()) { ?>
        <?= $row["yarnType"] ?>
        <?= $row["yarnColor"] ?>
        weight: <?= $row["yarnWeight"] ?>
        quantity: <?= $row["quantity"] ?>
        location: <?= $row["location"] ?>
        dye lot: <?= $row["dyeLot"] ?>
    <?php } ?>


    <form action="home.php" method="">
        <input type= "submit" value="NO">
    </form>
    <form action="delete-yarn.php" method="POST">
        <input type="hidden" name="pid"  value=<?= $row["yarnId"] ?>>
        <input type= "submit" value="YES">
    </form>
    </article>


    <?php }else{ 
    include("access-denied.php");
    } 
    
    include("footer.php");
    ?>

    
</body>
</html>


