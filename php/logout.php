<?php
//logs the user out
session_start();

session_destroy();

include("../include/html-head.php");
include("../include/menu-noLinks.php");
?>
<content>
<h2>Logged out!</h2>
<button onclick="location.href ='login.php';" class="menuButton">Back to main page</button>
<br>
</content>
<?php include("../include/footer.php")?>