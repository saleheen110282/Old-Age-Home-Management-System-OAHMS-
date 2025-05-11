<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Good Will Old Age Home</title>
  <link rel="stylesheet" href="includes/css/contact.css">
  <style>
  * {
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
    <h2 id="div_top_text">Contact Us</h2>
    <p id="div_top_paragraph">Send your message to us.</p>
  </div>
  <div id="div_bottom">
    <div id="div_bottom_figure">
      <div class="form_group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" required placeholder="Enter your full name">
        </div>
        <div class="form_group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required placeholder="Email address">
        </div>
        <div class="form_group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" required placeholder="01814-XXXXXX">
        </div>
        <div class="form_group">
          <label for="message">Message</label>
          <textarea id="message" name="message" required placeholder="Type your message here..."></textarea>
        </div>
        <button type="submit" class="btn">Submit</button>
      </div>
    </div>
  </div>

    <?php
        include_once('includes/footer.php');
    ?> 
    </body>

</html>