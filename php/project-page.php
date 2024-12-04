<?php
//page that displays the projects the user has saved to the db

require_once "../include/dbsessions.php";
include("../include/html-head.php");

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true ){

$userId = $_SESSION['userId'];

?>

<body>

<?php include("../include/menu.php"); ?>
<content>
<h1>Project Page</h1>

    <article>
        Logged in as <?=$_SESSION['username']?>
    </article>

    <article>
    <button onclick="location.href ='insert-newProject.php';" class="menuButton">Add new project entry</button>
    <button onclick="location.href ='home.php';" class="menuButton">Yarn page</button>
    </article>

    <div>
    <table class="table" id="projectTable">
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

</content>
<?php 
    include("../include/footer.php");
    
    }else{
        include("../include/access-denied.php");
    } 
    ?>


<script src="../js/project-page.js"></script>

    
</body>
</html>


