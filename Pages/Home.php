<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--<link href="../CSS/HambergerMenu.css" rel="stylesheet" />-->
        <link href="../CSS/Home.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href='http://fonts.googleapis.com/css?family=Timmana' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="../CSS/animate.css">


        <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <!--font-family: 'PT Sans', sans-serif;-->
         <!--<script type="text/javascript" src="../JS/HambergermenuJS.js"></script>-->

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="../JS/jquery-2.0.0.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 

        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> 
        <script type="text/javascript" src="../JS/jquery.stellar.js"></script>
        <script src="../JS/scrip.js"></script>
        <!--<script type="text/javascript" src="../JS/jquery.nicescroll.js"></script>-->

        <script type="text/javascript" src="../JS/menubar_js.js"></script>
        <script type="text/javascript" src="../JS/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>

    </head>
    <body>

        <div class="topbar">

        </div>

        <div class="mainslider">
            <center>  <img src="../banners/navlogo.png"  />
                <p>PlanMyTrip</p>

                <div class="viewMenudiv">
                    <div style="">
                        <img src="../png/menu55.png" width="20" height="20" id="menuShowbutton"/>
                    </div>
                </div>

                <ul class="navMenuUl" id="navMenuUl">
                    <li><a>Home</a></li>
                    <li><a>MyPlan</a></li>
                    <li><a>Gallery</a></li>
                    <li><a>Contact</a></li>
                    <li><a>About</a></li>
                </ul>

            </center>
        </div>
        <div class="hambergerMenudiv" data-stellar-background-ratio="0.3">


            <h5 style="" class="wow bounceIn" data-wow-delay="1s">FIND EVERYTHING TO TAKEDOWN</h5>
            <br>

            <p style="" class="wow zoomIn" data-wow-delay="1.5s">YOUR HOLIDAY</p>
            <!--<p style="text-align: center;color: #ffffff;font-size:120px; font-family: 'Shadows Into Light', cursive;"></p>-->

            <center>
                <table>
                    <tr>
                        <td> <input class="wow fadeInLeft" data-wow-delay="1.5s" id="firstbutton" type="button" value="Sign In" /></td>
                        <td> <input  class="wow fadeInRight" data-wow-delay="1.5s" id="firstbutton" type="button" value="Register" /></td>
                    </tr>
                </table>
            </center>


        </div>
        <br>
        <div style="" >
            <table style="width: 100%;" cellspacing="0">
                <tr>
                    <td style="width: 20%"><input type="button" value="SEARCH" id="searchButton"/></td>
                    <td style="width: 80%;"><input type="text" value="" id="searchBar" placeholder=" Type Here"/></td>
                </tr>
            </table>
            
            
        </div>


    </body>

    <script>
        (function() {

            'use strict';

            document.querySelector('.material-design-hamburger__icon').addEventListener(
                    'click',
                    function() {
                        var child;

                        document.body.classList.toggle('background--blur');
                        this.parentNode.nextElementSibling.classList.toggle('menu--on');

                        child = this.childNodes[1].classList;

                        if (child.contains('material-design-hamburger__icon--to-arrow')) {
                            child.remove('material-design-hamburger__icon--to-arrow');
                            child.add('material-design-hamburger__icon--from-arrow');
                        } else {
                            child.remove('material-design-hamburger__icon--from-arrow');
                            child.add('material-design-hamburger__icon--to-arrow');
                        }

                    });

        })();
    </script>
</html>