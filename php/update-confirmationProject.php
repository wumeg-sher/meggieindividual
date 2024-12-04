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
<content>
<h1>Update record</h1>

<article>
<button onclick="location.href ='project-page.php';" class="menuButton">Back</button>
<br>

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
    <legend><h3>Update Project</h3></legend>

        <label for = "projectName">Project name</label>
        <input type="text" name="projectName" id = "projectName" value=<?= $row["projectName"]?> required>

        <label for = "yarnUsed">Yarn used, enter each type of yarn separated by a comma</label>
        <input type="text" name="yarnUsed" id="yarnUsed" value=<?= $row["yarnUsed"]?> required>

        <label for = "hoursSpent">Hours spent, in number</label>
        <input type="text" name="hoursSpent" id="hoursSpent"  value=<?= $row["hoursSpent"]?> >

        <label for = "progress">Progress, in percentage</label>
        <input type="text" name="progress" id="progress"  value=<?= $row["progress"]?> >

        <label for = "notes">Notes</label>
        <input type="text" name="notes" id="notes" value=<?= $row["notes"]?> >
    
<input type="hidden" name="pid"  value=<?= $row["projectId"] ?>>
<input type="submit" value="Update">
</fieldset>
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


