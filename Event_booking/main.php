<?php
session_start();
    if(!isset($_SESSION["email"])){
        header("location:index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <?=$_SESSION["email"];?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>