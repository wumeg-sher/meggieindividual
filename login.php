<?php
//login form, also landing page

require_once "dbsessions.php";
include("html-head.php");


?>

<body>
    
    <h1>Agu's yarn stash</h1>

    <div id="menu">
    <img src="assets/mao.png">
    <img src="assets/lineyarn.png">
    </div>


    <div id="message-container"></div>

    <article>
    <p>Welcome to Agu's yarn catalog system </p>
    <p>Please sign in </p>
    </article>
    
    <fieldset>
    <form action="process-login.php" method="POST">
        <h2>Login</h2>
        <input type="text" name="username" placeholder="Username" required>
        <input type="text" name="password" placeholder="Password" required>
        <input type="submit">
    </form>
    </fieldset>

    <button id="showButton">Register</button>

    <div id="registerForm">
        <form action="process-register.php" method="POST">
            <fieldset>
                <h2>Register</h2>
                <input type="text" name="regUsername" placeholder="Username" required>
                <input type="text" name="regPassword" placeholder="Password" required>
                <input type="text" name="regConfirmPassword" placeholder="Confirm password" required>
                <input type="submit">
            </fieldset>
        </form>
    </div>


    <?php
    include ("footer.php");
    ?>


<script src="login.js"></script>
    
</body>
</html>