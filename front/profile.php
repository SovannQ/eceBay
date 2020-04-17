<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <h1>Profile page</h1>
        <h1>WELCOME</h1>
        <h2><?= $_SESSION['mail'] ?></h2>
        <a href="logout.php">Sign Out</a>
    </div>
</body>
</html>

