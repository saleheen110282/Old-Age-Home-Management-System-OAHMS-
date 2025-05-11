<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
        grid-template-columns: repeat(2, 1fr);
        gap: 40px;
        justify-content: space-between;
        margin-top: 20px;
        padding: 30px;
        text-align: center;
    }

    .card-container .card {
        color: #fff;
        border-radius: 5px;
        padding: 40px 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-container .card1 {
        background-color: #33CE9F;
    }

    .card-container .card2 {
        background-color: #FFAE7C;
    }

    .card-container .card3 {
        background-color: #FF8952;
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
            include_once('../includes/sidebarAdmin.php');
    ?>

        <div id="right">
            <div id="main">
                <div class="dashboard">
                    <h1>Admin Dashboard</h1>
                    <div class="profile">
                        <p>Hi, Admin!</p>
                        <img src="../assets/img/profile.png" alt="">
                    </div>
                </div>
                <div style="display: flex; justify-content: flex-end; margin: 20px 30px 0;">
                    <div style="position: relative; display: flex; align-items: center;">
                        <input type="text" placeholder="Search By ID." name="" id="" style="padding: 10px 15px; border-radius: 5px; border: 1px solid #ccc; width: 250px;">
                        <i class="fa-solid fa-magnifying-glass" style="position: absolute; right: 15px; color: #666;"></i>
                    </div>
                </div>
                <div class="card-container">
                    <div class="card card1">
                        <p>Member of Senior Citizen</p>
                        <h2><i class="fa-solid fa-user"></i></i> 50</h2>
                    </div>
                    <div class="card card2">
                        <p>Number of Services</p>
                        <h2><i class="fa-solid fa-suitcase-medical"></i></i></i> 5</h2>
                    </div>
                    <div class="card card3">
                        <p>Number of Beds</p>
                        <h2><i class="fa-solid fa-bed"></i></i></i> 80</h2>
                    </div>
                    <div class="card card4">
                        <p>Number of Complains</p>
                        <h2><i class="fa-solid fa-list-ul"></i></i> 10</h2>
                    </div>
                </div>
                <div>
                    <div style="display: flex; justify-content: flex-end; padding: 0 40px; margin-top: 20px;">
                        <button
                            style="background-color: #472B7E; color: white; border: none; border-radius: 5px; padding: 12px 24px; font-size: 16px; font-weight: bold; cursor: pointer;">Emergency
                            Help</button>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</body>

</html>