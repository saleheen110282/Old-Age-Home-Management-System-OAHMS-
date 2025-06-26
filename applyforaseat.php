<?php
include "includes/config.php";
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Good Will Old Age Home</title>
    <link rel="stylesheet" href="includes/css/login.css">
    <style>
        *{
            margin: 0px;
            padding: 0px;
            font-family: "Inria Sans", sans-serif;
        }
        #list-of-donars{
            margin-left: 60px;
        }
    </style>
    <?php
        include_once('includes/font.php');
    ?>
</head>
<body>
    <?php
        include_once('includes/nav.php');
    ?>

    <h1>Apply for a seat</h1>


<?php

    include_once('includes/footer.php');

?>

</body>


    <?php
        include_once('includes/footer.php');
    ?>
</body>
</html>