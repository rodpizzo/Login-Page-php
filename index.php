<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"
    />
    <title>Home</title>
  </head>
  <body>
    <h1>Home</h1>

    <?php if (isset($_SESSION["user_id"])): ?>
        <p>You are logged in.</p>
        <p><a href="logout.php">Log out</a></p>
        <?php else: ?>
            <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
    <?php endif; ?>
        </body>
        </htm>