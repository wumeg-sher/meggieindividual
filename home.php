<?php 
//process login

require_once "dbsessions.php";
include("html-head.php");

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true ){

$userId = $_SESSION['userId'];

//prepare
$stmt = $pdo -> prepare("SELECT * FROM `yarn`;");

//execute
$stmt->execute();
?>


<body>
    
    <?php include("menu.php"); ?>

    <h1>Yarn stash</h1>

    <article>
        Logged in as <?=$_SESSION['username']?>
    </article>

    <article>
    <a href="insert-newYarn.php">Add new entry</a>
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


    <?php 
    include("footer.php");

    }else{ 
    include("access-denied.php");
    } 
    ?>


    
</body>
</html>


