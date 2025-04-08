<?php
// models article
require_once(ROOT .'/app/models/user.php');

function connexion(){
    $message = null;
if(isset($_POST['btnLog'])){
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
if(!empty($email) && !empty($password)){
    $user= findByemail(($email));
    // var_dump($user);
    if($user->email == $email && password_verify($password, $user->password)){
    
    $_SESSION['user'] = $user;


     if ($user->role =='Hotelier'){
             
        header('Location:/?url=profile');
    }elseif($user->role =='Particulier'){
        header('Location:/?url=profileP');
        
    }
    elseif($user->role =='Admin'){
        header('Location:/?url=dashboard');}
        else{
        header('Location:/?url=accueil');
    }
    
} else{
    $message='votre email ou mot de passe est invalid';
}
}else{ $message = 'remplir tous les champs';}

}
$AllHotel= findAllHotel();
$mostlike = mostlike();
    // require_once(ROOT . '/view/layout/_header.php'); 
    require_once(ROOT .'/view/registration/connexion.php');  
    require_once(ROOT . '/view/layout/_footer.php');
}




    function deconnexion(){
        session_start();
        unset($_SESSION['user']);
        session_destroy();
        return header('Location:/?url=connexion');
    }
   




function inscription(){
    $AllHotel= findAllHotel();
    $mostlike = mostlike();
    $message = null;
    $success = null;
if(isset($_POST['btn_Inscription'])){
    $nom = htmlspecialchars($_POST['nom']);
    // $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirmPassword = htmlspecialchars($_POST['confirmPassword']);
    $role = htmlspecialchars($_POST['role']);

    if(
        !empty($nom) &&
        !empty($role) &&
        !empty($email) &&
        !empty($password) &&
        !empty($confirmPassword)
    ){
       if(filter_var($email , FILTER_VALIDATE_EMAIL)){

        if(findByEmail($email)->email != $email){

            if($password === $confirmPassword){
                $password_hash = password_hash($password, PASSWORD_DEFAULT);
                subscribeHotel($nom , $email , $password_hash, $role);
                $success = 'Inscription reussite';
                header('location: /?url=connexion&message=success ');
    
            }else{
                $message="Votre mot de passe n'est pas identique";
            }
        }else{
            $message= 'Cette adresse est déjà liée à un autre compte, choisissez une autre ou verifier votre compte';
        }        
       }else{
        $message = 'Adresse non valide';
       }
    }else{
        $message = 'Veuillez remplir tous les champs';
    }
    
}
 
// require_once(ROOT . '/view/layout/_header.php');
    require_once(ROOT . '/view/registration/inscription.php');
        require_once(ROOT . '/view/layout/_footer.php');
}




// particulier
function inscriptionP(){
    $mostlike = mostlike();
    $message = null;
    $success = null;

if(isset($_POST['btn_Inscription'])){
    $nom = htmlspecialchars($_POST['nom']);    
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirmPassword = htmlspecialchars($_POST['confirmPassword']);
    $role = htmlspecialchars($_POST['role']);

    if(
        !empty($nom) &&
        !empty($role) &&
        !empty($email) &&
        !empty($password) &&
        !empty($confirmPassword)
    ){
       if(filter_var($email , FILTER_VALIDATE_EMAIL)){

        if(findByEmail($email)->email != $email){
            if($password === $confirmPassword){
                $password_hash = password_hash($password, PASSWORD_DEFAULT);
                subscribeHotel($nom , $email , $password_hash, $role);
                // subscribeParticulier($nom , $email , $role);
                $success = 'Inscription reussite';
                header('location: /?url=connexionP&message=success ');
    
            }else{
                $message="Votre mot de passe n'est pas identique";
            } 
            
        }else{
            $message= 'Cette adresse est déjà liée à un autre compte, choisissez une autre ou verifier votre compte';
        }        
       }else{
        $message = 'Adresse non valide';
       }
    }else{
        $message = 'Veuillez remplir tous les champs';
    }
    
}
 

// require_once(ROOT . '/view/layout/_header.php'); 
    require_once(ROOT . '/view/particulier/inscriptionP.php');
    require_once(ROOT . '/view/layout/_footer.php'); 
}




// function connexionP(){
//     $mostlike = mostlike();
//     $message = null;
// if(isset($_POST['btnLog'])){
// $email = htmlspecialchars($_POST['email']);
// // $password = htmlspecialchars($_POST['password']);
// if(!empty($email) && !empty($password)){
//     $user= findByemail(($email));
//     if($user->email == $email && password_verify($password, $user->password)){

//     $_SESSION['user'] = $user;

//     // if ($_SESSION['user']->role ='Particulier'){
        
//     //     header('Location:/?url=profileP');
//     // }else{
//     //     header('Location:/?url=accueil');
//     // }
    
// } else{
//     $message='votre email ou mot de passe est invalid';
// }
// }else{ $message = 'remplir tous les champs';}

// }


// $AllHotel= findAllHotel();
// // require_once(ROOT . '/view/layout/_header.php'); 
// require_once(ROOT . '/view/particulier/connexion.php');
// require_once(ROOT . '/view/layout/_footer.php'); 
// }

function connexionP(){
    $message = null;
    if(isset($_POST['btnLog'])){
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    if(!empty($email) && !empty($password)){
        $user= findByemail(($email));
        if($user->email == $email && password_verify($password, $user->password)){
        // var_dump($user);
    
        $_SESSION['user'] = $user;
    
    
        if ($user->role =='Hotelier'){
             
            header('Location:/?url=profile');
        }elseif($user->role =='Particulier'){
            header('Location:/?url=profileP');
            
        }
        elseif($user->role =='Admin'){
            header('Location:/?url=dashboard');}
            else{
            header('Location:/?url=accueil');
        }
        
    } else{
        $message='votre email ou mot de passe est invalid';
    }
    }else{ $message = 'remplir tous les champs';}
    
    }
    $AllHotel= findAllHotel();
    $mostlike = mostlike();
        // require_once(ROOT . '/view/layout/_header.php'); 
        require_once(ROOT .'/view/registration/connexion.php');  
        require_once(ROOT . '/view/layout/_footer.php'); 
}