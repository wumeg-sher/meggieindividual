<div class="title">
    <h1> <a href="home.php">Agu's Yarn Stash</a>
    </h1>
</div>

<div id="menu">
<img src="assets/mao.png">
<img src="assets/lineyarn.png">
</div>



<div class="links">
    <?php 
    if($_SESSION['tier']=="admin"){ ?>
        <a href= "users.php">Users</a>
    <?php } ?>
    <a href="logout.php">Logout</a>
</div>