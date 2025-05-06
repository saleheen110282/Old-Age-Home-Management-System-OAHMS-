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
        }
    </style>
</head>
<body>
    <?php
        include_once('includes/nav.php');
    ?>


    <section class="login-section">

    <img src="assets/img/EW.jpg" alt="Elderly walking" class="background-img">

    <div class="login-box">

    <h2>Login</h2>

    <form>

        <label>Email</label>

        <input type="email" placeholder="Enter your Email">

        

        <label>Password</label>

        <input type="password" placeholder="Enter your password">

        

        <p><a href="#">Apply for a seat</a></p>

        

        <button type="submit">Login</button>

    </form>

    </div>

    </section>


<?php

    include_once('includes/footer.php');

?>

</body>


    <?php
        include_once('includes/footer.php');
    ?>
</body>
</html>