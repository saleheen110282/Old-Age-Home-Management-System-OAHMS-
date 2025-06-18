<?php
include "../includes/config.php";
session_start();

if (!isset($_SESSION['userid'])) {
    header("Location: ../login.php");
    exit;
}
// echo $_SESSION['userid'];
if (isset($_POST['submit'])) {
    $id = $_SESSION['userid']; 
    $sql = "UPDATE myuser SET emergency = 1 WHERE userid = '$id'";
    mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>My Dashboard</title>
    <style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    #container {
        display: flex;
    }

    #right {
        background-color: #eeeeee;
        height: 100vh;
        overflow: scroll;
    }

    #main {
        /* height: 93vh; */
        margin: 20px 60px;
    }

    .dashboard {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #5A5454;
    }

    .dashboard h1 {
        font-size: 40px;
    }

    .profile {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .profile img {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        margin-left: 20px;
    }

    .profile p {
        font-size: 20px;
    }
    .card-container {
        display: grid;
        grid-template-columns: repeat(2,1fr);
        gap: 40px;
        justify-content: space-between;
        margin-top: 20px;
        padding: 40px;
    }
    .card-container .card {
        color: #fff;
        border-radius: 5px;
        padding: 50px 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card-container .card1 {
        background-color: #33CE9F;
    }
    .card-container .card2 {
        background-color: #FFAE7C;
    }
    .card-container .card3 {
        background-color: #FFAE7C;
    }
    .card-container .card4 {
        background-color: #C5ACFF;
    }
    .card-container .card p {
        font-size: 20px;
        margin-bottom: 10px;
        font-weight: 200;
    }
    .card-container .card h2 {
        font-size: 38px;
        margin-top: 10px;
        font-weight: 400;
    }
    </style>
</head>

<body>
    <div id="container">
        <?php
            include_once('../includes/sidebarUser.php');
    ?>

        <div id="right">
            <div id="main">
                <div class="dashboard">
                    <h1>Dashboard</h1>
                    <div class="profile">
                        <p>Hi, <?php 
                            $id = $_SESSION['userid'];
                            $sql = "SELECT username FROM myuser WHERE userid='$id'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo $row['username'];
                        ?>!</p>
                        <img src="../assets/img/profile.png" alt="" id="profileImg" style="cursor: pointer;">
                    </div>
                </div>
                <?php
                    include_once('../includes/menu.php');
                ?>
                <div class="card-container">
                    <div class="card card1">
                        <p>Date</p>
                        <h2><i class="fa-solid fa-calendar"></i>&nbsp;<span id="date"></span></h2>
                    </div>
                    <a href="../notices.php" style="text-decoration: none;">
                        <div class="card card2">
                            <p>Notice</p>
                            <h2><i class="fa-solid fa-circle-exclamation"></i></i> Latest</h2>
                        </div>
                    </a>
                    <div class="card card3">
                        <p>Day</p>
                        <h2><i class="fa-solid fa-smog"></i>&nbsp;<span id="clock"></span></h2>
                    </div>
                    <div class="card card4">
                        <p>Emergency Situation</p>
                        <h2><i class="fa-solid fa-bell"></i> 
                            <?php
                                $id = $_SESSION['userid'];
                                $sql = "SELECT emergency FROM myuser WHERE userid= 31";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if($row['emergency'] == 0){
                                    echo "No";
                                }
                                else{
                                    echo "Yes<br><p style='font-size: 16px; color: red;'>Please go to the admin office immediately!!!</p>";
                                }
                            ?>
                        </h2>
                    </div>
                </div>
                <div>
                    <div style="display: flex; justify-content: flex-end; padding: 0 40px; margin-top: 20px;">
                        <button type="submit" name="submit" style="background-color: #472B7E; color: white; border: none; border-radius: 5px; padding: 12px 24px; font-size: 16px; font-weight: bold; cursor: pointer;">Emergency Help</button>
                    </div>
                </div>
            </div>
            <div id="footer">
                <?php
                include_once('../includes/applicationfooter.php');
        ?>
            </div>
        </div>
    </div>

<script>
    function updateTime() {
        fetch('../includes/time.php')
            .then(response => response.text())
            .then(time => {
                document.getElementById("clock").innerText = time;
            });
    }

    setInterval(updateTime, 1000);
    updateDate(); 
    function updateDate() {
        fetch('../includes/date.php')
            .then(response => response.text())
            .then(date => {
                document.getElementById("date").innerText = date;
            });
    }

    setInterval(updateTime, 60000);
    updateDate(); 
</script>


</body>

</html>