<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accommodation</title>
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
        margin: 0 60px;
        margin-top: 20px;
    }

    .accomm {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #5A5454;
    }

    .accomm h1 {
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

    .accommodation-card {
        background-color: #D9D9D9;
        color: #5A5454;
        padding: 35px;
        border-radius: 5px;
        font-size: 32px;
        margin: 80px 55px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .accommodation-card p {
        margin: 20px 0;
    }

    .accommodation-card i {
        margin-right: 10px;
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
                <div class="accomm">
                    <h1>Accommodation</h1>
                    <div class="profile">
                        <p>Hi, David!</p>
                        <img src="../assets/img/profile.png" alt="">
                    </div>
                </div>
                <div class="accommodation-card">
                    <p><i class="fa-solid fa-person-shelter"></i> Room No. : 31</p>
                    <p><i class="fa-solid fa-bed"></i> Bed No. : 3</p>
                    <p><i class="fa-solid fa-broom"></i> House-keeper: Mr. John</p>
                    <p><i class="fa-solid fa-house-chimney"></i> Accommodation Type: Free</p>
                </div>
                <div>
                    <a href="../services.php" style="display: block; width: fit-content; margin-left: auto; margin-right: 55px; padding: 10px 20px; color: #5A5454; cursor: pointer; text-decoration: none; font-size:20px">Change Your Plan <i class="fa-solid fa-caret-right"></i></a>
                </div>
            </div>
            <div id="footer">
                <?php
                include_once('../includes/applicationfooter.php');
        ?>
            </div>
        </div>
    </div>



</body>

</html>