<?php
require_once(ROOT .'/app/models/paiement.php');

function paiement (){
    if (isset($_POST['paymentbtn'])){
        
        $montant = $_POST['montant'];
        $type_paiement = $_POST['type_paiement'];
        $transaction_id = $_POST['transaction_id'];
        $credit_card_number = $_POST['credit_card_number'];
        $expiration_date = $_POST['expiration_date'];
        $cvv = $_POST['cvv'];
    
        
    
        echo "Paiement effectué avec succès pour un montant de " . $montant . "€.";
    }


    require_once(ROOT . '/view/layout/_header.php'); 
     require_once(ROOT . '/view/particulier/reservation.php');
    require_once(ROOT . '/view/layout/_footer.php');

}