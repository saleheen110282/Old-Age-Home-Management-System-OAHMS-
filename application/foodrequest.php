<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Request</title>
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
            background-color: #f8f8f8;
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

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        thead {
            background-color: #4b2e83;
            color: white;
        }

        th, td {
            text-align: left;
            padding: 12px;
        }

        tbody tr:nth-child(even) {
            background-color: #e9e9e9;
        }

        tbody tr:nth-child(odd) {
            background-color: #f7f7f7;
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
            <h1>Food Request</h1>
            <div class="profile">
                <span>Hi Cook!</span>
                <img src="oldman.png" alt="Cook Image">
            </div>
            </div>

            <table>
            <thead>
                <tr>
                <th>User ID</th>
                <th>Bresk Fast</th>
                <th>Lunch</th>
                <th>Dinner</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>01</td>
                <td>Rice and Egg</td>
                <td>Fried Rice</td>
                <td>Bread</td>
                </tr>
                <tr>
                <td>02</td>
                <td>Rice and Egg</td>
                <td>No</td>
                <td>Bread</td>
                </tr>
                <tr>
                <td>03</td>
                <td>Rice and Egg</td>
                <td>Fried Rice</td>
                <td>Bread</td>
                </tr>
                <tr>
                <td>04</td>
                <td>Rice and Egg</td>
                <td>Fried Rice</td>
                <td>Bread</td>
                </tr>
                <tr>
                <td>05</td>
                <td>Rice and Egg</td>
                <td>Fried Rice</td>
                <td>Bread</td>
                </tr>
                <tr>
                <td>06</td>
                <td>Rice and Egg</td>
                <td>Fried Rice</td>
                <td>Bread</td>
                </tr>
            </tbody>
            </table>

            <div class="footer">
            <a href="#">View Full Analytics &rarr;</a>
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