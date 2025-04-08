<?php
require_once(ROOT . '/database/database.php');

function subscribeHotel ($nom , $email , $password, $role){
    $query="INSERT INTO user(nom, email, password, role) VALUES (:nom, :email, :password , :role)";
    $request= Db()->prepare($query);
    $request->bindValue(':nom' , $nom);
    $request->bindValue(':email' , $email);
    $request->bindValue(':password' , $password);
    $request->bindValue(':role' , $role);
    $request->execute();
    return true;
}

function findByemail ($email){
    $query="SELECT * FROM user WHERE email = :email";
    $request=Db()->prepare($query);
    $request->bindValue(':email' , $email);
    $request->execute();
    return $request->fetch(PDO::FETCH_OBJ);
}
function subscribeParticulier ($nom , $email , $role){
    $password ="";
    $query="INSERT INTO user(nom, email, password, role) VALUES (:nom, :email , :password, :role)";
    $request= Db()->prepare($query);
    $request->bindValue(':nom' , $nom);
    $request->bindValue(':email' , $email);
    $request->bindValue(':password' , $password);
    $request->bindValue(':role' , $role);
    $request->execute();
    return true;
}