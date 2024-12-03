<div class="title">
    <h1> Agu's Yarn Stash<a href="../php/home.php"></a>
    </h1>
</div>

<div id="menupics">
<img src="../assets/mao.png">
<img src="../assets/lineyarn.png">
</div>




<div class="links">
    <?php 
    if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true ){ ?>
        <a href="../php/logout.php">Logout</a>
        <a href="../php/home.php">Home</a>
        <?php if($_SESSION['tier']=="admin"){ ?>
        <a href= "../php/users.php">Users</a>
    <?php } 
    } else { ?>
        <a href="../php/login.php">Log in</a>
    <?php } ?>
</div>
