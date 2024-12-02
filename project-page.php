<?php
//process login

require_once "dbsessions.php";
include("html-head.php");


if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true ){

$userId = $_SESSION['userId'];
//connect
$dsn = "mysql:host=localhost;dbname=yarn;charset=utf8mb4";

$dbusername = "root"; 
$dbpassword = "root";  
$pdo = new PDO($dsn, $dbusername, $dbpassword); 


//prepare
$stmt = $pdo -> prepare("SELECT * FROM `yarn`;");

//execute
$stmt->execute();

?>


<body>


<?php include("menu.php"); ?>


<h1>Project Page</h1>

    <article>
        Logged in as <?=$_SESSION['username']?>
    </article>

    <article>
    <a href="insert-newYarn.php">Add new entry</a>
    <a href="home.php">Yarn page</a>
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

<?php 
    include("footer.php");
    
    }else{
        include("access-denied.php");
    } 
    ?>

    
</body>
</html>


