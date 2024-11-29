<?php session_start();

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true ){


//connect
$dsn = "mysql:host=localhost;dbname=yarn;charset=utf8mb4";

$dbusername = "root"; 
$dbpassword = "";  
$pdo = new PDO($dsn, $dbusername, $dbpassword); 


//prepare
$stmt = $pdo -> prepare("SELECT * FROM `yarn` WHERE `yarnId`=$yarnId;");

//execute
$stmt->execute();

//process 


?>


<body>

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
    
</body>
</html>

<?php }else{ ?>
    <h1>Access denied, please log in to see this page<h1>
    <article> <a href="login-form">Log in here</a>
    </article>
    <?php } ?>
