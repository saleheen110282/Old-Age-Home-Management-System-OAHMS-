<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Good Will Old Age Home</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
    </style>
    <link rel="stylesheet" href="./includes/css/index.css">
    <?php
        include_once('includes/font.php');
    ?>
</head>
<body>
    <?php
        include_once('includes/nav.php');
    ?>
    <header id="header">
        <h1>Make Your Time Best</h1>
        <p>Good Will old age Home is a non-profit <br>organization to provide a good service to <br>the elderly people.</p>
    </header>
    <main>
        <section id="eligibility">
            <h2>Eligibility</h2>
            <ul>
                <li>Minimum Age Required is 50 years.</li>
                <li>Person should not be suffering from any infectious disease</li>
                <li>The Person should be free from addiction of any kind.</li>
            </ul>
        </section>
        <section id="gallery">
            <h2>Gallery</h2>
            <div class="carousel-container">
                <button class="nav-btn prev-btn">‹</button>
                <div class="carousel">
                    <div class="slides">
                        <div class="slide">
                            <img src="https://picsum.photos/800/400?1" alt="Image 1">
                        </div>
                        <div class="slide">
                            <img src="https://picsum.photos/800/400?2" alt="Image 2">
                        </div>
                        <div class="slide">
                            <img src="https://picsum.photos/800/400?3" alt="Image 3">
                        </div>
                    </div>
                </div>
                <button class="nav-btn next-btn">›</button>
            </div>
        </section>
    </main>
    <?php
        include_once('includes/footer.php');
    ?>
    <script src="./scripts/index.js"></script>
</body>
</html>