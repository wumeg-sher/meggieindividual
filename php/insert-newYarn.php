<?php
//page for user to add yarn information to be inserted to db

require_once "../include/dbsessions.php";
include("../include/html-head.php");

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true ){

?>


<body>

<?php include("../include/menu.php"); ?>

<content>
<h1>Add new yarn</h1>

<article>
<button onclick="location.href ='home.php';" class="menuButton">Back</button>
</article>
<br>

<p id="outputElement"></p>

<article>
<fieldset>
    <legend><h3>New Yarn</h3></legend>

        <label for = "yarn">Yarn</label>
        <input type="text" name="yarn" id = "yarn" placeholder="Yarn" required>

        <label for = "color">Colour</label>
        <input type="text" name="color" id="color" placeholder="Colour" required>

        <label for = "weight">Weight</label>
        <input type="text" name="weight" id="weight"  placeholder="Weight" required>

        <label for = "quantity">Quantity</label>
        <input type="text" name="quantity" id="quantity" placeholder="Quantity" required>

        <label for = "location">Location</label>
        <input type="text" name="location" id="location"  placeholder="Location">

        <label for = "dyeLot">Dye lot</label>
        <input type="text" name="dyeLot" id="dyeLot" placeholder="Dye Lot">

    <input type="submit" value="Submit" id="submitButton">
</fieldset>
</article>
</content>

<?php 
    include("../include/footer.php");
    
    }else{ 
    include("../include/access-denied.php");
    } 
?>

<script src="../js/insert-newYarn.js"></script>
    
</body>
</html>


