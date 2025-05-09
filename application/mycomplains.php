<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Complains</title>
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

        /**
            Your CSS code goes here..
        */



    </style>
</head>
<body>
<div id="container">
    <?php
            include_once('../includes/sidebarUser.php');
    ?> 

    <div id="right">
        <div id="main">


        <!-- 
        Your HTML code goes here..
        Please make sure that you write html code only in here..
        -->


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