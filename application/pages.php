<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pages</title>
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
        color: #5A5454;
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
        padding: 60px 30px;
        margin-top: 20px;  
    }
    .card-container h2 {
        font-size: 30px;
        margin-bottom: 20px;
    }
    .card-wraper {
        display: flex;
        justify-content: space-between;
        gap: 20px;
    }

    .card {
        background-color: #fff;
        padding: 50px 20px;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        flex: 1;
        text-align: center;
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
                <div style="text-align: right; margin: 20px 0;padding-right: 60px; padding-top: 50px;">
                    <button style="background-color: #472B7E; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer; display: inline-flex; align-items: center;">
                        <i class="fa-solid fa-plus" style="margin-right: 5px;"></i>
                        New Page
                    </button>
                </div>
                <div class="card-container">
                    <h2>Total Page: 3</h2>
                    <div class="card-wraper">
                        <div class="card">
                            <h3>Home Page</h3>
                        </div>
                        <div class="card">
                            <h3>About</h3>
                        </div>
                        <div class="card">
                            <h3>Contact Us</h3>
                        </div>
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</body>

</html>