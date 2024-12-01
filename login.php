<?php
//login form, also landing page

include("html-head.php");
?>


<body>

    <h1>Agu's yarn stash</h1>


    <div id="menu">
    <img src="assets/mao.png">
    <img src="assets/lineyarn.png">
    </div>


    <h2>Login</h2>
    <article>
    <p>Welcome to Agu's yarn catalog system </p>
    <p>Please sign in </p>
    <fieldset>
    <form action="process-login.php" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="password" placeholder="Password">
        <input type="submit">
    </form>
    </fieldset>
    </article>

    <?php
    include ("footer.php");
    ?>

    
</body>
</html>