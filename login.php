<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/database.php";
    $email = $mysqli->real_escape_string($_POST["email"]);
    $sql = "SELECT * FROM user
            WHERE email = '$email'";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user){
      if  (password_verify($_POST["password"], $user["password_hash"])){
        session_start();
        $_SESSION["user_id"] = $user["id"];
        header("Location: index.php");
        exit;

    }
 }

 $is_invalid = true;
} 

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
    <title>login</title>
  </head>
  <body>
    <h1>login</h1>
    <?php if ($is_invalid): ?>
        <em>Invalid Login</em>
    <?php endif;?>

    <form method="post">
        <label for="email">email</label>
        <input type="email" name="email" id="email">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <button>Log in</button>
    </form>
</body>
</html>