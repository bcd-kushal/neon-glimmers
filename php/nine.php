<!DOCTYPE html>
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
                left: 40em;
            }
            .particle:nth-child(2){
                transform-origin: right;
                top: -15em;
                left: -30em;
            }
            .particle:nth-child(3){
                top: 18em;
                left: 50em;
            }
            .particle:nth-child(4){
                top: -20em;
                transform-origin: right;
                left: 30em;
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
                animation: pop 10s alternate infinite;
            }
            .particle span:nth-child(3n+3){
                animation: pop 2s alternate-reverse infinite;
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
                animation: pop-opp-way 7s alternate infinite;
            }
            @keyframes pop-opp-way{
                0%{
                    transform: rotate(360deg);
                }
                100%{
                    transform: rotate(0deg);
                }
            }
            /*end of glowing particles*/

            /*card styles*/
            .input_card{
                position: relative;
                display: flex;
                min-width: 70%;
                height: 66%;
                background: rgba(255,255,255,.08);
                justify-content: center;
                align-items: center;
                align-content: stretch;
                top: 23.5%;
                left: 50%;
                transform: translate(-50%,-28%);
                border-radius: 20px;
                overflow: hidden;
                z-index: 10;
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
                width:160%;
                height: 100%;
                background: linear-gradient(75deg,rgba(255,255,255,.01),rgba(255,255,255,0.1));
                transform: skewX(75deg);
                justify-content: center;
                align-items: center;
                
            }
            .input_card .header{
                position: relative;
                color: white;
                font-size: 4em;
                max-width: 17vw;
                min-width: 17vw;
                flex-grow: 1;
                height: 90%;
                text-align: center;
                border-radius: 0 30px 30px 0;
                animation: bgAnimate 20s alternate-reverse infinite;
            }
            @keyframes bgAnimate{
                0%{
                    border-right:4px solid rgba(255, 0, 0, 0.3);
                }
                25%{
                    border-right:4px solid rgba(255, 217, 0, 0.3);
                }
                50%{
                    border-right:4px solid rgba(9, 255, 0, 0.3);
                }
                75%{
                    border-right:4px solid rgba(247, 0, 255, 0.3);
                }
                100%{
                    border-right:4px solid rgba(0, 225, 255, 0.3);
                }
            }
            .input_card .header .title{
                position: absolute;
                padding: .5em .5em;
                top: 50%;
                transform: translateY(-50%);
            }
            .input_card .description{
                min-width: 40vw;
                max-width: 40vw;
                padding: 0 1em;
                display: flex;
                color: white;
                height: 95%;
                font-size: 1em;
                flex-direction: column;
                justify-content: flex-end;
                flex-grow: 2;
            }
            .input_card .description .details{
                width: 100%;
                height: 95%;
                display: flex;
                margin-bottom: 10px;
                padding-right: .3em;
                align-items: flex-end;
                font-size: 250%;
            }
            .input_card .description .details span{
                width: 100%;
                height: 100%;
                display: flex;
                margin:auto;
                justify-content:right;
                max-height:66vh;
                text-align: right;
                overflow-x:hidden;
                overflow-y: auto;
                font-family:consolas;
            }
        </style>
    </head>

    <body>
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
            <div class="header">
                <div class="title" style="padding-left: 30%;">
                    Name
                </div>
            </div>
            <div class="description">
                <div class="details">
                    <span>
                    <?php

                    function removeWeirdChars($str){
                        $index=0;
                        $x="";
                        while($index<strlen($str)){
                            if(' '==$str[$index] || '_'==$str[$index] || '-'==$str[$index] || ($str[$index]>='a' && $str[$index]<='z') || ($str[$index]>='A' && $str[$index]<='Z') || ($str[$index]>='0' && $str[$index]<='9'))
                                $x.=$str[$index];
                            ++$index;
                        }
                        return $x;
                    }

                    error_reporting(E_ERROR | E_PARSE);
                    $a = $_GET["nine"];
                    if(is_string($a)&&strlen($a)>0){
                        
                    echo "[ Original name = ]<br>".$a;
                    $a = rtrim($a);
                    $a = ltrim($a);
                    $a = removeWeirdChars($a);
                    $len = strlen($a);
                    $flag=0;
                    $index=-1;
                    while(-1*$index<=$len){
                        if(strcmp(" ",substr($a,$index,1))==0){
                            echo "<br><br>[ Modified name = ]<br>".substr($a,$index+$len+1,($index+1)*-1).", ".substr($a,0,$len+$index);
                            ++$flag;
                            break;
                        }
                        --$index;
                    }
                    if($flag==0)
                        echo "<br><br>Entered name does not contain a title, cannot modify it.";
                    }
                    else
                        echo "Empty data input.";
                    ?>
                    </span> 
                </div>
            </div>
        </div>
        <!--end cards-->
        </div>
    </body>
</html>