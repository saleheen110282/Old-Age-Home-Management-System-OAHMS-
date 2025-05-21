<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
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
            height : 90vh;
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
        #div_bottom{
            width: 100%;
            height: 60vh;
            margin-top: 10%;
        }
        #div_bottom_figure{
            width: 80%;
            height: 80vh;
            margin-left: 30%;
        }
        .form_group{
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .form_group label{
            flex: 0 0 130px;
            display: block;
            margin-bottom: 15px;
            font-size: 25px;
            font-family: Arial, Helvetica, sans-serif;
        }
        .form_group input{
            width: 30%;
            padding: 18px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 25px;
            background-color: #D5D5D5;
            font-family: Arial, Helvetica, sans-serif;
        }
        .form_group select{
            width: 30%;
            padding: 18px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 25px;
            background-color: #D5D5D5;
        }
        .btn{
            width: 140px;
            height: 50px;
            border-radius: 12px;
            border: 0;
            background-color: #472B7E;
            color: white;
            font-size: 25px;
            font-family: Arial, Helvetica, sans-serif;
            margin: 2% 0 0 32%;
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
            <div id="main_box">
                <div class="page_top">
                    <h1>Edit Profile</h1>
                    <div class="profile">
                        <p>Hi, Admin!</p>
                        <img src="../assets/img/profile.png" alt="">
                    </div>
                </div>

                <div id="div_bottom">
                    <div id="div_bottom_figure">
                        <div class="form_group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" value="David Truman">
                        </div>
                        <div class="form_group">
                            <label for="age">Age</label>
                            <input type="number" id="age" name="age" min="0" max="120" value="65">
                        </div>
                        <div class="form_group">
                            <label for="country">Nationality</label>
                            <select id="country" name="country">
                                <option disabled selected hidden>Choose nationality</option>
                                <option value="bd">Bangladeshi</option>
                                <option value="in">India</option>
                                <option value="pk">Pakistan</option>
                                <option value="np">Nepal</option>
                                <option value="ca">Canada</option>
                            </select>
                        </div>
                        <div class="form_group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="david3342@gmail.com">
                        </div>
                        <div class="form_group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" value="David3342@">
                        </div>

                        <button type="submit" class="btn">&#11118; Update</button>
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
</div> 
</body>
</html>