<?php
require_once(ROOT . '/database/database.php');

function findoneHotel(){
    // $query="SELECT h.id, h.nom ,h.adresse,h.hote, h.description, h.classe, h.distraction,h.prepaiment,h.reduction,h.rembourssement,h.prix,h.nuite,h.email,h.image FROM hotel as h INNER JOIN user u ON u.id=h.user_id ";
    $query="SELECT h.id, h.nom ,h.adresse,h.hote, h.description, h.classe, h.distraction,h.prepaiment,h.reduction,h.rembourssement,h.prix,h.nuite,h.email,h.image, h.chambre_id as identifchambre FROM chambre as c INNER JOIN hotel as h ON c.hotel_id=h.chambre_id ";
    // $query="SELECT h.id, h.nom ,h.adresse,h.hote, h.description, h.classe, h.distraction,h.prepaiment,h.reduction,h.rembourssement,h.prix,h.nuite,h.email,h.image FROM chambre as c INNER JOIN hotel as h ON c.hotel_id=h.id WHERE h.id= :hotel_id ";
    $request= Db()->prepare($query);
    // $request->bindValue(':hotel_id' , $hotel_id);
    $request->execute();
    return $request->fetch(PDO::FETCH_OBJ);
}

function findAllHotel(){
    // $query="SELECT h.id, h.nom ,h.adresse,h.hote, h.description, h.classe, h.distraction,h.prepaiment,h.reduction,h.rembourssement,h.prix,h.nuite,h.email,h.image, h.user_id FROM hotel as h INNER JOIN user u ON u.id=h.user_id ";
    $query="SELECT COUNT(DISTINCT r.id) as total_like, COUNT(DISTINCT com.id) as total_com ,h.id, h.nom ,h.adresse,h.hote, h.description, h.classe, h.distraction,h.prepaiment,h.reduction,h.rembourssement,h.prix,h.nuite,h.email,h.image, h.user_id 
FROM hotel as h 
INNER JOIN user u ON u.id=h.user_id
LEFT JOIN reaction as r ON r.hotel_id=h.id
LEFT JOIN commentaire as com ON com.hotel_id=h.id
GROUP BY h.id";

    $request= Db()->prepare($query);
    $request->execute();
    return $request->fetchall(PDO::FETCH_OBJ);
}

// function insertHotel($nom , $adresse, $hote , $description ,
//     $classe, $distraction, $prepaiment, $reduction, 
//     $rembourssement,$prix, $nuite, $chambre_id, $email, 
//     $telephone, $user_id, $image){

//     $query="INSERT INTO hotel (nom, adresse, hote , description ,
//      classe, distraction, prepaiment, reduction, 
//      rembourssement, prix, nuite, chambre_id, email,
//       telephone, user_id, image) VALUES
//      (:nom , :adresse, :hote, :description , 
//      :classe, :distraction, :prepaiment, :reduction, :rembourssement,
//       :prix, :nuite, :chambre_id, :email, :telephone, :user_id, :image)";
//         $request= Db()->prepare($query);
//     $request->bindValue(':nom' , $nom);
//     $request->bindValue(':adresse' , $adresse);
//     $request->bindValue(':hote' , $hote);
//     $request->bindValue(':description' , $description);
//     $request->bindValue(':classe' , $classe);
//     $request->bindValue(':distraction' , $distraction);
//     $request->bindValue(':prepaiment' , $prepaiment);
//     $request->bindValue(':reduction' , $reduction);
//     $request->bindValue(':rembourssement' , $rembourssement);
//     $request->bindValue(':prix' , $prix);
//     $request->bindValue(':nuite' , $nuite);
//     $request->bindValue(':chambre_id' , $chambre_id);
//     $request->bindValue(':email' , $email);
//     $request->bindValue(':telephone' , $telephone);
//     $request->bindValue(':user_id' , $user_id);
//     $request->bindValue(':image' , $image);
//     $request->execute();
//     return true;
// }

function insertcomment($contenu, $note, $user_id,$hotel_id){
    $query = "INSERT INTO commentaire (contenu , note, user_id, hotel_id) VALUES(:contenu , :note, :user_id,:hotel_id)";
    $request = Db()->prepare($query);
    $request->bindValue(':contenu' , $contenu);
    $request->bindValue(':note' , $note);
    $request->bindValue(':user_id' , $user_id);
    $request->bindValue(':hotel_id' , $hotel_id);
    $request->execute();
    return true;   
}

function detailimageHotel($hotel_id){
    $query= "SELECT i.image, i.image2, i.image3, i.image4, h.image as fond, h.nom, h.description, h.nuite, h.distraction ,h.classe,h.prepaiment, h.telephone, h.email FROM hotel as h INNER JOIN image as i ON i.hotel_id= h.id INNER JOIN user as u ON u.id= h.user_id WHERE h.id= :hotel_id";
    $request= Db()->prepare($query);
    $request->bindValue(':hotel_id' , $hotel_id);
    $request->execute();
    return $request->fetchAll(PDO::FETCH_OBJ);
}
// Function trouver hotel par Id

function findHotelById(int $id){
    $query="SELECT h.image,h.description  FROM hotel as h INNER JOIN image as i ON h.id=i.hotel_id INNER JOIN user as u ON u.id= h.user_id WHERE h.id= :hotel_id";
     $request = Db()->prepare($query);
     $request->bindValue(':hotel_id' , $id);
    $request->execute();
    return $request->fetch(PDO::FETCH_OBJ);

}
function insertImage ($image1, $image2, $image3, $image4, $hotel_id){
    $query = "INSERT INTO image (image , image2, image3,image4, hotel_id) VALUES(:image ,:image2, :image3 , :image4 , :hotel_id)";
    $request = Db()->prepare($query);
    $request->bindValue(':image' , $image1);
    $request->bindValue(':image2' , $image2);
    $request->bindValue(':image3' , $image3);
    $request->bindValue(':image4' , $image4);
    $request->bindValue(':hotel_id' , $hotel_id);
    $request->execute();
    return true;   
    
}

function imageslide(){
    $query= "SELECT i.image, i.image2, i.image3, i.image4  FROM image as i WHERE i.id=1";
    $request= Db()->prepare($query);
       $request->execute();
    return $request->fetchAll(PDO::FETCH_OBJ);
}

function findallimage(){
    $query="SELECT * FROM hotel ";
     $request = Db()->prepare($query);
     $request->execute();
    return $request->fetchall(PDO::FETCH_OBJ);

}
function updateHotel($nom, $description, $nuite, $email, $id){
$query="UPDATE hotel SET nom = :nom, description = :description, nuite= :nuite, email = :email WHERE id=:id";
        $request = Db()->prepare($query);
    $request->execute([
        ':nom' =>$nom,
        ':description' =>$description,
        ':nuite' =>$nuite,
        ':email' =>$email,
        ':id' =>$id
        ]
        );
    return true;
}

function searchHotels($keyword) {
    
    $query = "SELECT h.id , h.nom , h.description ,h.hote,h.distraction, h.image, h.adresse , u.nom 
    FROM hotel as h INNER JOIN user u ON u.id= h.user_id
     INNER JOIN chambre as c ON c.id=c.hotel_id WHERE  h.nom LIKE :keyword";
    
    
    $request = Db()->prepare($query);
    $request->bindValue(':keyword', '%' . $keyword . '%');
    $request->execute(); 
    return $request->fetchAll(PDO::FETCH_OBJ);
}


function insertchambre($hotel_id, $type, $prix,$capacite, $disponibilite){
    $query = "INSERT INTO chambre (hotel_id , type, prix, capacite, disponibilite) VALUES(:hotel_id , :type, :prix,:capacite , :disponibilite)";
    $request = Db()->prepare($query);
    $request->bindValue(':hotel_id' , $hotel_id);
    $request->bindValue(':type' , $type);
    $request->bindValue(':prix' , $prix);
    $request->bindValue(':capacite' , $capacite);
    $request->bindValue(':disponibilite' , $disponibilite);
    $request->execute();

    // insertion des image de la chambre
    // $query = "INSERT INTO chambre (hotel_id , type, prix, capacite, disponibilite) VALUES(:hotel_id , :type, :prix,:capacite , :disponibilite)";
    return true;   
}

function mostComment(){
    $query= 'SELECT h.id, h.user_id, h.chambre_id, COUNT(DISTINCT c.id) as total_comment, COUNT(DISTINCT r.id) as total_like, h.image, h.nom, h.adresse
    FROM hotel as h
    LEFT JOIN commentaire as C ON h.id=c.hotel_id
    LEFT JOIN reaction as r ON r.hotel_id=h.id
    GROUP BY h.id
    ORDER BY total_comment DESC
    LIMIT 3';
    // $query ='SELECT h.id, COUNT(c.id) as total_comment, h.image, h.nom, h.adresse
    // FROM hotel as h
    // LEFT JOIN commentaire as C ON h.id=c.hotel_id
    // GROUP BY h.id
    // ORDER BY total_comment DESC
    // LIMIT 3';
    $request = Db()->prepare($query);
    $request->execute();
    return $request->fetchAll(PDO::FETCH_OBJ);
}

function reaction ($hotel_id, $user_id){
    // $islike = 
    $query ='SELECT * FROM reaction WHERE hotel_id = :hotel_id AND user_id= :user_id';
    $request = Db()->prepare($query);
    $request->bindValue(':hotel_id' , $hotel_id);
    $request->bindValue(':user_id' , $user_id);
    $request->execute();
    return $request->fetchAll(PDO::FETCH_OBJ);

    // $result = $request->get_result();
    // if (result )
}
function insertLike ($hotel_id, $user_id){
    $query ="INSERT INTO reaction (hotel_id, user_id, islike) values (:hotel_id, :user_id, 1)";
    $request = Db()->prepare($query);
    $request->bindValue(':hotel_id' , $hotel_id);
    $request->bindValue(':user_id' , $user_id);
    $request->execute();
    return true; 
}
function findlike(){
    
    // $query ='SELECT r.hotel_id, COUNT(islike) as total_like
    // FROM reaction as r
    // LEFT JOIN hotel as h ON r.hotel_id=h.id
    // GROUP BY r.hotel_id';
    //  $request = Db()->prepare($query);
    // //  $request->bindValue(':hotel_id' , $hotel_id);
    //  $request->execute();
    // return $request->fetch(PDO::FETCH_OBJ);

}

function mostlike(){
    $query= 'SELECT h.id, COUNT(DISTINCT r.id) as totallike, h.image, h.nom, h.adresse
    FROM hotel as h
    LEFT JOIN reaction as r ON r.hotel_id=h.id
    GROUP BY h.id
    ORDER BY totallike DESC
    LIMIT 3';
    $request = Db()->prepare($query);
    $request->execute();
    return $request->fetchAll(PDO::FETCH_OBJ);
}


function findHotelbyUserid($id){
    $query="SELECT *  FROM hotel  WHERE id= :id";
     $request = Db()->prepare($query);
     $request->bindValue(':id' , $id);
    $request->execute();
    return $request->fetch(PDO::FETCH_OBJ);
}

function findHotelbyUserid2($id){
    $query="SELECT *  FROM hotel  WHERE user_id = :id";
     $request = Db()->prepare($query);
     $request->bindValue(':id' , $id);
    $request->execute();
    return $request->fetch(PDO::FETCH_OBJ);
}


// new function pour mettre a jour la chambre_id
function insertHotel($nom, $adresse, $hote, $description,
    $classe, $distraction, $prepaiment, $reduction, 
    $rembourssement, $prix, $nuite, $chambre_id, $email, 
    $telephone, $user_id, $image) {

    // Requête d'insertion de l'hôtel sans spécifier de valeur pour chambre_id (auto-incrémenté)
    $query = "INSERT INTO hotel (nom, adresse, hote, description,
        classe, distraction, prepaiment, reduction, 
        rembourssement, prix, nuite, email, 
        telephone, user_id, image) 
        VALUES (:nom, :adresse, :hote, :description, 
        :classe, :distraction, :prepaiment, :reduction, :rembourssement,
        :prix, :nuite, :email, :telephone, :user_id, :image)";
    
    // Préparation de la requête d'insertion
    $request = Db()->prepare($query);
    $request->bindValue(':nom', $nom);
    $request->bindValue(':adresse', $adresse);
    $request->bindValue(':hote', $hote);
    $request->bindValue(':description', $description);
    $request->bindValue(':classe', $classe);
    $request->bindValue(':distraction', $distraction);
    $request->bindValue(':prepaiment', $prepaiment);
    $request->bindValue(':reduction', $reduction);
    $request->bindValue(':rembourssement', $rembourssement);
    $request->bindValue(':prix', $prix);
    $request->bindValue(':nuite', $nuite);
    $request->bindValue(':email', $email);
    $request->bindValue(':telephone', $telephone);
    $request->bindValue(':user_id', $user_id);
    $request->bindValue(':image', $image);
    
    // Exécution de la requête d'insertion
    $request->execute();

    // Récupérer l'ID généré automatiquement après l'insertion

    
    // Récupérer l'ID généré
   $newquery="SELECT * FROM hotel ORDER BY id DESC LIMIT 1";
   $newrequest = Db()->prepare($newquery);
   $newrequest->execute();
        $lasthotel_id= $newrequest->fetch(PDO::FETCH_OBJ)->id;
        // var_dump($lasthotel);
         
    // Vérifier si l'ID est valide avant de procéder à la mise à jour
    // if ($last_inserted_id) {
    //     // Mise à jour de la colonne chambre_id avec l'ID généré
        $updateQuery = "UPDATE hotel SET chambre_id = :chambre_id WHERE id = :id";
        $updateRequest = Db()->prepare($updateQuery);
        $updateRequest->bindValue(':chambre_id', $lasthotel_id);
        $updateRequest->bindValue(':id', $lasthotel_id); // On met à jour la ligne correspondante avec l'ID
        
        // Exécution de la mise à jour
        $updateRequest->execute();
        
    //  // La mise à jour a été effectuée avec succès
    // } else {
    //     return false; // Si l'ID n'a pas été récupéré, retourner false
    // }
}
