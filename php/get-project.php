<?php
//get project information, does not display a page

require_once "../include/dbsessions.php";

$userId = $_SESSION['userId'];

$stmtGetProject = $pdo->prepare ("SELECT `projectId`, `projectName`, `yarnUsed`, `hoursSpent`, `progress`, `notes`
    FROM `projects`
    WHERE `userId` = $userId;");



$stmtGetProject->execute(); 

$projectData = $stmtGetProject->fetchAll(PDO::FETCH_ASSOC);

if ($projectData) {
    echo json_encode($projectData);
} else {
    echo json_encode(['message' => 'No project data found']);
}
?>