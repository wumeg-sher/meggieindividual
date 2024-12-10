<?php
require_once "../include/dbsessions.php";
include("../include/html-head.php");
include("../include/menu.php");

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true ){

$stmt = $pdo -> prepare("SELECT * FROM `users`;");

$stmt->execute();

?>

<body>
<content>
<h1>User Data</h1>
<article>
    Logged in as <?=$_SESSION['username']?>
</article>

<article>
<!-- show the users registered to the site  -->
<ul>
    <?php
     while($row = $stmt-> fetch()) {
        ?><li><?= $row["userId"] ?>
        <?= $row["username"] ?>
        <?= $row["tier"]?>
        </li>
        <?php } ?>
     </ul>
    
     
</content>
<?php include("../include/footer.php");
    
    }else{
        include("../include/access-denied.php");
    } 
    ?>

</body>
</html>


