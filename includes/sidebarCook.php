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
        <hr class="hr-line">
        <div><a href="#">Food Request</a></div>
        <hr class="hr-line">
        <div><a href="#">Complain Box</a></div>
        <hr class="hr-line">
    </div>
</div>