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
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="notices.php">Notice</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </div>
</nav>