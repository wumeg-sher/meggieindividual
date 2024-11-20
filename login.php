<?php
//login form 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="A webpage that displays news articles relevant to IMM and UX/UI"> 
    <meta name="keywords" content="UX, UI, html, css, javascript, industry, technical"> 
    <link rel="author" content="Meggie Wu" href="https://www.linkedin.com/in/meggie-wu/" />

    <meta name="twitter:card" content="summary"></meta>
    <meta property="og:url" content="#"/>
    <meta property="og:title" content="IMM News Network" />
    <meta property="og:description" content="A site for various articles about UX/UI." />
    <meta property="og:image" content="assets/cat.png" />

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="main.css">
    
    <title>Login form </title>
</head>
<body>

<h1>Login</h1>

    <article>
    <fieldset>
    <form action="process-login.php" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="password" placeholder="Password">
        <input type="submit">
    </form>
    </fieldset>
    </article>

    
</body>
</html>