<?php

require 'includes/dbconnect.php';

?>
<!DOCTYPE html>
<html lang="fr">

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1817031777630464" crossorigin="anonymous"></script>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->

        <title>MythiGame Community | MGC</title>
        <meta name="description" content="Site du bot discord NanoBot" />
        <meta name="author" content="Stellaros" />
        <meta name="keywords" content="nanobot, mgc, mythigame, community, discord, java, bot, robot, association, outil, administration, modération, panel, admin, dashboard">
        <meta property="og:title" content="NanoBot | MGC"/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content="https://www.mythigame.net/"/>
        <meta property="og:site_name" content="NanoBot | MGC"/>
        <meta property="og:description" content="Site du bot discord NanoBot"/>
        <meta name="twitter:title" content="NanoBot | MGC" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="https://www.mythigame.net/" />
        <meta name="twitter:card" content="" />

        <!-- Font Awesome -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,600,300,300italic,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

        <!-- Material Design Bootstrap -->
        <link href="css/materialize.css" rel="stylesheet">

        <!-- Magnific-popup css -->
        <link href="css/magnific-popup.css" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Material Design Bootstrap -->
        <!--<link href="css/progressbar.css" rel="stylesheet">-->

        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">



        <!-- Your custom styles (optional) -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

    </head>

    <body data-spy="scroll" data-target=".navbar-desktop">
        <!-- Start your project here-->
        <!--Navbar-->

        <div class='preloader'><div class='loaded'>&nbsp;</div></div>

        <nav class="navbar navbar-fixed-top navbar-light bg-faded">
            <!--Collapse button-->
            <div class="container">
                <a href="#" data-activates="mobile-menu" class="button-collapse right"><i class="fa fa-bars black-text"></i></a>

                <!--Content for large and medium screens-->
                <div class="navbar-desktop">
                    <!--Navbar Brand-->
                    <!-- <a class="navbar-brand" href="#home"><img src="img/logo.png" alt="" /></a> -->
                    <!--Links-->
                    <ul class="nav navbar-nav pull-right hidden-md-down text-uppercase">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Equipe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#newsletter">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard/">Dashboard</a>
                        </li>
                    </ul>

                </div>

                <!-- Content for mobile devices-->
                <div class="navbar-mobile">

                    <ul class="side-nav" id="mobile-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Equipe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#newsletter">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--/.Navbar-->


        <div id="home" class="slider">
            <ul class="slides">
                <li>
                    <img src="img/background1.jpg"> <!-- random image -->
                    <div class="caption center-align">
                        <div class="single_home">
                            <h1>NanoBot</h1>
                            <p>Un robot, un outil !</p>
                            <a href="https://discord.com/oauth2/authorize?client_id=337135791140765700&scope=bot%20applications.commands&permissions=8"><button type="button" class="btn btn-danger m-t-3 waves-effect waves-red">Invitez NanoBot</button></a>
                        </div>
                    </div>
                </li>
                <!--<li>
                    <img src="img/homebenner.jpg">
                    <div class="caption center-align">
                        <div class="single_home">
                            <h1>ADVENTURER</h1>
                            <p>MURI, A TEMPLATE AT THE HEART OF THE BEAUTY</p>
                            <button type="button" class="btn btn-danger m-t-3 waves-effect waves-red">See More</button>
                        </div>
                    </div>
                </li> -->
            </ul>
        </div>







        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_about_area">
                            <div class="head_title center m-y-3 wow fadeInUp">
                                <h2>Qui sommes nous</h2>
                                <p>MythiGame Community - MGC est une association de loi 1901 créée en janvier 2019. Notre mission est de travailler sur des outils, jeux, projets, événements en rapport avec les jeux-vidéos.</p>
                            </div>

                            <div class="main_about_content">
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="main_accordion wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">

                                            <!-- <div class="single_accordion">
                                                <button class="accordion">Lorem ipsum dolor sit amet</button>
                                                <div class="panel">
                                                    <p>Consectetur adipiscing elit. Aliquam sagittis nulla non elit dignissim suscipit. Duis lorem nulla, 
                                                        eleifend Ut urna dui, interdum non blandit sed, hendrerit ultricies mi. 
                                                        Aliquam at scelerisque ligula. Curabitur id laoreet velit.</p>
                                                </div>
                                            </div> -->

                                            <div class="single_accordion">
                                                <button class="accordion active">NanoBot</button>
                                                <div class="panel show">
                                                    <p>NanoBot est un robot discord multi-fonction, il permet de la modération, de l'administration et offre des outils pour dynamiser votre communauté.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="single_about about_progress">
                                            <div class="skill wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                                                <!-- progress start -->
                                                <div class="progress">
                                                    <div class="lead">Développement Web 20%</div>
                                                    <div class="progress-bar wow fadeInLeft" data-progress="20%" style="width: 20%;" data-wow-duration="1.5s" data-wow-delay="1.2s"></div>
                                                </div>
                                                <!-- progress end -->
                                                <!-- progress start -->
                                                <div class="progress">
                                                    <div class="lead">Développement de NanoBot 60%</div>
                                                    <div class="progress-bar wow fadeInLeft" data-progress="60%" style="width: 60%;" data-wow-duration="1.5s" data-wow-delay="1.2s"></div>
                                                </div>
                                                <!-- progress end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <br />
            <br />
            <br />
            <hr />
        </section><!-- End of About Section-->



        <section id="service" class="service">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_service_area">
                            <div class="head_title center m-y-3 wow fadeInUp">
                                <h2>Nos services</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="jumbotron single_service  wow fadeInLeft">
                                        <div class="service_icon center">
                                            <i class="fas fa-cogs m-b-3"></i>
                                        </div>
                                        <div class="s_service_text text-sm-center text-xs-center">
                                            <h4>Un outil 100% gratuit</h4>
                                            <p>Nous mettons à votre disposition nos outils gratuitement. Notre financement viens des donations.</p>
                                        </div>

                                        <div class="service_btn center">
                                            <a href="#" class="btn btn-danger waves-effect waves-red">En savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="jumbotron single_service wow fadeInUp">
                                        <div class="service_icon center">
                                            <i class="far fa-edit m-b-3"></i>
                                        </div>
                                        <div class="s_service_text text-sm-center text-xs-center">
                                            <h4>Customisable</h4>
                                            <p>Nous faisons en sorte que notre outil soit le plus customisable possible pour vous apporté une meilleure expérience.</p>
                                        </div>

                                        <div class="service_btn center">
                                            <a href="#" class="btn btn-danger waves-effect waves-red">En savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="jumbotron single_service wow fadeInRight">
                                        <div class="service_icon center">
                                            <i class="fa fa-plug m-b-3"></i>
                                        </div>
                                        <div class="s_service_text text-sm-center  text-xs-center">
                                            <h4>Dashboard</h4>
                                            <p>Nous mettons à votre disposition un dashboard pour faciliter la gestion de nos outils.</p>
                                        </div>

                                        <div class="service_btn center">
                                            <a href="#" class="btn btn-danger waves-effect waves-red">En savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
        </section> <!-- End of service section -->



        <section id="joinus" class="joinus">
            <div class="main_joinus_area m-y-3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_joinus_content center white-text wow fadeInUp">
                                <i class="fa fa-user-plus m-b-1"></i>
                                <h2 class="text-uppercase m-b-3">Rejoignez notre discord</h2>
                                <p>“ Salutation ! Vous avez des questions ? Vous souhaitez échanger avec d'autres utilisateurs ? Ou simplement discuter avec nous ? Rejoignez notre discord ! ” - Stellaros, Président de MGC</p>

                                <a href="https://discord.gg/Txe9z6T" class="btn btn-danger waves-effect waves-red">Rejoindre le discord</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
        </section> <!-- End of JoinUs section -->




        <section id="offer" class="offer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main_offer_area">
                            <div class="head_title center m-y-3  wow fadeInUp">
                                <h2>Ce que nous offrons</h2>
                            </div>
                            <div class="main_offer_content m-b-3  wow fadeInUp">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single_offer m-t-3">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="single_offer_icon">
                                                        <i class="far fa-comments"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="single_offer_text">
                                                        <h3>Une assistance technique</h3>
                                                        <p>Nous avons des réponses pour vous.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_offer m-t-3">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="single_offer_icon">
                                                        <i class="fas fa-dollar-sign"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="single_offer_text">
                                                        <h3>100% Gratuit</h3>
                                                        <p>Notre outil est totalement gratuit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_offer m-t-3">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="single_offer_icon">
                                                        <i class="fas fa-chart-area"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="single_offer_text">
                                                        <h3>Des statistiques</h3>
                                                        <p>Pour mieux comprendre votre communauté.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_offer m-t-3">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="single_offer_icon">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="single_offer_text">
                                                        <h3>Des innovations</h3>
                                                        <p>Nous améliorons sans cesse nos outils.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
        </section><!-- End of Offer Section -->

        <section id="client" class="client">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="main_client_area">
                            <div class="head_title center m-y-3 wow fadeInUp">
                                <h2>LES AVIS DE NOS UTILISATEURS</h2>
                            </div>
                            <div class="main_client_content m-b-3">

                                <div class="carousel carousel-slider">
                                    <div class="carousel-item" >
                                        <div class="single_client_area">
                                            <div class="single_client">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="single_c_img center">
                                                            <img class="img-circle" src="img/playroom.png" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="single_c_text text-md-left text-xs-center">
                                                            <h3>PlayRoom</h3>
                                                            <span class="text-uppercase m-b-1">Discord communautaire autour des jeux-vidéos</span>
                                                            <p>“ NanoBot est un outil très utile à notre communauté, très pratique et en perpétuel amélioration, des ajouts fréquents et sympathique. Juste génial. ”</br>- Axel, Créateur de PlayRoom</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single_client">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="single_c_img center">
                                                            <img class="img-circle" src="img/stellaros.png" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="single_c_text text-md-left text-xs-center">
                                                            <h3>Votre avis</h3>
                                                            <span class="text-uppercase m-b-1">Donnez nous votre avis</span>
                                                            <p>“ Votre avis est important pour nous ! Alors n'hésitez pas à rejoindre notre discord pour nous donner le votre ! ”</br>- Stellaros, Président MGC et Développeur de NanoBot</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End of carouser item -->
                                    <!-- <div class="carousel-item">
                                        <div class="single_client_area">
                                            <div class="single_client">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="single_c_img center">
                                                            <img class="img-circle" src="img/client1.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="single_c_text text-md-left text-xs-center">
                                                            <h3>Ejazul islam</h3>
                                                            <span class="text-uppercase m-b-1">Ejazul islam</span>
                                                            <p>“ Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s”.......</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single_client">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="single_c_img center">
                                                            <img class="img-circle" src="img/client2.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="single_c_text text-md-left text-xs-center">
                                                            <h3>Iqball Hossain</h3>
                                                            <span class="text-uppercase m-b-1">Psd at koitor bidda</span>
                                                            <p>“ Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s”.......</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
                                </div><!-- End of carouser slider -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
        </section><!-- End of client Section -->


        <section id="counter" class="counter">

            <div class="main_counter_area m-y-3">
                <div class="overlay p-y-3">
                    <div class="container">
                        <div class="row">
                            <div class="main_counter_content center white-text wow fadeInUp">
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                        <i class="fas fa-user"></i>
                                        <h2 class="statistic-counter"><?= $members ?></h2>
                                        <p>Membres</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                        <i class="fas fa-server"></i>
                                        <h2 class="statistic-counter"><?= $guilds ?></h2>
                                        <p>Discord</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                        <i class="fas fa-code"></i>
                                        <h2 class="statistic-counter"><?= $commands ?></h2>
                                        <p>Commandes</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                        <i class="far fa-calendar-alt"></i>
                                        <h2 class="statistic-counter"><?= $dayofdev ?></h2>
                                        <p>Jours de développement</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
        </section><!-- End of counter Section -->



        <section id="team" class="team">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_team_area m-y-3">
                            <div class="head_title center  wow fadeInUp">
                                <h2>Notre équipe</h2>
                                <p>Voici les membres participants à l'élaboration et/ou le développement de nos outils.</p>
                            </div>

                            <div class="main_team_content center">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="single_team white-text m-t-2 wow zoomIn">
                                            <img src="img/stellarosteam.png" alt="team" />
                                            <div class="single_team_overlay">
                                                <h4>Stellaros</h4>
                                                <p>Président & Développeur</p>
                                                <div class="team_socail">
                                                    <a href="https://www.facebook.com/paulstellaros/"><i class="fab fa-facebook"></i></a>
                                                    <a href="https://twitter.com/PaulStellaros"><i class="fab fa-twitter"></i></a>
                                                    <a href="https://discord.gg/Txe9z6T"><i class="fab fa-discord"></i></a>
                                                    <a href="https://www.linkedin.com/in/paul-chambonniere/"><i class="fab fa-linkedin"></i></a>
                                                    <a href="https://www.instagram.com/paulstellaros/"><i class="fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="single_team white-text m-t-2 wow zoomIn">
                                            <img src="img/team2.jpg" alt="team" />
                                            <div class="single_team_overlay">
                                                <h4>Vous</h4>
                                                <p>Développeur Java</p>
                                                <div class="team_socail">
                                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-discord"></i></a>
                                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="single_team white-text m-t-2 wow zoomIn">
                                            <img src="img/team3.jpg" alt="team" />
                                            <div class="single_team_overlay">
                                                <h4>Vous</h4>
                                                <p>Développeur Web</p>
                                                <div class="team_socail">
                                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-discord"></i></a>
                                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="single_team white-text m-t-2 wow zoomIn">
                                            <img src="img/team4.jpg" alt="team" />
                                            <div class="single_team_overlay">
                                                <h4>Vous</h4>
                                                <p>Community Manager</p>
                                                <div class="team_socail">
                                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-discord"></i></a>
                                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End of col-sm-3 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
        </section><!-- End of Team section -->

        <section id="footer" class="footer">
            <div class="main_coppyright">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="copyright_text m-t-2 text-xs-center">
                                <p class="wow zoomIn" data-wow-duration="1s">MythiGame Community - MGC 2019-2021</a> Tous droits réservés.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="socail_coppyright text-sm-right m-t-2 text-xs-center wow zoomIn">
                                <a href="https://twitter.com/MythiGame"><i class="fab fa-twitter"></i></a>
                                <a href="https://discord.gg/Txe9z6T"><i class="fab fa-discord"></i></a>
                                <a href="https://www.linkedin.com/company/mythigame-community/"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>







        <!-- /Start your project here-->


        <!-- SCRIPTS -->

        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/tether.min.js"></script>


        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>

        <!-- Wow js -->
        <script type="text/javascript" src="js/wow.min.js"></script>

        <!-- Mixitup js -->
        <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>

        <!-- Magnific-popup js -->
        <script type="text/javascript" src="js/jquery.magnific-popup.js"></script>

        <!-- accordion js -->
        <script type="text/javascript" src="js/accordion.js"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/materialize.js"></script>

        <script>
            $(".button-collapse").sideNav();
        </script>

        <!-- wow js active -->
        <script type="text/javascript">
            new WOW().init();
        </script>

        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/main.js"></script>


    </body>

</html>
