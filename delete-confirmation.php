<?php
//shows information to be deleted and confirmation 

require_once "dbsessions.php";
include("html-head.php");

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true ){

//recieve personId
$yarnId = $_GET["pid"];

//prepare
$stmt = $pdo-> prepare("SELECT * FROM `yarn` WHERE `yarnId` = $yarnId;");


//execute
$stmt->execute();

?>


<body>

<?php include("menu.php"); ?>

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


    <?php
    include("footer.php");

    }else{ 
    include("access-denied.php");
    }  
    ?>

    
</body>
</html>


