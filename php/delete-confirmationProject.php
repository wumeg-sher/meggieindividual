<?php
//shows project to be deleted
require_once "../include/dbsessions.php";
include("../include/html-head.php");

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true ){

//recieve personId
$projectId = $_GET["pid"];

//prepare
$stmt = $pdo-> prepare("SELECT * FROM `projects` WHERE `projectId` = $projectId;");


//execute
$stmt->execute();

?>


<body>

<?php include("../include/menu.php"); ?>

    <h1>Are you sure that you want to delete this entry?</h1>
    <article>
    <a href="project-page.php">Back</a>
    <br>

    <?php if($row = $stmt->fetch()) { ?>
        Project name: <?= $row["projectName"] ?>
        <br>Yarn used: <?= $row["yarnUsed"] ?>
        <br>Hours spent: <?= $row["hoursSpent"] ?>
        <br>Progress: <?= $row["progress"] ?>
        <br>Notes: <?= $row["notes"] ?>
    <?php } ?>


    <form action="home.php" method="">
        <input type= "submit" value="NO">
    </form>
    <form action="delete-project.php" method="POST">
        <input type="hidden" name="pid"  value=<?= $row["projectId"] ?>>
        <input type= "submit" value="YES">
    </form>
    </article>


    <?php
    include("../include/footer.php");

    }else{ 
    include("../include/access-denied.php");
    }  
    ?>

    
</body>
</html>


