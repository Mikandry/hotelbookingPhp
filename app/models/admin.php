<?php
require_once(ROOT . '/database/database.php');

function chart (){
    echo 'hhhhahahaahhaha';
}

function totalHotel(){
    $query= "SELECT COUNT(hotel.id) as totalhotel FROM hotel";
    $request = Db()->prepare($query);
    $request->execute();
    return $request->fetch(PDO::FETCH_ASSOC);

}
function totaluser(){
    $query= "SELECT COUNT(user.id) as totaluser FROM user";
    $request = Db()->prepare($query);
    $request->execute();
    return $request->fetch(PDO::FETCH_ASSOC);

}
function totalcomment(){
    $query= "SELECT COUNT(commentaire.id) as totalcomment FROM commentaire";
    $request = Db()->prepare($query);
    $request->execute();
    return $request->fetch(PDO::FETCH_ASSOC);

}
function allhoteladmin(){
    $query="SELECT * FROM user WHERE role = 'Hotelier'";
        $request= Db()->prepare($query);
        $request->execute();
        return $request->fetchall(PDO::FETCH_OBJ);
}

function alluseradmin(){
    $query="SELECT * FROM user WHERE role = 'Particulier'";
        $request= Db()->prepare($query);
        $request->execute();
        return $request->fetchall(PDO::FETCH_OBJ);
}
