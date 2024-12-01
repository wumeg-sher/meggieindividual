<?php session_start();

include("html-head.php");

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true ){

//URL data
$yarnId=$_GET["pid"];

//connect
$dsn = "mysql:host=localhost;dbname=yarn;charset=utf8mb4";

$dbusername = "root"; 
$dbpassword = "root";  
$pdo = new PDO($dsn, $dbusername, $dbpassword); 


//prepare
$stmt = $pdo -> prepare("SELECT * FROM `yarn` WHERE `yarnId`=$yarnId;");

//execute
$stmt->execute();

//process 
?>


<body>
<h1>Update record</h1>

<article>
<a href="home.php">Back</a>

<p>Updating the following information:</p>
<?php if($row = $stmt->fetch()) { ?>
    <?= $row["yarnType"] ?>
    <?= $row["yarnColor"] ?>
    weight: <?= $row["yarnWeight"] ?>
    quantity: <?= $row["quantity"] ?>
    location: <?= $row["location"] ?>
    dye lot: <?= $row["dyeLot"] ?>
<?php } ?>
</article>


<article>
<form action="process-update.php" method="POST" name="form">

<fieldset>
    <legend>New Yarn</legend>

        <label for = "firstName">Yarn</label>
        <input type="text" name="yarn" id = "yarn" placeholder="Yarn">

        <label for = "lastName">Label for colour</label>
        <input type="text" name="color" id="color" placeholder="Colour">

        <label for = "email">Label for weight</label>
        <input type="text" name="weight" id="weight"  placeholder="Weight">

        <label for = "quantity">Label for quantity</label>
        <input type="text" name="quantity" id="quantity" placeholder="Quantity">

        <label for = "location">Label for location</label>
        <input type="text" name="location" id="location"  placeholder="Location">

        <label for = "lastName">Label for dye lot</label>
        <input type="text" name="dyeLot" id="dyeLot" placeholder="Dye Lot">

    
<input type="hidden" name="pid"  value=<?= $row["yarnId"] ?>>
<input type="submit" value="Update">
</fieldset>
</article>

<?php }else{ 
    include("access-denied.php");
    } 
    
include("footer.php"); 
?>
    
</body>
</html>


