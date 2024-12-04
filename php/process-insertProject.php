<?php 
//inserts data from insertProject.js, does not display a page
require_once "../include/dbsessions.php";

$userId = $_SESSION['userId'];
$projectName = $_POST['projectName'];
$yarnUsed = $_POST['yarnUsed'];
$hoursSpent = $_POST['hoursSpent'];
$progress = $_POST['progress'];
$notes = $_POST['notes'];

$stmt = $pdo->prepare ("INSERT INTO `projects` 
(`userId`, `projectName`, `yarnUsed`, `hoursSpent`, `progress`, `notes`) 
VALUES 
('$userId', ?, ?, ?, ?, ?);");

$stmt->bindParam(1, $projectName, PDO::PARAM_STR); 
$stmt->bindParam(2, $yarnUsed, PDO::PARAM_STR); 
$stmt->bindParam(3, $hoursSpent, PDO::PARAM_STR); 
$stmt->bindParam(4, $progress, PDO::PARAM_STR); 
$stmt->bindParam(5, $notes, PDO::PARAM_STR); 

if($stmt->execute()){ 
    $responseText = ["success" => true];
 } else{ 
    $responseText = ["success" => false];
 }
 echo(json_encode($responseText));


?>
