<?php
//delete a yarn record from the database

require_once "../include/dbsessions.php";
include("../include/html-head.php");

$pid = $_POST["pid"];


//prepare
$stmt = $pdo-> prepare("DELETE FROM `yarn` WHERE `yarn`.`yarnId` =$pid");


include("../include/menu.php");

//execute
if($stmt->execute()){ ?>
    <article>Yarn record deleted!</article>
<?php } else { ?>
    <article>Error</article>
<?php }; ?>


<body>

<article>
    <a href="home.php">Back</a>
</article>

<?php include("../include/footer.php")?>

    
</body>
</html>