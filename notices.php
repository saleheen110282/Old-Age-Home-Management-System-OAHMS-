<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice | Good Will Old Age Home</title>
    <link rel="stylesheet" href="includes/css/notice.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
    </style>
    <?php
        include_once('includes/font.php');
    ?>
</head>
<body>
    <?php
        include_once('includes/nav.php');
    ?>
    <div id="div_top">
        <h2 id="div_top_text">Notice</h2>
        <p id="div_top_paragraph">Here are the notice of the organization about key information,<br> upcoming events and essential organizational announcement.</p>
    </div>
    <div class="container">
        <div class="notices">
        <div class="notice-card">
                <div class="date">
                    <spans tyle='font-size: 40px;'>&#128197; 12/03/25</span>
                </div>
                <div class="title">Renovation of the rooms</div>
            </div>       
            <div class="notice-card">
                <div class="date">
                    <spans tyle='font-size: 40px;'>&#128197; 12/03/25</span>
                </div>
                <div class="title">Renovation of the rooms</div>
            </div>
            <div class="notice-card">
                <div class="date">
                    <span tyle='font-size: 40px;'>&#128197; 12/03/25</span>
                </div>
                <div class="title">Renovation of the rooms</div>
            </div>
            <div class="notice-card">
                <div class="date">
                    <span tyle='font-size: 40px;'>&#128197; 12/03/25</span>
                </div>
                <div class="title">Renovation of the rooms</div>
            </div>
        </div>
        <div class="pinned-notice">
            <div class="pin-icon">
                <span style='font-size: 20px;'>&#128204;</span>
            </div>
            <div class="pinned-title">
                <div id="pinned-title_left"><i class="material-icons">&#xe88e; </i> </div>
                <div id="pinned-title_right">Pinned Notice</div>
            </div>
            <div id="pin_date">
                <span tyle='font-size: 40px;'>&#128197; 12/03/25</span>
            </div>
            <div id="pin_title">Renovation of the rooms</div>
        </div>
    </div>
    <div class="pagination">
        <button>&lt; Previous</button>
        <button class="page">1</button>
        <span>...</span>
        <button class="page">3</button>
        <button>Next &gt;</button>
    </div>
    <?php
        include_once('includes/footer.php');
    ?>
</body>
</html>