<?php
//page that allows user to enter yarn information to be updated to the db

require_once ".../include/dbsessions.php";
include("../include/html-head.php");

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true ){

//URL data
$yarnId=$_GET["pid"];

//prepare
$stmt = $pdo -> prepare("SELECT * FROM `yarn` WHERE `yarnId`=$yarnId;");

//execute
$stmt->execute();

//process 
?>


<body>

<?php include("../include/menu.php"); ?>

<h1>Update record</h1>

<article>
<a href="home.php">Back</a>

<p>Updating the following information:</p>
<?php if($row = $stmt->fetch()) { ?>
    Yarn: <?= $row["yarnType"] ?>
    <br>Colour: <?= $row["yarnColor"] ?>
    <br>Weight: <?= $row["yarnWeight"] ?>
    <br>Quantity: <?= $row["quantity"] ?>
    <br>Location: <?= $row["location"] ?>
    <br>Dye lot: <?= $row["dyeLot"] ?>
<?php } ?>
</article>

<br>


<article>
<form action="process-update.php" method="POST" name="form">

<fieldset>
    <legend>Update Yarn</legend>

        <label for = "yarn">Yarn</label>
        <input type="text" name="yarn" id = "yarn" value=<?= $row["yarnType"] ?> required>

        <label for = "color">Colour</label>
        <input type="text" name="color" id="color" value=<?= $row["yarnColor"] ?> required>

        <label for = "weight">Yarn weight</label>
        <input type="text" name="weight" id="weight"  value=<?= $row["yarnWeight"] ?> required>

        <label for = "quantity">Quantity</label>
        <input type="text" name="quantity" id="quantity" value=<?= $row["quantity"] ?> required>

        <label for = "location">Location</label>
        <input type="text" name="location" id="location"  value=<?= $row["location"] ?> required>

        <label for = "dyeLot">Dye lot</label>
        <input type="text" name="dyeLot" id="dyeLot" value=<?= $row["dyeLot"] ?> required>

    
<input type="hidden" name="pid"  value=<?= $row["yarnId"] ?>>
<input type="submit" value="Update">
</fieldset>
</article>

<?php 
include("../include/footer.php");

}else{ 
    include("../include/access-denied.php");
    } 
?>

<script src="../js/updateYarn.js"></script>
    
</body>
</html>


