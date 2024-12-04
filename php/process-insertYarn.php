<?php 
//inserts data from insertYarn.js, does not display a page
require_once "../include/dbsessions.php";

$userId = $_SESSION['userId'];
$yarnType = $_POST['yarnType'];
$yarnColor = $_POST['yarnColor'];
$yarnWeight = $_POST['yarnWeight'];
$quantity = $_POST['quantity'];
$location = $_POST['location'];
$dyeLot = $_POST['dyeLot'];

$stmt = $pdo->prepare ("INSERT INTO `yarn` 
(`userId`, `yarnType`, `yarnColor`, `yarnWeight`, `quantity`, `location`, `dyeLot`) 
VALUES 
('$userId', ?, ?, ?, ?, ?, ?);");

$stmt->bindParam(1, $yarnType, PDO::PARAM_STR); 
$stmt->bindParam(2, $yarnColor, PDO::PARAM_STR); 
$stmt->bindParam(3, $yarnWeight, PDO::PARAM_STR); 
$stmt->bindParam(4, $quantity, PDO::PARAM_STR); 
$stmt->bindParam(5, $location, PDO::PARAM_STR); 
$stmt->bindParam(6, $dyeLot, PDO::PARAM_STR); 

if($stmt->execute()){ 
    $responseText = ["success" => true];
 } else{ 
    $responseText = ["success" => false];
 }
 echo(json_encode($responseText));


?>
