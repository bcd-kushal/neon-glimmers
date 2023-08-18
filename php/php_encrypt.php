<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            *{
                font-family: 'Segoe UI';
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            ::-webkit-scrollbar{
                display: none;
            }

            body{
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                min-height: 100vh;
                overflow: hidden;
                background: rgb(0, 0, 0);
            }

            .parentContainer{
                display: grid;
            }
            .parentContainer > *{
                grid-column-start: 1;
                grid-row-start: 1;
            }

            /*background*/
            .bgShade{
                position: absolute;
                top: 0;
                left: 50%;
                width: 100vw;
                height: 100vh;
                transform: skewX(-35deg);
                background: rgba(38, 38, 226, 0.75);
                opacity: 1;
                z-index: -1;
                animation: colorChange 10s alternate infinite;
            }
            @keyframes colorChange{
                0%{
                    background: rgba(38, 38, 226, 0.75);
                }
                25%{
                    background: rgba(255, 240, 23, 0.75);
                }
                50%{
                    background: rgba(245, 30, 245, 0.75);
                }75%{
                    background: rgba(38, 226, 47, 0.75);
                }
                100%{
                    background: rgba(226, 38, 38, 0.75);
                }
            }
            .bgShade:after{
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                transform: skewX(-2deg);
                background: rgb(12, 12, 12);
                opacity: 1;
                z-index: -2;
            }

            /*glowing particles*/

            .particle{
                position: relative;
                min-width: 500px;
                height: 100vh;
                margin: -90px;
                transform-origin: left;
                animation: shades 5s linear infinite;
                z-index: 1;
            }
            @keyframes shades{
                0%{
                    filter:hue-rotate(0deg);
                    transform: rotate(0deg);
                }
                100%{
                    filter:hue-rotate(360deg);
                    transform: rotate(360deg);
                }
            }
            .particle:nth-child(1){
                top: 15em;
                left: 25em;
            }
            .particle:nth-child(2){
                transform-origin: right;
                top: -25em;
                left: -20em;
            }
            .particle:nth-child(3){
                top: -18em;
                left: 50em;
            }
            .particle:nth-child(4){
                top: 5em;
                transform-origin: right;
                left: -18em;
            }
            .particle:nth-child(5){
                top: 20em;
                transform-origin: left;
                left: -20em;
            }
            .particle span{
                position: absolute;
                top: calc(60px*var(--i));
                bottom: calc(60px*var(--i));
                right: calc(60px*var(--i));
                left: calc(60px*var(--i));
            }
            .particle span:before{
                content: '';
                position: absolute;
                top: 50%;
                border-radius: 50%;
                background: yellow;
                left: -6px;
                width: 10px;
                height: 10px;
            }
            .particle span:nth-child(3n+1):before{
                background: rgba(229, 255, 0,1);
                box-shadow: 0 0 15px rgba(229, 255, 0,1),0 0 30px rgba(229, 255, 0,1),0 0 45px rgba(229, 255, 0,1),0 0 60px rgba(229, 255, 0,1),0 0 0 7px rgba(229, 255, 0,.1);
            }
            .particle span:nth-child(3n+2):before{
                background: rgba(255, 0, 255,1);
                box-shadow: 0 0 15px rgba(255, 0, 255,1),0 0 30px rgba(255, 0, 255,1),0 0 45px rgba(255, 0, 255,1),0 0 60px rgba(255, 0, 255,1),0 0 0 7px rgba(255, 0, 255,.1);
            }
            .particle span:nth-child(3n+3):before{
                background: rgba(0, 247, 255,1);
                box-shadow: 0 0 15px rgba(0, 247, 255,1),0 0 30px rgba(0, 247, 255,1),0 0 45px rgba(0, 247, 255,1),0 0 60px rgba(0, 247, 255,1),0 0 0 7px rgba(0, 247, 255,.1);
            }
            .particle span:nth-child(3n+1){
                animation: pop 18s alternate infinite;
            }
            @keyframes pop{
                0%{
                    transform: rotate(0deg);
                }
                100%{
                    transform: rotate(360deg);
                }
            }
            .particle span:nth-child(3n+2){
                animation: pop-opp-way 3s alternate infinite;
            }
            @keyframes pop-opp-way{
                0%{
                    transform: rotate(360deg);
                }
                100%{
                    transform: rotate(0deg);
                }
            }
            .particle span:nth-child(3n+3){
                animation: pop 10s alternate-reverse infinite;
            }
            /*end of glowing particles*/

            /*card styles*/
            .input_card{
                position: relative;
                display: flex;
                min-width: 200%;
                height: 55%;
                background: rgba(255,255,255,.08);
                justify-content: center;
                align-items: center;
                align-content: stretch;
                top: 28%;
                left: 50%;
                transform: translate(-50%,-28%);
                border-radius: 20px;
                overflow: hidden;
                z-index: 20;
                box-shadow: 0 0 25px 0 rgba(255,255,255,.5);
                animation: shadowAnimate 20s alternate-reverse infinite;
            }
            @keyframes shadowAnimate{
                0%{
                    box-shadow: 0 0 25px 0 rgba(255, 0, 0, 0.5);
                }
                25%{
                    box-shadow: 0 0 25px 0 rgba(255, 217, 0, 0.5);
                }
                50%{
                    box-shadow: 0 0 25px 0 rgba(9, 255, 0, 0.5);
                }
                75%{
                    box-shadow: 0 0 25px 0 rgba(247, 0, 255, 0.5);
                }
                100%{
                    box-shadow: 0 0 25px 0 rgba(0, 225, 255, 0.5);
                }
            }
            .input_card:before{
                content: '';
                position: absolute;
                display: flex;
                top: 0;
                right: 50%;
                min-width:150%;
                height: 100%;
                background: linear-gradient(75deg,rgba(255,255,255,.01),rgba(255,255,255,0.1));
                transform: skewX(75deg);
                justify-content: center;
                align-items: center;
                z-index: -1;
                
            }
            .input_card .header .title{
                position: absolute;
                padding: .5em .5em;
                top: 50%;
                transform: translateY(-50%);
            }
            .input_card .description{
                padding: 1em 1em;
                display: flex;
                color: white;
                height: 95%;
                width: 100%;
                font-size: 1em;
                margin:auto;
                align-items: center;
                justify-content: center;
                margin: auto;
            }
            .input_card .description .details{
                width: 100%;
                height: 10%;
                text-align: center;
                margin-bottom: 10px;
            }
            .input_card .description .details span,
            .input_card .description .forms .input_field span{
                position: relative;
                letter-spacing: 1px;
                top: 5px;
                align-items: center;
                font-size: 250%;
            }
            .input_card .description .forms .input_field{
                display: flex;
                justify-content: center;
                max-width: 57em;
                min-width: 57em;
                flex-wrap: wrap;
                
            }
            .input_card .description .forms .submission{
                display: flex;
                justify-content: center;
                overflow: hidden;
                max-width: 57em;
                min-width: 57em;
                flex-wrap: wrap;
            }
            .submitVal,
            .resetVal{
                width: 100%;
                display: flex;
                align-items: center;
                margin: 1%;
                justify-content: center;
            }
            .submitVal{
                
            }
            a::-webkit-inner-spin-button { 
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                margin: 0; 
            }   
            a:hover{
                transition: 0.5s;
            }
            a:focus:nth-child(1),
            a:hover:nth-child(1){
                border: 1px solid rgb(251, 255, 0);
            }
            a:focus{
                transition: .5s;
                background-color: rgba(255, 255, 255,.2);
                outline: none;
            }
            a{
                background-color: rgba(255,255,255,.2); 
                width: 280px; 
                height: 42px;
                border: none;
                border-radius: 10em;
                text-align: center;
                font-size: 160%;
                margin: 0px 16px 1px 16px;
                color: rgb(192, 192, 192);
                letter-spacing: 1px;
                transition: 0.5s;
                text-decoration:none;
                display:flex;
                align-items:center;
                justify-content:center;
            }
            a{
                background-color: #008b17;
                color: #c7e0c7;
            }
            a:hover{
                letter-spacing: 4px;
                font-weight: bolder;
                transition: 0.5s;
                color: white;
            }
            .input_card .description .details{
                width: 100%;
                height: 10%;
                text-align: center;
                margin-bottom: 10px;
                font-size: 130%;
            }
            .input_card .description .details span,
            .input_card .description .forms .input_field span{
                position: relative;
                letter-spacing: 1px;
                top: 5px;
                right: 2%;
            }
            .forms{
                width:100%;
                text-align:center;
                padding: 30px 30px;
            }
        </style>
    </head>

    <body>
                        <?php
                        $username=$_SESSION['username'];
                        $password=$_SESSION['password'];
                        ?>

        <div class="parentContainer">

            <!--background shade-->
        <div class="bgShade"></div>

            <!--glowing particles-->
        <div class="particle">
            <span style="--i:1"></span>
            <span style="--i:2"></span>
            <span style="--i:3"></span>
        </div>
        <div class="particle">
            <span style="--i:1"></span>
            <span style="--i:2"></span>
            <span style="--i:3"></span>
        </div>
        <div class="particle">
            <span style="--i:1"></span>
            <span style="--i:2"></span>
            <span style="--i:3"></span>
        </div>
        <div class="particle">
            <span style="--i:1"></span>
            <span style="--i:2"></span>
            <span style="--i:3"></span>
        </div>
        <div class="particle">
            <span style="--i:1"></span>
            <span style="--i:2"></span>
            <span style="--i:3"></span>
        </div>
        <!--end particles-->

        <!--card elements-->
        <div class="input_card">
            <!-- <div class="header">
                <div class="title">
                    Login
                </div>
            </div> -->
            <div class="description">
                
                    
               
                <div class="forms">

                    <?php
                    if($username=="stacy_uwu"&&$password=="iamkushal02"){
                    ?>
                    <div class="details">
                    <span>
                        <container style="text-align:center;padding-left:45px;">WELCOME</container>
                    </span>
                        </div>
                            <div class="resetVal">
                                <a href="index.html" style="background:yellow;color:black;opacity:.9;">PROCEED</a>
                            </div>
                            <?php
                    }
                    else{
                        
                            ?>
                            <div class="details" style="width: 100%;">
                    <span>
                        <container style="text-align:center;padding-left:45px;">INVALID USERNAME/PASSWORD</container>
                    </span>
                        <div class="submitVal">
                                <a href="encrypt.html" style="background:rgba(255,255,255,.1);">BACK</a>
                            </div>
                            <?php
                    }
                            ?>
                    
                    </div>
            </div>
        </div>

    </div>
        <!--end cards-->
        </div>
    </body>
</html>