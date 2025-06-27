<?php
include "includes/config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Good Will Old Age Home</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
    </style>
    <link rel="stylesheet" href="./includes/css/index.css">
    <?php
        include_once('includes/font.php');
    ?>
</head>
<body>
    <?php
        include_once('includes/nav.php');
    ?>
    <h1>Payment Successful!!!</h1>
    <a style="font-size: 20px; background-color: light-green; color: black; padding: 10px;" href="index.php">Go to home Page</a>
    <?php
        include_once('includes/footer.php');
    ?>
    <script src="./scripts/index.js"></script>
</body>
</html>