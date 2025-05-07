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
        justify-content : space-around;
    }
    #sidebar > #logoandname > #logo > img{
        height : 60px;
        weight : 100px;
    }
    #sidebar > #logoandname > #name{        
        font-size : 20px;
    }
    #nav{
        margin : 50px 0px 0px 0px;
    }
    #nav > div{
        font-size : 20px;
        height : 35px;
        width : 100%;
        padding-left : 50px;
    }
    #nav > div > a{
        color : #eeeeee;
        text-decoration : none;
    }
    #nav > .sublist{
        font-size : 14px;
        height : 25px;
        padding-left : 80px;
    }
</style>

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
        <div><a href="#">Dashboard</a></div>
        <hr>
        <div><a href="#">Pages</a></div>
        <hr>
        <div class="sublist">Home</div>
        <hr>
        <div class="sublist">About Us</div>
        <hr>
        <div class="sublist">Contact Us</div>
        <hr>
        <div class="sublist">See More > </div>
        <hr>
        <div><a href="#">Services</a></div>
        <hr>
        <div><a href="#">Complain Box</a></div>
        <hr>
    </div>
</div>