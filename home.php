<?php session_start();
//process login

//connect
$dsn = "mysql:host=localhost;dbname=yarn;charset=utf8mb4";

$dbusername = "root"; 
$dbpassword = "";  
$pdo = new PDO($dsn, $dbusername, $dbpassword); 

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <script type="text/javascript" src="js/lib/jquery-1.11.1.min.js" ></script>
    <script> 
      $(function(){ $("head").load("header.html") });
    </script>

    <title>Homepage</title>
</head>
<body>


<h1>Agu's yarn stash</h1>

<div id="menu">
<img src="assets/mao.png">
<img src="assets/lineyarn.png">
</div>

<article>
    <table id="yarnTable">Yarn
        <tr>
           <td></td> 
        </tr>
     </table>
    </article>




    <section id="footer">footer
    </section>
    
</body>
</html>


