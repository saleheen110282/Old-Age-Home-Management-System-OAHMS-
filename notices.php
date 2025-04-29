<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice | Good Will Old Age Home</title>
    <link rel="stylesheet" href="includes/css/notice.css">
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
        <h2 id="div_top_text">Notice</h2>
        <p id="div_top_paragraph">Here are the notice of the organization about key information, upcoming events and essential organizational announcement.</p>
    </div>
    <div class="container">
        <div class="notices">
            <div class="notice-card">
                <div class="date">
                    <span>📅 12/03/25</span>
                </div>
            <div class="title">Renovation of the rooms</div>
            </div>          
            <div class="notice-card">
                <div class="date">
                    <span>📅 12/03/25</span>
                </div>
                <div class="title">Renovation of the rooms</div>
            </div>
            <div class="notice-card">
                <div class="date">
                    <span>📅 12/03/25</span>
                </div>
                <div class="title">Renovation of the rooms</div>
            </div>
            <div class="notice-card active">
                <div class="date">
                    <span>📅 12/03/25</span>
                </div>
                <div class="title">Renovation of the rooms</div>
            </div>
        </div>
        <div class="pinned-notice">
            <div class="pin-icon">📌</div>
            <div class="pinned-title">Pinned Notice</div>
            <div class="date">
                <span>📅 12/03/25</span>
            </div>
            <div class="title">Renovation of the rooms</div>
        </div>
    </div>
    <div class="pagination">
        <button disabled>Previous</button>
        <button class="page active">1</button>
        <span>...</span>
        <button class="page">3</button>
        <button>Next</button>
    </div>
    <!-- Test purpose. -->
    <?php
        include_once('includes/footer.php');
    ?>
</body>
</html>