<?php
//logs the user out
session_start();

session_destroy();

include("../include/html-head.php");
include("../include/menu-noLinks.php");
?>
<h2>Logged out!</h2>
<a href="login.php">Back to main<a>

<?php include("../include/footer.php")?>