<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food</title>
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
        margin: 100px 60px;
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

    .food-container {
        padding: 60px 0;
        display: flex;
        gap: 40px;
        justify-content: space-between;
    }

    .food-container h2 {
        font-size: 28px;
        margin-bottom: 10px;
        font-weight: 400;
    }
    .food-container h3 {
        font-size: 20px;
        margin-left: 10px;
        margin-bottom: 10px;
        font-weight: 400;
    }

    .breakfast {
        padding: 20px;
        border-bottom: 2px solid rgb(92, 86, 86);
        /* margin-bottom: 50px; */
    }

    .dinner {
        padding: 20px;
        /* border-right: 2px solid rgb(92, 86, 86); */
    }

    .lunch .top {
        padding: 20px;
        border-left: 2px solid rgb(92, 86, 86);
        margin-bottom: 30px;
    }
    .lunch .middle {
        border-bottom: 2px solid rgb(92, 86, 86);
        margin-bottom: 30px;
    }

    .lunch .bottom {
        padding: 20px;
        border-left: 2px solid rgb(92, 86, 86);
    }
    input[type="radio"] {
        /* margin-right: 10px; */
        margin-top: 10px;
        margin-left: 25px;
    }
    label {
        font-size: 18px;
        /* margin-left: 10px; */
    }
    .decesion {
        margin-top: 20px;
    }
    .decesion input[type="radio"] {
        margin-left: 5px;
        /* margin-right: 10px; */
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
                    <h1>Food</h1>
                    <div class="profile">
                        <p>Hi, David!</p>
                        <img src="../assets/img/profile.png" alt="">
                    </div>
                </div>
                <div class="food-container">
                    <div id="left">
                        <div class="breakfast">
                            <h2>Break Fast</h2>
                            <input type="radio" id="rice_egg" name="breakfast" value="Rice and Egg">
                            <label for="rice_egg">Rice and Egg</label><br>
                            <input type="radio" id="bread_jam" name="breakfast" value="Bread and Jam">
                            <label for="bread_jam">Bread and Jam</label><br>
                            <input type="radio" id="roti_egg" name="breakfast" value="Roti and Egg">
                            <label for="roti_egg">Roti and Egg</label>
                            <div class="decesion">
                                <input type="radio" id="breakfast_eat" name="breakfast_decision" value="I want to eat">
                                <label for="breakfast_eat">I want to eat</label>
                                <input type="radio" id="breakfast_no_eat" name="breakfast_decision" value="I don't want to eat">
                                <label for="breakfast_no_eat">I don't want to eat</label>
                            </div>
                        </div>
                        <div class="dinner">
                            <h2>Dinner</h2>
                            <input type="radio" id="roti_vegetable" name="dinner" value="Roti and Vegetable">
                            <label for="roti_vegetable">Roti and Vegetable</label><br>
                            <input type="radio" id="rice_fish" name="dinner" value="Rice and Fish">
                            <label for="rice_fish">Rice and Fish</label><br>
                            <input type="radio" id="soup" name="dinner" value="Soup">
                            <label for="soup">Soup</label>
                            <div class="decesion">
                                <input type="radio" id="dinner_eat" name="dinner_decision" value="I want to eat">
                                <label for="dinner_eat">I want to eat</label>
                                <input type="radio" id="dinner_no_eat" name="dinner_decision" value="I don't want to eat">
                                <label for="dinner_no_eat">I don't want to eat</label>
                            </div>
                        </div>
                    </div>
                    <div id="right">
                        <div class="lunch">
                            <div class="top">
                                <h2>Lunch</h2>
                                <h3>Curry</h3>
                                <input type="radio" id="mutton" name="lunch_curry" value="Mutton">
                                <label for="mutton">Mutton</label><br>
                                <input type="radio" id="chicken" name="lunch_curry" value="Chicken">
                                <label for="chicken">Chicken</label><br>
                                <input type="radio" id="fish" name="lunch_curry" value="Fish">
                                <label for="fish">Fish</label>
                            </div>
                            <div class="middle">
                                <!-- Add content here if needed -->
                            </div>
                            <div class="bottom">
                                <input type="radio" id="plain_rice" name="lunch_rice" value="Plain Rice">
                                <label for="plain_rice">Plain Rice</label><br>
                                <input type="radio" id="fried_rice" name="lunch_rice" value="Fried Rice">
                                <label for="fried_rice">Fried Rice</label><br>
                                <div class="decesion">
                                    <input type="radio" id="lunch_eat" name="lunch_decision" value="I want to eat">
                                    <label for="lunch_eat">I want to eat</label>
                                    <input type="radio" id="lunch_no_eat" name="lunch_decision" value="I don't want to eat">
                                    <label for="lunch_no_eat">I don't want to eat</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div style="text-align: right; margin-top: 20px;">
                        <button type="submit" style="background-color: #472B7E; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Send to Cook</button>
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