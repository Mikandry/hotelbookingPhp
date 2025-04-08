<div class="payment-container">
        <div class="payment-form-container">
            <div class="payment-form-wrapper">
                <h1 class="payment-title">Formulaire de Paiement</h1>
                <form method="POST"  class="payment-form">
                    
                    <label for="montant" class="payment-label">Montant à Payer (€):</label>
                    <input type="number" id="montant" name="montant" class="payment-input" required min="1">

                    <label for="type_paiement" class="payment-label">Type de Paiement:</label>
                    <select id="type_paiement" name="type_paiement" class="payment-select" >
                        <option value="avance">Avance</option>
                        <option value="solde">Solde</option>
                        <option value="complet">Paiement Complet</option>
                    </select>

                    <label for="transaction_id" class="payment-label">ID de Transaction (optionnel):</label>
                    <input type="text" id="transaction_id" name="transaction_id" class="payment-input">

                    <h2 class="payment-subtitle">Informations de Carte Bancaire</h2>

                    <label for="credit_card_number" class="payment-label">Numéro de Carte de Crédit:</label>
                    <input type="text" id="credit_card_number" name="credit_card_number" class="payment-input" pattern="\d{16}" >

                    <label for="expiration_date" class="payment-label">Date d'Expiration:</label>
                    <input type="month" id="expiration_date" name="expiration_date" class="payment-input" >

                    <label for="cvv" class="payment-label">CVV:</label>
                    <input type="text" id="cvv" name="cvv" class="payment-input" pattern="\d{3}" >

                    <button type="submit"  name= "paymentbtn" class="payment-button">Payer</button>
                </form>
            </div>

            <div class="payment-image-wrapper">
                <img src="/uploads//img/1.jpeg" alt="Hotel" class="payment-image">
            </div>
        </div>
    </div>