<?php
//page for user to add yarn information to be inserted to db

require_once "../include/dbsessions.php";
include("../include/html-head.php");

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true ){

?>


<body>

<?php include("../include/menu.php"); ?>

<h1>Add new yarn</h1>

<article>
<a href="home.php">Back</a>
</article>


<article>
<fieldset>
    <legend>New Yarn</legend>

        <label for = "yarn">Yarn</label>
        <input type="text" name="yarn" id = "yarn" placeholder="Yarn">

        <label for = "color">Colour</label>
        <input type="text" name="color" id="color" placeholder="Colour">

        <label for = "weight">Weight</label>
        <input type="text" name="weight" id="weight"  placeholder="Weight">

        <label for = "quantity">Quantity</label>
        <input type="text" name="quantity" id="quantity" placeholder="Quantity">

        <label for = "location">Location</label>
        <input type="text" name="location" id="location"  placeholder="Location">

        <label for = "dyeLot">Dye lot</label>
        <input type="text" name="dyeLot" id="dyeLot" placeholder="Dye Lot">

<input type="submit" value="Submit">
</fieldset>
</article>


<?php 
    include("../include/footer.php");
    
    }else{ 
    include("../include/access-denied.php");
    } 
?>

<script src="../js/insert-newYarn.js"></script>
    
</body>
</html>

