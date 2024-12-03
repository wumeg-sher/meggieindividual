<div class="title">
    <h1> <a href="../php/home.php">Agu's Yarn Stash</a>
    </h1>
</div>

<div id="menu">
<img src="../assets/mao.png">
<img src="../assets/lineyarn.png">
</div>



<div class="links">
    <a href="../php/home.php">Home</a>
    <?php 
    if($_SESSION['tier']=="admin"){ ?>
        <a href= "../php/users.php">Users</a>
    <?php } ?>
    <a href="../php/logout.php">Logout</a>
</div>