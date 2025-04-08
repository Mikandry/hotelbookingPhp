<?php
require_once(ROOT . '/app/models/article.php');


function detailHotel(){
    
        // var_dump($_GET['hotel_id'])
    if(isset($_GET['hotel_id'])){
        $hotel_id=$_GET['hotel_id'];
        //  var_dump($hotel_id);
        if(isset($_POST['btncomment'])){
            $contenu=htmlspecialchars($_POST['contenu']);
            $user_id= htmlspecialchars($_SESSION['user']->id);
            $note= htmlspecialchars($_POST['note']);
            // echo 'vous tenter de commenter';
            if(!empty($contenu)){
                insertcomment($contenu, $note, $user_id,$hotel_id);
                // echo 'successfully commented';
            }
        }
        
    }
    $detailImage= detailimageHotel($hotel_id);
   
    $commentaires = findCommentaire($hotel_id);
    $AllHotel= findAllHotel();
    $mostlike = mostlike();
    // $oneHotels= findoneHotel($hotel_id);
    $oneHotels= findoneHotel();
    require_once(ROOT . '/view/layout/_header.php'); 
    require_once(ROOT . '/view/article/detailHotel.php');
    // require_once(ROOT . '/view/home/accueil.php');
    require_once(ROOT . '/view/layout/_footer.php');
   
}

function gestionHotel(){
    $AllHotel= findAllHotel();
    // var_dump($AllHotel);
    $oneHotels= findoneHotel();
    // insertchambre();
    $mostlike = mostlike();

    
     $id = $_SESSION['user']->id;
$captureID = findHotelbyUserid2($id);
// var_dump($captureID->id);  


    
    if(isset($_POST['ajoutChambre'])){
        $hotel_id= htmlspecialchars($_POST['hotel_id']);
        $type= htmlspecialchars($_POST['type']);
        $prix= htmlspecialchars($_POST['prix']);
        $capacite= htmlspecialchars($_POST['capacite']);
        $disponibilite= htmlspecialchars($_POST['disponibilite']);
        insertchambre($hotel_id, $type, $prix, $capacite,$disponibilite);
        header('LOCATION: /?url=nouveauImage');
    }
    require_once(ROOT . '/view/layout/_header.php'); 
    require_once(ROOT . '/view/article/gestionHotel.php');
    require_once(ROOT . '/view/layout/_footer.php');
    
}




function ajoutArticle (){

    if(isset($_POST['ajoutArticle'])){
        $nom= htmlspecialchars($_POST['titre']);
        $adres= htmlspecialchars($_POST['adresse']);
        $hote= htmlspecialchars($_POST['hote']);
        $description= htmlspecialchars($_POST['description']);
        $classe= htmlspecialchars($_POST['classe']);
        $distraction= htmlspecialchars($_POST['distraction']);
        $paiment= htmlspecialchars($_POST['paiment']);
        $reduction= htmlspecialchars($_POST['reduction']);
        $rembourssement= htmlspecialchars($_POST['rembourssement']);
        $prix= htmlspecialchars($_POST['prix']);
        $nuité= htmlspecialchars($_POST['nuite']);
        $chambreID= htmlspecialchars($_POST['chambreID']);
        $email= htmlspecialchars($_POST['email']);
        $telephone= htmlspecialchars($_POST['phone']);
        $user_id= htmlspecialchars($_POST['user_id']);
        $image= $_FILES['image'];
        // $image= 'url.jpg';
            
        if(isset($_FILES['image']) && $_FILES['image']['error']==0){
            $imageInfo= pathinfo($_FILES['image']['name']);
            $extensionImage = $imageInfo['extension'];
            $correctImage= rand() . '.' .$extensionImage;
            move_uploaded_file($_FILES['image'] ['tmp_name'], "uploads/img/" .$correctImage);
            
              insertHotel($nom , $adres, $hote , $description , $classe, $distraction, $paiment, $reduction, 
             $rembourssement,$prix, $nuité, $chambreID, $email, $telephone, $user_id, $correctImage);
            header('LOCATION: /?url=gestionHotel');
        }else{
            echo 'Vérifier bien que tous les champs sont ne sont pas vides';
        }
       

    }
// ajout plus de photo    // 
        // if(!isset($_SESSION['user'])){
        //     header('LOCATION: /?url=connexion');
        // }else{
            if(isset($_POST['btnAjoutImage'])){
            header('LOCATION: /?url=nouveauImage');}
        // }else{
        //     header('LOCATION: /?url=ajoutArticle');
        // }
        // }
        $mostlike = mostlike();
    $AllHotel= findAllHotel();
   require_once(ROOT . '/view/article/nouveauArticle.php');
    require_once(ROOT . '/view/layout/_footer.php');
}

function profile (){
    $AllHotel= findAllHotel();
    $mostlike = mostlike();
    if(isset($_POST['btnupdate'])){
         $nom= htmlspecialchars($_POST['hotel_name']);
         $description= htmlspecialchars($_POST['hotel_description']);
        $nuite= htmlspecialchars($_POST['hotel_price']);
        $email= htmlspecialchars($_POST['email']);
        $id= htmlspecialchars($_POST['hotel_id']);
        updateHotel($nom, $description, $nuite, $email, $id);
    }

    require_once(ROOT . '/view/layout/_header.php'); 
    require_once(ROOT . '/view/article/profile.php');
    require_once(ROOT . '/view/layout/_footer.php');
}

function nouveauImage(){
    $id = $_SESSION['user']->id;
    $captureID = findHotelbyUserid2($id);
    
    if (isset($_POST['ajoutImages'])){
       
        $hotel_id= htmlspecialchars($_POST['hotel_id']);
        if(isset($_FILES['image1'] ) && $_FILES['image1']['error']==0){
            $imageInfo= pathinfo($_FILES['image1']['name']);
            $extensionImage = $imageInfo['extension'];
            $correctImage= rand() . '.' .$extensionImage;
            move_uploaded_file($_FILES['image1'] ['tmp_name'], "uploads/img/" .$correctImage);
            // image 2
            
            if(isset($_FILES['image2'] ) && $_FILES['image2']['error']==0){
                $imageInfo2= pathinfo($_FILES['image2']['name']);
                $extensionImage2 = $imageInfo2['extension'];
                $correctImage2= rand() . '.' .$extensionImage2;
                move_uploaded_file($_FILES['image2'] ['tmp_name'], "uploads/img/" .$correctImage2);
                // image3
                if(isset($_FILES['image3'] ) && $_FILES['image3']['error']==0){
                    $imageInfo3= pathinfo($_FILES['image3']['name']);
                    $extensionImage3 = $imageInfo3['extension'];
                    $correctImage3= rand() . '.' .$extensionImage3;
                    move_uploaded_file($_FILES['image3'] ['tmp_name'], "uploads/img/" .$correctImage3);
                    // image4
                    if(isset($_FILES['image4'] ) && $_FILES['image4']['error']==0){
                        $imageInfo4= pathinfo($_FILES['image4']['name']);
                        $extensionImage4 = $imageInfo4['extension'];
                        $correctImage4= rand() . '.' .$extensionImage4;
                        move_uploaded_file($_FILES['image4'] ['tmp_name'], "uploads/img/" .$correctImage4);
            
            insertImage($correctImage, $correctImage2, $correctImage3, $correctImage4, $hotel_id);
           
            header('LOCATION: /?url=profile');
        }else{
            echo 'Vérifier bien que tous les champs sont ne sont pas vides';
        } }}}
    }
    $AllHotel= findAllHotel();
    $mostlike = mostlike();
    require_once(ROOT . '/view/layout/_header.php');
    require_once(ROOT . '/view/article/nouveauImage.php');
    require_once(ROOT . '/view/layout/_footer.php');
}

function findCommentaire($id){
    $query="SELECT h.id ,c.contenu ,c.created_at , u.nom  FROM commentaire as c INNER JOIN user as u ON u.id= c.user_id INNER JOIN hotel as h ON h.id=c.hotel_id  WHERE h.id= :id";
    $request= Db()->prepare($query);
    $request->bindValue(':id' , $id);
    $request->execute();
    return $request->fetchAll(PDO ::FETCH_OBJ);
}



