<?php
include "includes/config.php";
session_start();

if (isset($_POST['submit'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM myuser WHERE email='$email' AND userpassword='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['userid'] = $row['userid'];
        $id = $_SESSION['userid'];
        $sql = "SELECT role FROM myuser WHERE userid='$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $role = $row['role'];
        if($role == "resident"){
            header("Location: /Old-Age-Home-Management-System-OAHMS-/application/userDashboard.php");
            exit();
        }
        else if($role == "admin"){
            header("Location: /Old-Age-Home-Management-System-OAHMS-/application/adminDashboard.php");
            exit();
        }
        else if($role == "cook"){
            header("Location: /Old-Age-Home-Management-System-OAHMS-/application/cookDashboard.php");
            exit();
        }
    } else {
        echo "Invalid email or password.";
    }
}
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
    </style>
    <?php
        include_once('includes/font.php');
    ?>
</head>
<body>
    <?php
        include_once('includes/nav.php');
    ?>


    <section class="login-section">

    <img src="assets/img/EW.jpg" alt="Elderly walking" class="background-img">

    <div class="login-box">

    <h2>Login</h2>

    <form method="post">

        <label>Email</label>

        <input type="email" name="email" placeholder="Enter your Email">

        

        <label>Password</label>

        <input type="password" name="password" placeholder="Enter your password">

        

        <p><a href="#">Apply for a seat</a></p>

        

        <button type="submit" name="submit">Login</button>

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