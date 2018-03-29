<?php

require_once "utils/util.php";

function showAllWithView($requestedView)
{
    $account = Controller::getMainUser();
    session_start();
    ?>

    <!-- HEADER -->


    <!DOCTYPE html>
    <html>

    <body>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>ZenEtude</title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



        <script type="text/javascript" src="res/js/materialize.min.js"></script>
        <link type="text/css" rel="stylesheet" href="res/css/materialize.min.css" media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="res/css/style.css"/>
        <link type="text/css" rel="stylesheet" href="res/css/menu.css"/>
        <link type="text/css" rel="stylesheet" href="res/css/profil.css"/>
        <link rel="stylesheet" type="text/css" href="res/css/index.css"/>
        <link rel="stylesheet" href="res/css/clndr.css" type="text/css"/>
        <link type="text/css" rel="stylesheet" href="res/css/calendar.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="?controller=manageAccount&action=show" class="center">Gérer</a></li>
        <li class="divider"></li>
        <li><a href="?controller=user&action=disconnect"><i class="material-icons center">power_settings_new</i></a>
        </li>
    </ul>
    <ul id="dropdown2" class="dropdown-content">
        <li><a href="?controller=manageAccount&action=show" class="center">Gérer</a></li>
        <li class="divider"></li>
        <li><a href="?controller=user&action=disconnect"><i class="material-icons center">power_settings_new</i></a></li>
    </ul>

    <nav id="nav">
        <div class="nav-wrapper">
            <a href="home.html" class="brand-logo"><img class="logo-svg" src="res/img/logo.svg" alt="logo du site"></a>
            <a href="home.html" class="brand-logo-responsive"><img class="logo-svg" src="res/img/logo2.svg"
                                                                   alt="logo du site"></a>
            <img onclick="document.location.href='/'"  src="res/img/name.svg" alt="Zenetude, titre du site">
            <a href="#" data-activates="mobile-demo" class="right button-collapse"><i
                        class="green material-icons">menu</i></a>

            <?php
            if (!is_null($account)) {
                ?>

                <ul class="right hide-on-med-and-down ">
                    <li class="active"><a href="?controller=dashboard&action=show">Tableau de bords</a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Compte<i
                                    class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li class="active"><a href="?controller=dashboard&action=show">Tableau de bords</a></li>
                    <li><a href="profile.html" class="center">Gérer</a></li>
                    <li><a href="home.html"><i class="material-icons center">power_settings_new</i></a></li>
                </ul>

            <?php } ?>


        </div>
    </nav>

    <nav id="scroll-nav">
        <div class="nav-wrapper">
            <a href="home.html" class="brand-logo"><img src="res/img/logo.svg" alt="logo du site"></a>
            <img class="name-svg" src="res/img/name.svg" alt="Zenetude, titre du site">
            <a href="#" data-activates="mobile-demo" class="right button-collapse"><i
                        class="green material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down ">
                <li class="active"><a href="?controller=dashboard&action=show">Tableau de bords</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Compte<i
                                class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li class="active"><a href="?controller=dashboard&action=show">Tableau de bords</a></li>
                <li><a href="profile.html" class="center">Gérer</a></li>
                <li><a href="home.html"><i class="material-icons center">power_settings_new</i></a></li>
            </ul>
        </div>
    </nav>


    <?php require($requestedView); ?>


    <!-- FOOTER -->


    <footer>
        <p>
            Zen'Etude, développé en 2018, DUT Informatique d'Aix-Marseille Université site d'Aix
        </p>
    </footer>

    <script type="text/javascript" src="res/js/showmessage.js"></script>
    <script type="text/javascript" src="res/js/menu.js"></script>
    <script src="res/js/underscore-min.js"></script>
    <script src="res/js/moment-2.2.1.js"></script>
    <script src="res/js/clndr.js"></script>
    <script src="res/js/site.js"></script>
    <script src="res/js/trombi.js"></script>
    <script type="text/javascript" src="res/js/fonctions.js"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            $('select').material_select();
            $(".dropdown-button").dropdown();
        });


        $(function () {
            $(window).scroll(function () {//Au scroll dans la fenetre on déclenche la fonction
                if ($(this).scrollTop() > 200) { //si on a défilé de plus de 200px du haut vers le bas
                    document.getElementById('scroll-nav').style.top = '0px';
                } else {
                    document.getElementById('scroll-nav').style.top = '-200px';
                }
            });
        });

        window.onload = ajuste;

        function ajuste() {
            document.getElementById('aside1').style.minHeight = document.getElementById('bloc1').offsetHeight + "px";
            document.getElementById('aside2').style.minheight = document.getElementById('calendar').offsetHeight + "px";
        }


    </script>
    </body>

    </html>


<?php } ?>>