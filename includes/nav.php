<!-- Fontawesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    body{
        font-family: arial;
        background-color: #eee;
    }
    nav{
        display: flex;
        justify-content: space-between; 
        background-color: #3D3A3A;
        font-family: arial;
        padding-top: 10px;
    }
    nav > div > a{
        
        color: white;
    }
    nav > div > ul{
        display: flex;
        margin-top: 15px;
        justify-content: space-around;
    }
    nav > div > ul > li{
        height: 50px;
        width: 120px;
        list-style: none;
    }
    nav > div > ul > li > a, #org-name > #name > a{
        color: #ffffff;
        font-size: 16px;
        text-decoration: none;
    }
    #org-name{
        height: 50px;
        width: 200px;
        display: flex;
        justify-content: space-evenly;
    }
    #logo, #logo > a > img{
        height: 50px;
        width: 55px;
    }
    #org-name > #name{
        font-size: 16px;
        margin-top: 7px;
    }
</style>

<nav>
    <div id = "org-name">
        <div id = "logo">
            <a href="index.php"><img src="./assets/img/logo.png" alt="logo"></a>
        </div>
        <div id = "name"><a href="index.php">Good Will Old <br> Age Home</a></div>
    </div>
    <div>
        <ul>
            <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
            <li><a href="about.php"><i class="fa-regular fa-address-card"></i> About</a></li>
            <li><a href="services.php"><i class="fa-solid fa-suitcase-medical"></i> Services</a></li>
            <li><a href="notices.php"><i class="fa-solid fa-circle-exclamation"></i> Notice</a></li>
            <li><a href="contact.php"><i class="fa-solid fa-id-card"></i> Contact</a></li>
            <li><a href="login.php"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a></li>
        </ul>
    </div>
</nav>