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

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    background: white;
    padding: 30px 40px;
    margin: auto;
    margin-top: 30px;
    margin-bottom: 30px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    border-radius: 8px;
}

h1 {
    margin-top: 0;
    font-size: 28px;
    color: #333;
}

h3 {
    font-weight: 400;
    font-size: 16px;
    border-bottom: 1px solid #333;
    display: inline-block;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px 30px;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group.full {
    grid-column: span 2;
}

label {
    font-size: 14px;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"],
input[type="number"],
input[type="email"],
input[type="tel"] {
    padding: 8px;
    border: none;
    background-color: #e3e3e3;
    border-radius: 4px;
    font-size: 14px;
}

.submit-btn {
    margin-top: 25px;
    background-color: #78332b;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 15px;
    border-radius: 5px;
    cursor: pointer;
    align-self: center;
}

.submit-btn:hover {
    background-color: #5f2923;
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

    <div class="container">
        <h1>Apply for a seat</h1>
        <h3>Personal Information</h3>
        <form>
            <div class="form-grid">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username">
                </div>
                <div class="form-group">
                    <label>Care Of</label>
                    <input type="text" name="careof">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password">
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="tel" name="phone">
                </div>
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="fullname">
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input type="number" name="age">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email">
                </div>
                <div class="form-group">
                    <label>Ex. Profession</label>
                    <input type="text" name="profession">
                </div>
                <div class="form-group">
                    <label>Nationality</label>
                    <input type="text" name="nationality">
                </div>
                <div class="form-group">
                    <label>Accommodation Type</label>
                    <input type="text" name="nationality">
                </div>
            </div>
            <a href="transaction.php" class="submit-btn">Apply</a>
        </form>
    </div>


<?php

    include_once('includes/footer.php');

?>

</body>


    <?php
        include_once('includes/footer.php');
    ?>
</body>
</html>