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
                <div class="paid_type">Free</div>
                    <div class="features">
                        <table>
                            <tr>
                                <td class="feature-item">Accommodation</td>
                            </tr>
                            <tr>
                                <td class="feature-item">Food</td>
                            </tr>
                            <tr>
                                <td class="feature-item">Laundry</td>
                            </tr>
                            <tr>
                                <td class="feature-item">Medical Facilities</td>
                            </tr>
                            <tr>
                                <td class="feature-item">Share Assistant</td>
                            </tr>
                        </table>
                    </div>
                <button class="btn">Start</button>
            </div>
        </div>
        <div id="div_bottom_right">
            <div id="paid_box">
                <div class="paid_type">Paid</div>
            <div class="features">
                <table>
                    <tr>
                        <td class="feature-item">Accommodation<p id="sub-text">(Air Condition and Room Heating)</p></td>
                    </tr>
                    <tr>
                        <td class="feature-item">Food</td>
                    </tr>
                    <tr>
                        <td class="feature-item">Laundry</td>
                    </tr>
                    <tr>
                        <td class="feature-item">Medical Facilities</td>
                    </tr>
                    <tr>
                        <td class="feature-item">Dedicated Assistant</td>
                    </tr>
                </table>
            </div>
            <button class="btn">Start</button>
            </div>
        </div>
    </div>

    <?php
        include_once('includes/footer.php');
    ?>
</body>
</html>