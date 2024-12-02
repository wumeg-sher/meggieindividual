<?php

require_once "dbsessions.php";
include("html-head.php");

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true ){

?>


<body>

<?php include("menu.php"); ?>

<h1>Add new yarn</h1>

<article>
<a href="home.php">Home</a>
</article>


<article>
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

<input type="submit" value="Submit">
</fieldset>
</article>


<?php 
    include("footer.php");
    
    }else{ 
    include("access-denied.php");
    } 
?>
    
</body>
</html>


