<?php
require_once(ROOT . '/app/models/admin.php');
require_once(ROOT . '/app/models/article.php');

function admin(){

// $stats= statistique();
    $id= $_SESSION['user']->id;
    $hotel_id=findHotelbyUserid2($id)->id;
    // var_dump($hotel_id);
    //  $stats= statistique($hotel_id);
     $feeling= feelingreaction($id);
    $newstats= newstat($hotel_id);
//    var_dump($feeling);
    // require_once(ROOT . '/view/layout/_header.php'); 
    require_once(ROOT . '/view/administration/admin.php'); 
    require_once(ROOT . '/view/administration/chart.php'); 

}

function dashboard(){

    
    $hotels = totalHotel();
    $users= totaluser();
    $comments= totalcomment();
    $allHOtels= allhoteladmin();
    $alluser= alluseradmin();
    // require_once(ROOT . '/view/layout/_header.php'); 
    require_once(ROOT . '/view/administration/dashboard.php'); 
    // require_once(ROOT . '/view/administration/chart.php'); 

}

function adminP(){

}
function profileP(){
    require_once(ROOT . '/view/layout/_header.php'); 
    require_once(ROOT . '/view/article/profileP.php'); 
    require_once(ROOT . '/view/layout/_footer.php'); 
}
