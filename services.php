<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="includes/css/services.css">
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
    </style>
</head>
<body>
    <?php
        include_once('includes/nav.php');
    ?>
    <div id="div_top">
        <h2 id="div_top_text">Services</h2>
        <p id="div_top_paragraph">We provide world-class service for the elderly people. Good Will is now providing two services.</p>
    </div>
    <div id="div_bottom">
        <div id="div_bottom_left">
            <div id="free_box">
                <table class="table_text">
                    <tr>
                        <td class="hedding_text">Free</td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
                <button class="btn">Start</button>
            </div>
        </div>
        <div id="div_bottom_right">
            <div id="paid_box">
                <table>
                    <tr>
                        <td class="hedding_text">Paid</td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
                <button class="btn">Start</button>
            </div>
        </div>
    </div>

    <?php
        include_once('includes/footer.php');
    ?>
</body>
</html>