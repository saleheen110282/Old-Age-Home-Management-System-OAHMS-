<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health</title>
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
    }

    #main {
        /* height: 93vh; */
        margin: 0 60px;
        margin-top: 100px;
        color: #5A5454;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #5A5454;
    }

    .header h1 {
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

    .health-container {
        padding: 80px 40px;
        display: flex;
        gap: 40px;
        justify-content: space-between;
    }

    .health-container h2 {
        font-size: 25px;
        margin-bottom: 20px;
        font-weight: 400;
    }

    .morning {
        margin-bottom: 50px;
    }

    ol div {
        display: flex;
        gap: 20px;
        font-size: 20px;
        justify-content: space-around;
        align-items: center;
        margin-bottom: 10px;
        margin-left: 40px;
    }

    ol div button {
        background-color: #472B7E;
        color: white;
        border: none;
        padding: 5px 20px;
        border-radius: 5px;
        cursor: pointer;
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
                <div class="header">
                    <h1>Health</h1>
                    <div class="profile">
                        <p>Hi, David!</p>
                        <img src="../assets/img/profile.png" alt="">
                    </div>
                </div>
                <div class="health-container">
                    <div class="left">
                        <div class="morning">
                            <h2>Morning</h2>
                            <ol>
                                <div>
                                    <li>Napa</li> <button>Delete</button>
                                </div>
                            </ol>
                        </div>
                        <div class="Dinner">
                            <h2>Dinner</h2>
                            <ol>
                                <div>
                                    <li>Napa</li> <button>Delete</button>
                                </div>
                            </ol>
                        </div>

                    </div>
                    <div class="right">
                        <h2>Lunch</h2>

                    </div>

                </div>
                <div class="new-medecine">
                    <h2>Add New Medicine</h2>
                    <div style="display: flex; gap: 20px; margin-top: 15px;">
                        <input type="text" placeholder="Name of Medicine"
                            style="padding: 8px 15px; border: 1px solid #ccc; border-radius: 5px; font-size: 18px; flex: 1; outline: none;">
                        <button
                            style="background-color: #472B7E; color: white; border: none; padding: 8px 25px; border-radius: 5px; cursor: pointer; font-size: 18px; transition: background-color 0.3s;">Add</button>
                    </div>
                    <div style="display: flex; gap: 20px; margin-top: 15px; justify-content: space-between;">
                        <div style="flex: 1; padding: 15px; border: 1px solid #ddd; border-radius: 5px; background-color: #f9f9f9;">
                            <div style="margin-bottom: 15px;">
                                <input type="checkbox" name="time_breakfast" id="breakfast" style="margin-right: 8px; transform: scale(1.2);">
                                <label for="breakfast" style="font-size: 18px; font-weight: 500;">Breakfast</label>
                                <div style="margin-top: 8px; margin-left: 25px;">
                                    <input type="radio" name="breakfast_time" id="breakfast_before" style="margin-right: 5px;">
                                    <label for="breakfast_before" style="margin-right: 15px;">Before</label>
                                    <input type="radio" name="breakfast_time" id="breakfast_after" style="margin-right: 5px;">
                                    <label for="breakfast_after">After</label>
                                </div>
                            </div>
                            <div style="margin-bottom: 15px;">
                                <input type="checkbox" name="time_lunch" id="lunch" style="margin-right: 8px; transform: scale(1.2);">
                                <label for="lunch" style="font-size: 18px; font-weight: 500;">Lunch</label>
                                <div style="margin-top: 8px; margin-left: 25px;">
                                    <input type="radio" name="lunch_time" id="lunch_before" style="margin-right: 5px;">
                                    <label for="lunch_before" style="margin-right: 15px;">Before</label>
                                    <input type="radio" name="lunch_time" id="lunch_after" style="margin-right: 5px;">
                                    <label for="lunch_after">After</label>
                                </div>
                            </div>
                            <div>
                                <input type="checkbox" name="time_dinner" id="dinner" style="margin-right: 8px; transform: scale(1.2);">
                                <label for="dinner" style="font-size: 18px; font-weight: 500;">Dinner</label>
                                <div style="margin-top: 8px; margin-left: 25px;">
                                    <input type="radio" name="dinner_time" id="dinner_before" style="margin-right: 5px;">
                                    <label for="dinner_before" style="margin-right: 15px;">Before</label>
                                    <input type="radio" name="dinner_time" id="dinner_after" style="margin-right: 5px;">
                                    <label for="dinner_after">After</label>
                                </div>
                            </div>
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