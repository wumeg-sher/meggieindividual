<?php

require_once "../include/dbsessions.php";
include("../include/html-head.php");

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true ){

//URL data
$projectId=$_GET["pid"];

//prepare
$stmt = $pdo -> prepare("SELECT * FROM `projects` WHERE `projectId`=$projectId;");

//execute
$stmt->execute();

//process 
?>

<body>

<?php include("../include/menu.php"); ?>

<h1>Update record</h1>

<article>
<a href="home.php">Back</a>

<p>Updating the following information:</p>
<?php if($row = $stmt->fetch()) { ?>
    Project name: <?= $row["projectName"]?>
    <br>Yarn used: <?= $row["yarnUsed"] ?>
    <br>Hours spent: <?= $row["hoursSpent"] ?>
    <br>Progress: <?= $row["progress"] ?>
    <br>Notes: <?= $row["notes"] ?>
<?php } ?>
</article>

<br>

<article>
<form action="process-updateProject.php" method="POST" name="form">
<fieldset>
    <legend>Update Project</legend>

        <label for = "projectName">Project name</label>
        <input type="text" name="projectName" id = "projectName" value=<?= $row["projectName"]?> required>

        <label for = "yarnUsed">Yarn used</label>
        <input type="text" name="yarnUsed" id="yarnUsed" value=<?= $row["yarnUsed"]?> required>

        <label for = "hoursSpent">Hours spent</label>
        <input type="text" name="hoursSpent" id="hoursSpent"  value=<?= $row["hoursSpent"]?> required>

        <label for = "progress">Progress</label>
        <input type="text" name="progress" id="progress"  value=<?= $row["progress"]?> required>

        <label for = "notes">Notes</label>
        <input type="text" name="notes" id="notes" value=<?= $row["notes"]?> required>
    
<input type="hidden" name="pid"  value=<?= $row["projectId"] ?>>
<input type="submit" value="Update">
</fieldset>
</article>

<?php 
    include("../include/footer.php");

    }else{ 
        include("../include/access-denied.php");
    } 
?>
    <script src="../js/updateProject.js"></script>
</body>
</html>


