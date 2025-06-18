<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cook Dashboard</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        #container{
            display : flex;
        }
        #right{
            background-color : #eeeeee;
        }
        #main{ 
            height : 93vh;
        }

        body {
        font-family: Arial, sans-serif;
        }

        .container {
        max-width: 700px;
        margin: auto;
        }

        .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        }

        .header h1 {
        font-size: 28px;
        }

        .profile {
        display: flex;
        align-items: center;
        gap: 10px;
        }

        .profile img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        }

        .dashboard {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        margin-top: 30px;
        }

        .card {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 12px;
        text-align: center;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        color: white;
        }

        .green {
        background-color: #33CE9F;
        }

        .orange {
        background-color: #FFAE7C;
        }

        .purple {
        background-color: #C5ACFF;
        }

        .card .title {
        font-size: 14px;
        margin-bottom: 10px;
        }

        .card .icon {
        font-size: 24px;
        margin-bottom: 5px;
        }

        .card .number {
        font-size: 22px;
        font-weight: bold;
        }



    </style>
</head>
<body>
<div id="container">
    <?php
            include_once('../includes/sidebarCook.php');
    ?> 

    <div id="right">
        <div id="main">



        
        <div class="container">
            <div class="header">
            <h1>Cook Dashboard</h1>
            <div class="profile">
                <span>Hi Cook!</span>
                <img src="../assets/img/profile.png" alt="Cook Image">
            </div>
            </div>

            <div class="dashboard">
            <div class="card green">
                <p class="title">Number of Food Request</p>
                <p class="icon">👤</p>
                <p class="number">34</p>
            </div>

            <div class="card orange">
                <p class="title">Full Day Meal</p>
                <p class="icon">👤</p>
                <p class="number">23</p>
            </div>

            <div class="card orange">
                <p class="title">Satisfied Consumer</p>
                <p class="icon">👤</p>
                <p class="number">36</p>
            </div>

            <div class="card purple">
                <p class="title">Food Complain</p>
                <p class="icon">🧾</p>
                <p class="number">5</p>
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



</body>
</html>