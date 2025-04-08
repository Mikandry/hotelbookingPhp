<?php
require_once(ROOT . '/app/models/reservation.php');


function reservation(){
    $message = null;
    $success = null;
    $AllHotel= findAllHotel();
    $mostlike = mostlike();
    

    if(isset($_GET['hotel_id'])){  
        $hotel_id=$_GET['hotel_id'];
        //  var_dump($hotel_id);
        // echo ($hotel_id);
        $places = verifierPlace($hotel_id);

        if(isset($_POST['btnreserver'])){
        $date_entree= $_POST['check_in'];
        $date_sortie= $_POST['check_out'];
             if($date_entree<$date_sortie){
                // valeur à inserer dans reservation
                // $date_entree=htmlspecialchars($_POST['check_in']);

                
                $chambre_id= htmlspecialchars($_POST['chambre_id']);
                $nbrpersonne= htmlspecialchars($_POST['num_guests']);
                $guest_name= htmlspecialchars($_POST['guest_name']);
                if(isset($_POST['select'])){
                    // echo $chambre_id;
                }

                // insertreservation($guest_name, $hotel_id, $date_entree, $date_sortie,$nbrpersonne);
                insertreservation($guest_name, $chambre_id, $date_entree, $date_sortie,$nbrpersonne);
                header('LOCATION: /?url=paiement');
                 
            }
          
        }else{
            $message= 'verifier bien la date';
        }

    }





    require_once(ROOT . '/view/layout/_header.php'); 
    require_once(ROOT . '/view/article/reservation.php');
    require_once(ROOT . '/view/layout/_footer.php');
}