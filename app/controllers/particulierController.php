<?php
// models article
require_once(ROOT .'/app/models/particulier.php');
require_once(ROOT .'/app/models/reservation.php');

function adminPP (){

    $AllHotel= findAllHotel();
    $mostlike = mostlike();
    $reservation = listebookingclient($_SESSION['user']->id);
    require_once(ROOT .'/view/layout/_header.php');
    require_once(ROOT .'/view/administration/adminPP.php');

    require_once(ROOT .'/view/layout/_footer.php');
}