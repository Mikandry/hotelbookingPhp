<?php

require_once(ROOT . '/app/controllers/accueilController.php');
require_once(ROOT . '/app/controllers/articleController.php');
require_once(ROOT . '/app/controllers/connexionController.php');
require_once(ROOT . '/app/controllers/adminController.php');
require_once(ROOT . '/app/controllers/reservationController.php');
require_once(ROOT . '/app/controllers/particulierController.php');
require_once(ROOT . '/app/controllers/paiement.php');
require_once(ROOT . '/app/controllers/stathotel.php');
require_once(ROOT . '/app/controllers/exploreHotelController.php');

require_once(ROOT . '/database/database.php');
Db();

function router(){

     session_start();
    
    if(isset($_GET['url'])){
        $url = $_GET['url'];
        
        if($url == 'accueil'){
            accueil();
        }elseif($url == 'connexion'){
            connexion();
        }
        elseif($url == 'deconnexion'){
            deconnexion();
        }elseif($url == 'detailHotel'){
            detailHotel();
        }
        elseif($url == 'gestionHotel'){
            gestionHotel();
        }
        elseif($url == 'inscription'){
            inscription();
        }
        elseif($url == 'reservation'){
            reservation();
        }
        elseif($url == 'admin'){
            admin();
        }
        elseif($url == 'adminPP'){
            adminPP();
        }
        elseif($url == 'profile'){
            profile();
        }
        elseif($url == 'ajoutArticle'){
            ajoutArticle();
        }
        elseif($url == 'nouveauImage'){
           
            nouveauImage();
        }elseif($url == 'page=statistics'){
           
            chart();
        }
        elseif($url == 'connexionP'){
            connexionP();
        }
        elseif($url == 'inscriptionP'){
            inscriptionP();
        }
        elseif($url == 'paiement'){
            paiement();
        }
        elseif($url == 'chartHotel'){
            chartHotel();
        }
        elseif($url == 'dashboard'){
            dashboard();
        }
        elseif($url == 'exploreHotel'){
            exploreHotel();
        }
        elseif($url == 'adminP'){
            adminP();
        }
        elseif($url == 'profileP'){
          //  profileP();
        }
        else{
            echo 'Vous avez taper un lien qui n existe pas';
            accueil();
        }

    }else{
        accueil();
    }
}

