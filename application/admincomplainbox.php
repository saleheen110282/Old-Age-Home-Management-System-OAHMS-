<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
            height: 100vh;
        }
        #main{ 
            height: 93vh;
        }
        #main_box{
            margin: 20px 50px;
            color: #5A5454;
        }
        .page_top{
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #5A5454;
        }
        .page_top h1{
            font-size: 40px;
        }
        .profile{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .profile img{
            width: 70px;
            height: 70px;
            border-radius: 50%;
            margin-left: 30px;
        }
        .profile p{
            font-size: 20px;
        }
        #main_box_top{
            width: 38vw;
            height: 32vh;
            margin: 5% 0 3% 25%;
            background-color: white;
        }
        #main_box_bottom{
            width: 38vw;
            height: 32vh;
            margin: 5% 0 3% 25%;
            background-color: white;
        }
        .box{
            width: 36vw;
            height: 20vh;
            margin-top; 30px;
            margin-left: 20px;
        }
        .box_text{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: auto;
            font-size: 20px;
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
            <div id="main_box">
                <div class="page_top">
                    <h1>Complain Box</h1>
                    <div class="profile">
                        <p>Hi, Admin!</p>
                        <img src="../assets/img/profile.png" alt="">
                    </div>
                </div>

                <div id="main_box_top">
                    <div class="box">
                        <p class="box_text"><b>Title:</b> Irresponsibility of house-keeping<br><br>
                        <b>Description:</b> Our house-keeper, Mr. John is not working  properly. He denies to do his job with a good way.</p>
                    </div>
                </div>
                <div id="main_box_bottom">
                    <div class="box">
                        <p class="box_text"><b>Title:</b> Irresponsibility of house-keeping<br><br>
                        <b>Description:</b> Our house-keeper, Mr. John is not working  properly. He denies to do his job with a good way.</p>
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