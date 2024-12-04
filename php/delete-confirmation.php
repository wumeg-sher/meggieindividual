<?php
//shows yarn to be deleted 

require_once "../include/dbsessions.php";
include("../include/html-head.php");

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true ){

//recieve personId
$yarnId = $_GET["pid"];

//prepare
$stmt = $pdo-> prepare("SELECT * FROM `yarn` WHERE `yarnId` = $yarnId;");


//execute
$stmt->execute();

?>


<body>

<?php include("../include/menu.php"); ?>

    <content>
    <h1>Are you sure that you want to delete this yarn entry?</h1>
    <article>
    <button onclick="location.href ='home.php';" class="menuButton">Back</button>

    <br>
    <br>
    <?php if($row = $stmt->fetch()) { ?>
        Yarn: <?= $row["yarnType"] ?>
        <br>Color: <?= $row["yarnColor"] ?>
        <br>Weight: <?= $row["yarnWeight"] ?>
        <br>Quantity: <?= $row["quantity"] ?>
        <br>Location: <?= $row["location"] ?>
        <br>Dye lot: <?= $row["dyeLot"] ?>
    <?php } ?>


    <form action="home.php" method="">
        <input type= "submit" value="NO">
    </form>
    <form action="delete-yarn.php" method="POST">
        <input type="hidden" name="pid"  value=<?= $row["yarnId"] ?>>
        <input type= "submit" value="YES">
    </form>
    </article>
    </content>


    <?php
    include("../include/footer.php");

    }else{ 
    include("../include/access-denied.php");
    }  
    ?>

    
</body>
</html>


