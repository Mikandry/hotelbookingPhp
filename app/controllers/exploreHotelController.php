<?php
require_once(ROOT . '/app/models/exploreHotel.php');
require_once(ROOT . '/app/models/article.php');

function exploreHotel(){
    $allimageS= findallimage();
    $mostcomments = mostComment();
    $AllHotel= findAllHotel();
    $mostlike = mostlike();

    if(isset($_POST['btn_chercher'])){
        
        $input= htmlspecialchars($_POST['inptsearch']);
         $searches = searchHotels($input);
         
    } else {
        $searches = [];  
    }
    
    require_once(ROOT . '/view/layout/_header.php'); 
    require_once(ROOT . '/view/article/explorehotel.php');
    require_once(ROOT . '/view/layout/_footer.php');
}