<?php
include "../includes/config.php";
session_start();

if (!isset($_SESSION['userid'])) {
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
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
        #edit-profile{
            display: flex;
        }
        #edit-profile img{
            width: 110px;
            height: 110px;
            border-radius: 50%;
        }
        #edit-profile p{
            font-size: 30px;
            margin: 2% 0 0 2%;
        }
        #edit-profile a{
            font-size: 20px;
            margin: 2% 0 0 2%;
        }
        #div_bottom{
            width: 90%;
            height: 45vh;
        }
        #div_left{
            float: left;
            width: 18%;
            height: 45vh;
            font-size: 30px;
            margin-top: 5%;
            margin-left: 25%;
        }
        #div_right{
            float: right;
            width: 30%;
            height: 45vh;
            font-size: 30px;
            margin-top: 5%;
            margin-right: 15%;
        }
        td{
            padding-bottom: 17px;
        }
        .btn{
            width: 180px;
            height: 60px;
            border: 0;
            background-color : #eeeeee;
            font-size: 20px;
            margin: 1% 0 0 7%;
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
                    <h1>My Profile</h1>
                    <div class="profile">
                        <p>Hi, Admin!</p>
                        <img src="../assets/img/profile.png" alt="" id="profileImg" style="cursor: pointer;">
                    </div>
                </div>
                <?php
                    include('../includes/menu.php');
                ?>
                <div style="text-align: right; margin: 20px 0;padding-right: 60px; padding-top: 50px;">
                        <button style="background-color: #472B7E; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer; display: inline-flex; align-items: center;">
                        <i class="fa-solid fa-pen" style="margin-right: 5px;"></i>Edit Profile
                        </button>
                </div>

                <div id="edit-profile">
                    <img src="../assets/img/profile.png" alt="">
                    <p>
                        <?php
                            $id = $_SESSION['userid'];
                            $sql = "SELECT name FROM myuser WHERE userid='$id'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo  $row['name'];
                        ?>
                    <br>
                        <?php
                            echo "ID: ", 1000 + $_SESSION['userid'];
                        ?>
                    </p>
                </div>

                <div id="div_bottom" >
                    <div id="div_left">
                        <table>
                            <tr>
                                <td>Age</td>
                            </tr>
                            <tr>
                                <td>Nationality</td>
                            </tr>
                            <tr>
                                <td>Ex. Profession</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                            </tr>
                            <tr>
                                <td>Core Of</td>
                            </tr>
                        </table>
                    </div>
                    <div id="div_right">
                        <table>
                            <tr>
                                <td>: 65</td>
                            </tr>
                            <tr>
                                <td>: America</td>
                            </tr>
                            <tr>
                                <td>: Software Energineer</td>
                            </tr>
                            <tr>
                                <td>: david3342@gmail.com</td>
                            </tr>
                            <tr>
                                <td>: Ms. Jennifer (Alive)</td>
                            </tr>
                        </table>
                        <button type="submit" class="btn">View incidents &gt;</button>
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