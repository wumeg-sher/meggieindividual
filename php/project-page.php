<?php
//page that displays the projects the user has saved to the db

require_once "../include/dbsessions.php";
include("../include/html-head.php");

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true ){

$userId = $_SESSION['userId'];

?>

<body>

<?php include("../include/menu.php"); ?>

<h1>Project Page</h1>

    <article>
        Logged in as <?=$_SESSION['username']?>
    </article>

    <article>
    <a href="insert-newProject.php">Add new entry</a>
    <a href="home.php">Yarn page</a>
    </article>

    <div>
    <table id="projectTable">
                <thead>
                    <tr>
                        <th>Project</th>
                        <th>Yarn Used</th>
                        <th>Hours Spent</th>
                        <th>Progress</th>
                        <th>Notes</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
    </div>


<?php 
    include("../include/footer.php");
    
    }else{
        include("../include/access-denied.php");
    } 
    ?>


<script src="../js/project-page.js"></script>

    
</body>
</html>


