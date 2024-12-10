<?php
//login form, also landing page

require_once "../include/dbsessions.php";
include("../include/html-head.php");

include("../include/menu-noLinks.php");
?>

<body>
    <content>
    <article>
    <h3>Welcome to Agu's yarn catalog system </h3>
    <p>This is where Agu takes stock of her yarn stash and projects so that she stops spending money on yarn </p>
    <p>You are welcome to register with this site to make use of the catalog to keep track of your own yarn and projects as well </p>
    <p>Please sign in to use this site </p>
    </article>

    <!-- login form -->
    <fieldset>
    <form action="process-login.php" method="POST">
        <h2>Login</h2>
        <input type="text" name="username" placeholder="Username" required>
        <input type="text" name="password" placeholder="Password" required>
        <input type="submit">
    </form>
    </fieldset>
    <br>

<!-- toggle register form button -->
    <button id="showButton" class="loginButton">Register</button>
    <br>

<!-- register form -->
    <div id="registerForm">
    <fieldset>
        <form action="process-register.php" method="POST">
                <h2>Register</h2>
                <input type="text" name="regUsername" placeholder="Username" required>
                <input type="text" name="regPassword" placeholder="Password" required>
                <input type="text" name="regConfirmPassword" placeholder="Confirm password" required>
                <input type="submit" class="loginButton">
        </form>
        </fieldset>
    </div>
    <br>
    <br>
    </content>


    <?php
    include ("../include/footer.php");
    ?>


<script src="../js/login.js"></script>
    
</body>
</html>