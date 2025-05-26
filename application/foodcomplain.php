<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Complain</title>
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
            height : 88vh;
            margin-top : 5vh;
        }

    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        color: #333;
        }

        .container {
        max-width: 600px;
        margin: auto;
        }

        .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        }

        .header h1 {
        font-size: 28px;
        color: #444;
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

        .complaint-card {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .complaint-card p {
        margin: 8px 0;
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
            <h1>Food Complain</h1>
            <div class="profile">
                <span>Hi Cook!</span>
                <img src="oldman.png" alt="Cook Image">
            </div>
            </div>

            <div class="complaint-card">
            <p><strong>Title:</strong> Irresponsibility of house-keeping</p>
            <p><strong>Description:</strong> Our house-keeper, Mr. John is not working properly. He denies to do his job with a good way.</p>
            </div>

            <div class="complaint-card">
            <p><strong>Title:</strong> Irresponsibility of house-keeping</p>
            <p><strong>Description:</strong> Our house-keeper, Mr. John is not working properly. He denies to do his job with a good way.</p>
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