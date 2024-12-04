<?php
//page for user to add project information to be inserted to db

require_once "../include/dbsessions.php";
include("../include/html-head.php");

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true ){

?>


<body>

<?php include("../include/menu.php"); ?>

<content>
<h1>Add new project</h1>

<article>
<button onclick="location.href ='project-page.php';" class="menuButton">Back</button>
</article>
<br>

<p id="outputElement"></p>


<article>
<fieldset>
    <legend><h3>New Project</h3></legend>

        <label for = "projectName">Project name</label>
        <input type="text" name="projectName" id = "projectName" placeholder="Project name" required>

        <label for = "yarnUsed">Yarn used, enter each type of yarn separated by a comma</label required>
        <input type="text" name="yarnUsed" id="yarnUsed" placeholder="Yarn used">

        <label for = "hoursSpent">Hours spent, in number</label>
        <input type="text" name="hoursSpent" id="hoursSpent"  placeholder="Hours spent">

        <label for = "progress">Progress, in percentage</label>
        <input type="text" name="progress" id="progress" placeholder="Progress">

        <label for = "notes">Notes</label>
        <input type="text" name="notes" id="notes"  placeholder="Notes">

    <input type="submit" value="Submit" id="submitButton">
</fieldset>
</article>
</content>

<?php 
    include("../include/footer.php");
    
    }else{ 
    include("../include/access-denied.php");
    } 
?>

<script src="../js/insert-newProject.js"></script>
    
</body>
</html>


