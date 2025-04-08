<?php

require_once(ROOT . '/app/models/article.php');
function accueil(){
    
     //$_SESSION['user'];
      $AllHotel= findAllHotel();
     // $hotel_id= htmlspecialchars($_POST["inptcom"]);
    $slide= imageslide();
    $allimageS= findallimage();
    $mostcomments = mostComment();
    $mostlike = mostlike();
   // $simple = findoneHotel();
   
    
    if(isset($_POST['btnlike'])){
         $hotel_id= htmlspecialchars($_POST["inptID"]);
         insertLike($hotel_id, $_SESSION['user']->id);
    }


    if(isset($_POST['btnsearch'])){
        $keywords= htmlspecialchars($_POST['searchlocaux']);
        if(!empty($keywords)){

        searchHotels($keywords);
        // var_dump($keywords);
        } else{
        echo 'vide';
        }       
    }else{
        $AllHotel= findAllHotel();
        // var_dump($AllHotel);
    }

    require_once(ROOT . '/view/layout/_header.php'); 
    require_once(ROOT . '/view/home/accueil.php');
    require_once(ROOT . '/view/layout/_footer.php');
}