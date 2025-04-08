<?php
require_once(ROOT . '/database/database.php');

function insertpaiement (){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupération des informations
        $montant = $_POST['montant'];
        $type_paiement = $_POST['type_paiement'];
        $transaction_id = $_POST['transaction_id'];
        $credit_card_number = $_POST['credit_card_number'];
        $expiration_date = $_POST['expiration_date'];
        $cvv = $_POST['cvv'];
    
        // Vous pouvez ajouter ici la logique pour traiter le paiement avec une API de paiement réelle (par ex. Stripe, PayPal, etc.)
        // Exemple : enregistrer les informations dans une base de données ou envoyer une requête à une API de paiement.
    
        echo "Paiement effectué avec succès pour un montant de " . $montant . "€.";
    }
}