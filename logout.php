<?php
session_start();

session_destroy();

include("html-head.php");
include("menu-noLinks.php");
?>
<h2>Logged out!</h2>
<a href="login.php">Back to main<a>

<?php include("footer.php")?>