<?php
require_once(ROOT . '/database/database.php');

function verifierPlace($hotel_id){

    $query="SELECT c.id,c.type ,c.capacite, c.disponibilite , h.nom FROM chambre as c INNER JOIN hotel as h ON c.hotel_id= h.chambre_id WHERE h.id= :hotel_id";
    $request = Db()->prepare($query);
     $request->bindValue(':hotel_id' , $hotel_id);
    $request->execute();
    return $request->fetchAll(PDO::FETCH_OBJ);

   

}
 function insertreservation ($user_id, $chambre_id, $date_debut, $date_fin, $nbrpersonne){
// function insertreservation ($chambre_id){
    
    $query = "INSERT INTO reservation (user_id , chambre_id, date_debut,date_fin, nbrpersonne) VALUES(:user_id ,:chambre_id, :date_debut , :date_fin , :nbrpersonne)";
    $request = Db()->prepare($query);
    $request->bindValue(':user_id' , $user_id);
    $request->bindValue(':chambre_id' , $chambre_id);
    $request->bindValue(':date_debut' , $date_debut);
    $request->bindValue(':date_fin' , $date_fin);
    $request->bindValue(':nbrpersonne' , $nbrpersonne);
    $request->execute();
    // return true;  


    // update chambre
    $updatequery="UPDATE chambre SET disponibilite = false WHERE id = :chambre_id  AND disponibilite = true";
    $updaterequest = Db()->prepare($updatequery);
    $updaterequest->bindValue(':chambre_id' , $chambre_id);
    $updaterequest->execute();
    return true;  
}

function updateChambreAvailability() {
    // Récupère toutes les réservations avec une date de départ antérieure à la date actuelle
    $query = "UPDATE chambre 
              SET disponibilite = true 
              WHERE id IN (SELECT chambre_id 
                            FROM reservation 
                            WHERE date_fin < NOW() 
                            AND chambre_id IS NOT NULL)";
    
    $request = Db()->prepare($query);
    $request->execute();
}

function statistique ($hotel_id){
    $query ="SELECT  c.id as chambreId, h.id as hotelId, u.email,r.date_debut,com.contenu, r.nbrpersonne,com.user_id, r.date_fin,COUNT(com.contenu) as totalcom, COUNT(rea.islike)as totaljaime, c.type ,u.nom as nomClient , h.nom as nomHotel FROM chambre as c INNER JOIN hotel as h
     ON c.hotel_id= h.id INNER JOIN reservation as r ON r.chambre_id = c.id INNER JOIN reaction as rea ON rea.hotel_id= h.id
     INNER JOIN user as u ON u.id= r.user_id INNER JOIN commentaire as com ON com.hotel_id=h.id
      WHERE C.disponibilite = 0 AND h.id= :hotel_id
      GROUP BY c.id, h.id, u.email, r.date_debut, com.contenu, com.user_id,r.nbrpersonne, r.date_fin, c.type, u.nom, h.nom";
      $request = Db()->prepare($query);
      $request->bindValue(':hotel_id' , $hotel_id);
     $request->execute();
    //  var_dump($request);
     return $request->fetchAll(PDO::FETCH_OBJ);
}

function feelingreaction ($hotel_id){
    $query="SELECT  
        h.id AS hotelId, 
        u.email,
        com.contenu,
        com.user_id,
        COUNT(com.contenu) AS totalcom, 
        COUNT(rea.islike) AS totaljaime, 
        u.nom AS nomClient, 
        h.nom AS nomHotel 
    FROM hotel AS h 
    INNER JOIN reaction AS rea ON rea.hotel_id = h.id
    INNER JOIN user AS u ON u.id = rea.user_id
    INNER JOIN commentaire AS com ON com.hotel_id = h.id
    WHERE h.id = :hotel_id AND rea.islike = 1
    GROUP BY 
        h.id, 
        u.email, 
        com.contenu, 
        com.user_id, 
        u.nom, 
        h.nom
";
$request = Db()->prepare($query);
$request->bindValue(':hotel_id' , $hotel_id);
$request->execute();
// var_dump($request);
return $request->fetchAll(PDO::FETCH_OBJ);
}

function listereserver ($hotel_id){
$query="SELECT h.id, c.disponibilite, COUNT(c.id) as total_chambres
FROM hotel AS h
INNER JOIN chambre AS c ON c.hotel_id = h.id
GROUP BY h.id, c.disponibilite
ORDER BY h.id";
$request = Db()->prepare($query);
      $request->bindValue(':hotel_id' , $hotel_id);
     $request->execute();
    //  var_dump($request);
     return $request->fetchAll(PDO::FETCH_OBJ);
}

function newstat ($hotel_id){
    $query="SELECT u.nom,u.email, c.id AS chambreId, h.id AS hotelId, r.date_debut, r.date_fin, r.nbrpersonne, c.type
FROM chambre AS c
INNER JOIN hotel AS h ON c.hotel_id = h.id
INNER JOIN reservation AS r ON r.chambre_id = c.id
INNER JOIN user AS u ON u.id= r.user_id
WHERE c.disponibilite = 0 AND h.id = :hotel_id";
$request = Db()->prepare($query);
$request->bindValue(':hotel_id' , $hotel_id);
$request->execute();
//  var_dump($request);
return $request->fetchAll(PDO::FETCH_OBJ);
}


// particulier

function listebookingclient ($user_id){
    $query="SELECT 
    u.id, 
    r.date_debut, 
    r.date_fin, 
    c.type, r.nbrpersonne,
    u.nom, 
    h.email 
FROM 
    reservation AS r
INNER JOIN 
    user AS u ON r.user_id = u.id
INNER JOIN 
    chambre AS c ON r.chambre_id = c.id
INNER JOIN 
    hotel AS h ON c.hotel_id = h.id
WHERE 
    r.user_id= :user_id";
    $request = Db()->prepare($query);
          $request->bindValue(':user_id' , $user_id);
         $request->execute();
        //  var_dump($request);
         return $request->fetchAll(PDO::FETCH_OBJ);
    }


    function feelingreaction2($user_id) {
        $query = "
            SELECT  
                h.id AS hotelId, 
                u.email,
                com.contenu,
                com.user_id,
                COUNT(com.contenu) AS totalcom, 
                COUNT(rea.islike) AS totaljaime, 
                u.nom AS nomClient, 
                h.nom AS nomHotel 
            FROM hotel AS h 
            INNER JOIN reaction AS rea ON rea.hotel_id = h.id
            INNER JOIN user AS u ON u.id = rea.user_id
            INNER JOIN commentaire AS com ON com.hotel_id = h.id
            WHERE h.id = :hotel_id 
            AND com.user_id = :user_id  -- Filtrer par l'ID de l'utilisateur
            GROUP BY 
                h.id, 
                u.email, 
                com.contenu, 
                com.user_id, 
                u.nom, 
                h.nom
        ";
        
        $request = Db()->prepare($query);
        // $request->bindValue(':hotel_id', $hotel_id);
        $request->bindValue(':user_id', $user_id);  // Lier l'ID de l'utilisateur
        $request->execute();
        
        return $request->fetchAll(PDO::FETCH_OBJ);
    }
    