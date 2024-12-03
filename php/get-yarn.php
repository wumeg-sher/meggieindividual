<?php
//get yarn information, does not display a page

require_once "../include/dbsessions.php";

$userId = $_SESSION['userId'];

$stmtGetYarn = $pdo->prepare ("SELECT `yarnId`, `yarnType`, `yarnColor`, `yarnWeight`, `quantity`, `location`,`dyeLot`
    FROM `yarn`
    WHERE `userId` = $userId;");



$stmtGetYarn->execute(); 

$yarnData = $stmtGetYarn->fetchAll(PDO::FETCH_ASSOC);

if ($yarnData) {
    echo json_encode($yarnData);
} else {
    echo json_encode(['message' => 'No yarn data found']);
}
?>