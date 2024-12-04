<?php 
//update the yarn record 

require_once "../include/dbsessions.php";
include("../include/html-head.php");
include("../include/menu.php");

$pid = $_POST['pid'];
$yarnType = $_POST['yarn'];
$yarnColor = $_POST['color'];
$yarnWeight = $_POST['weight'];
$quantity = $_POST['quantity'];
$location = $_POST['location'];
$dyeLot = $_POST['dyeLot'];

$stmt = $pdo->prepare("UPDATE `yarn` 
    SET `yarnType` = :yarnType, 
        `yarnColor` = :yarnColor, 
        `yarnWeight` = :yarnWeight, 
        `quantity` = :quantity, 
        `location` = :location, 
        `dyeLot` = :dyeLot
    WHERE `yarnId` = :pid");

$stmt->bindParam(':yarnType', $yarnType, PDO::PARAM_STR); 
$stmt->bindParam(':yarnColor', $yarnColor, PDO::PARAM_STR); 
$stmt->bindParam(':yarnWeight', $yarnWeight, PDO::PARAM_STR); 
$stmt->bindParam(':quantity', $quantity, PDO::PARAM_STR); 
$stmt->bindParam(':location', $location, PDO::PARAM_STR); 
$stmt->bindParam(':dyeLot', $dyeLot, PDO::PARAM_STR); 
$stmt->bindParam(':pid', $pid, PDO::PARAM_INT);

?> <content> <?php

if($stmt->execute()){ ?>
    <article>Yarn record updated!</article>
<?php } else { ?>
    <article>Something went wrong, please try again later.</article>
<?php }; ?>


<body>

<article>
<button onclick="location.href ='home.php';" class="menuButton">Back</button>
</article>

</content>

<?php include("../include/footer.php")?>

    
</body>
</html>