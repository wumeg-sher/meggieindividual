<?php
//delete a project record from the database

require_once "../include/dbsessions.php";
include("../include/html-head.php");

$pid = $_POST["pid"];

$stmt = $pdo-> prepare("DELETE FROM `projects` WHERE `projects`.`projectId` =$pid");

include("../include/menu.php");

?> <content> <?php
if($stmt->execute()){ ?>
    <br>
    <article>Project record deleted!</article>
<?php } else { ?>
    <br>
    <article>Something went wrong, please try again later.</article>
<?php }; ?>



<body>

<article>
<button onclick="location.href ='project-page.php';" class="menuButton">Back</button>
</article>
</content>

<?php include("../include/footer.php")?>

    
</body>
</html>