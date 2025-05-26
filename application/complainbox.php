<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complain Box</title>
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
            height : 86vh;
        }


        #main{
            margin : 7vh 7vw 0vh 5vw;
        }


        .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 16px;
        }

        .header h1 {
        font-size: 1.5rem;
        font-weight: normal;
        }

        .user-info {
        display: flex;
        align-items: center;
        gap: 8px;
        }

        .user-info img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        }


        .view-complains {
        display: inline-block;
        font-size: 0.9rem;
        color: #555;
        text-decoration: none;
        margin-bottom: 24px;
        }

        .view-complains:hover {
        text-decoration: underline;
        }


        .complaint-form label {
        display: block;
        margin-bottom: 6px;
        font-size: 0.95rem;
        }

        .complaint-form input,
        .complaint-form textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 16px;
        font-size: 1rem;
        background-color: #fff;
        }

        .complaint-form input:focus,
        .complaint-form textarea:focus {
        outline: none;
        border-color: #7d3cff;
        }


        .complaint-form button {
        background-color: #5b2eb1;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1rem;
        }

        .complaint-form button:hover {
        background-color: #4a2390;
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


                <div class="container">
            <header class="header">
            <h1>Complain Box</h1>
            <div class="user-info">
                <span>Hi David!</span>
                <img src="oldman.png" alt="" />
            </div>
            </header>
            <a href="#" class="view-complains">See your Complains &gt;</a>
            <form class="complaint-form">
            <label for="title">Complain Title</label>
            <input type="text" id="title" name="title" placeholder="Enter title…" />

            <label for="description">Description</label>
            <textarea id="description" name="description" rows="6" placeholder="Tell us more…"></textarea>

            <button type="submit">Submit</button>
            </form>
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