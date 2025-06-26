<?php
include "includes/config.php";
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Good Will Old Age Home</title>
    <link rel="stylesheet" href="includes/css/login.css">
    <style>
        *{
            margin: 0px;
            padding: 0px;
            font-family: "Inria Sans", sans-serif;
        }
        #list-of-donars{
            margin-left: 60px;
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

    <section id="donar">
        <h1 style="margin: 30px 0px 0px 40px; font-size: 40px;">List of Donars</h1>
        <br><br><br><br>
        <div id="list-of-donars">
            <?php
                $sql = "SELECT * FROM donar";
                $result = $conn -> query($sql);
                echo "<table border = 1>";
                echo "<th>Donar ID.</th><th>Donar's Name</th><th>Amount</th><th>Date</th><th>Comment</th>";
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>$row[donar_id]</td><td>$row[donar_name]</td><td>$row[amount]</td><td>$row[donation_date]</td><td>$row[comment]</td></tr>";
                    }
                } else {
                echo "0 results";
                }
                echo "</table>";
            ?>
        </div>
    </section>
                <br><br><br><br>
<?php

    include_once('includes/footer.php');

?>

</body>


    <?php
        include_once('includes/footer.php');
    ?>
</body>
</html>