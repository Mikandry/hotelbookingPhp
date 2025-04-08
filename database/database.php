<?php
function Db1(){

  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'bloghotel';
 
  $mysqli = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
	
  if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }

  echo 'Success: A proper connection to MySQL was made.';
  

  return $mysqli->close();

}

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