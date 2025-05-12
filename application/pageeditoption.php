<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Edit Option</title>
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
        #main_box_middle{
            width: 40vw;
            height: 50vh;
            margin: 5% 0 3% 25%;
        }
        .form-group{
            margin-bottom: 25px;
        }
        .form-group label{
            display: block;
            margin-bottom: 10px;
        }
        .form-group input{
            width: 50%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        .form-group textarea{
            width: 50%;
            padding: 30px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        .form-group textarea{
            resize: vertical;
            height: 100px;
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
                    <h1>Pages</h1>
                    <div class="profile">
                        <p>Hi, Admin!</p>
                        <img src="../assets/img/profile.png" alt="">
                    </div>
                </div>
                <div style="text-align: right; margin: 20px 0;padding-right: 60px; padding-top: 50px;">
                        <button style="background-color: #472B7E; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer; display: inline-flex; align-items: center;">
                            <i class="fa-solid fa-plus" style="margin-right: 5px;"></i>
                            &#11118; Updates
                        </button>
                </div>

                <div id="main_box_middle">
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" id="name" name="namee" required placeholder="About">
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea id="description" name="description" rows="5" cols="40" required placeholder="Enter your description here..."></textarea>
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