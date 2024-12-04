<?php 
//update the project record 

require_once "../include/dbsessions.php";
include("../include/html-head.php");
include("../include/menu.php");

$pid = $_POST['pid'];
$projectName = $_POST['projectName'];
$yarnUsed = $_POST['yarnUsed'];
$hoursSpent = $_POST['hoursSpent'];
$progress = $_POST['progress'];
$notes = $_POST['notes'];

$stmt = $pdo->prepare("UPDATE `projects` 
    SET `projectName` = :projectName, 
        `yarnUsed` = :yarnUsed, 
        `hoursSpent` = :hoursSpent, 
        `progress` = :progress, 
        `notes` = :notes 
    WHERE `projectId` = :pid");

$stmt->bindParam(':projectName', $projectName, PDO::PARAM_STR); 
$stmt->bindParam(':yarnUsed', $yarnUsed, PDO::PARAM_STR); 
$stmt->bindParam(':hoursSpent', $hoursSpent, PDO::PARAM_STR); 
$stmt->bindParam(':progress', $progress, PDO::PARAM_STR); 
$stmt->bindParam(':notes', $notes, PDO::PARAM_STR); 
$stmt->bindParam(':pid', $pid, PDO::PARAM_INT);

?> <content> <?php

if($stmt->execute()){ ?>
    <article>Project record updated!</article>
<?php } else { ?>
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