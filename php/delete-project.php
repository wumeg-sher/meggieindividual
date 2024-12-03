<?php
//delete a project record from the database

require_once "../include/dbsessions.php";
include("../include/html-head.php");

$pid = $_POST["pid"];


//prepare
$stmt = $pdo-> prepare("DELETE FROM `projects` WHERE `projects`.`projectId` =$pid");


include("../include/menu.php");

//execute
if($stmt->execute()){ ?>
    <article>Project record deleted!</article>
<?php } else { ?>
    <article>Error</article>
<?php }; ?>


<body>

<article>
    <a href="project-page.php">Back</a>
</article>

<?php include("../include/footer.php")?>

    
</body>
</html>