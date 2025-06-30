<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cook Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            width: 75vw;
            height: 100vh;
            overflow-y: scroll;
        }

        #main {
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
            include_once('../includes/sidebarCook.php');
    ?> 

    <div id="right">
        <div id="main">
            <div class="dashboard">
                <h1>Cook Dashboard</h1>
                <div class="profile">
                    <p>Hi, Cook!</p>
                    <img src="../assets/img/profile.png" alt="" id="profileImg" style="cursor: pointer;">
                </div>
            </div>

            <div class="card-container">
                <div class="card card1">
                    <p>Number of Food Request</p>
                    <h2><i class="fa-solid fa-utensils"></i>&nbsp;34</h2>
                </div>

                <div class="card card2">
                    <p>Full Day Meal</p>
                    <h2><i class="fa-solid fa-bowl-food"></i>&nbsp;23</h2>
                </div>

                <div class="card card3">
                    <p>Satisfied Consumer</p>
                    <h2><i class="fa-solid fa-face-smile"></i>&nbsp;36</h2>
                </div>

                <div class="card card4">
                    <p>Food Complain</p>
                    <h2><i class="fa-solid fa-file-pen"></i>&nbsp;5</h2>
                </div>
            </div>
        </div>
    </div>
</div>   
</body>
</html>