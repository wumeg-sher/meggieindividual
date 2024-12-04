<?php 
//main page, displays yarn stash information

require_once "../include/dbsessions.php";
include("../include/html-head.php");

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true ){

$userId = $_SESSION['userId'];

//prepare
$stmt = $pdo -> prepare("SELECT * FROM `yarn`;");

//execute
$stmt->execute();
?>


<body>
    
    <?php include("../include/menu.php"); ?>
    <content>
    <h1>Yarn stash</h1>

    <article>
        Logged in as <?=$_SESSION['username']?>
    </article>

    <article>
    <button onclick="location.href ='insert-newYarn.php';" class="menuButton">Add new yarn entry</button>
    <button onclick="location.href ='project-page.php';" class="menuButton">Project page</button>
    </article>

    <div >
    <table class="table" id="yarnTable">
                <thead>
                    <tr>
                        <th>Yarn</th>
                        <th>Colour</th>
                        <th>Weight</th>
                        <th>Quantity</th>
                        <th>Location</th>
                        <th>Dye Lot</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
    </div>

</content>
    <?php 
    include("../include/footer.php");

    }else{ 
    include("../include/access-denied.php");
    } 
    ?>

<script src="../js/home.js"></script>
    
</body>
</html>


