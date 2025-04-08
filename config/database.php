<?php
require_once('../config/config.php');
function Db() {
    try {
        $pdo = new PDO("mysql:unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock;dbname=" . DBNAME, DBROOT, DBPASSWORD);
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo "Erreur de connexion PDO: " . $e->getMessage(); // Affiche l'erreur de connexion
        exit();
    }
}





// Fonction de connexion à la base de données
function Db2() {
    try {
        // Remplacez ces variables par vos paramètres de connexion
        $host = 'localhost'; 
        $dbname = 'blogHotel'; 
        $username = 'root'; 
        $password = 'root';

        // Créez une instance PDO
        $pdo = new PDO("mysql:unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock;dbname=" . DBNAME, DBROOT, DBPASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Activation des erreurs PDO

        return $pdo;  // Retourner l'objet PDO si la connexion réussit
    } catch (PDOException $e) {
        // Afficher l'erreur si la connexion échoue
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }
}
