<style>
    #sidebar{
        width : 25vw;
        height : 100vh;
        background-color : #472B7E;
        padding-top : 130px;
        box-sizing : border-box;
        color : #eeeeee;
        font-family : Verdana;
    }
    #sidebar > #logoandname{
        display : flex;
        justify-content : space-evenly;
        line-height : 25px;
    }
    #sidebar > #logoandname > #logo > img{
        height : 60px;
        weight : 100px;
    }
    #sidebar > #logoandname > #name{ 
        margin-top : 7px;       
        font-size : 16px;
    }
    #nav{
        margin : 50px 0px 0px 0px;
    }
    #nav > div{
        font-size : 16px;
        padding : 15px 0px 15px 50px;
    }
    #nav > div > a{
        color : #eeeeee;
        text-decoration : none;
    }
    .hr-line{
        border: 1px solid #3A2A68;
    }
</style>

<div id="container">
    <div id="sidebar">
        <div id="logoandname">
            <div id="logo">
                <img src="../assets/img/logo.png" alt="">
            </div>
            <div id="name">
                Good Will Old Age <br>Home Management System
            </div>
        </div>
        <div id="nav">
            <div><a href="userDashboard.php"><i class="fa-solid fa-table-columns"></i> Dashboard</a></div>
            <hr class="hr-line">
            <div><a href="accommodation.php"><i class="fa-solid fa-bed"></i> Accommodation</a></div>
            <hr class="hr-line">
            <div><a href="food.php"><i class="fa-solid fa-utensils"></i> Food</a></div>
            <hr class="hr-line">
            <div><a href="health.php"><i class="fa-solid fa-heart"></i> Health</a></div>
            <hr class="hr-line">
            <div><a href="complainbox.php"><i class="fa-solid fa-list-ol"></i> Complain Box</a></div>
            <hr class="hr-line">
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />