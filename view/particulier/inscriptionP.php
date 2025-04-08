<div class="containerInscription">
        <h1>Inscription pour faire une réservation</h1>
        <?php if(isset($message)){ ?>
            <label classe= "typewriter" style="color : red">
                <?php echo $message; ?>
            </label>
        <?php } ?>

        <!-- inscription reussie -->
        <?php if(isset($reussi)){ ?>
            <label classe= "typewriter" style="color : green">
                <?php echo $reussi; ?>
            </label>
        <?php } ?>
        <form method="post">
            <div class="form-groupInscription">
                <label for="name">Nom</label>
                <input class="inptinscrip" type="text" id="nom" name="nom" required>
            </div>
            <div class="form-groupInscription">
                <label for="email">Email</label>
                <input class="inptinscrip" type="email" id="email" name="email" required>
            </div>
            <div class="form-groupInscription">
                <label for="password">Mot de passe</label>
                <input class="inptinscrip" type="password" id="password" name="password" required >
            </div>
            <div class="form-groupInscription">
                <label for="confirm-password">Confirmer le mot de passe</label>
                <input class="inptinscrip" type="password" id="confirm-password" name="confirmPassword" required>
            </div>
            <div class="form-groupInscription">
                <label for="role">Vous êtes un particulier qui veux faire une reservation</label>
                <!-- <input type="text" id="role" name="role" required> -->
                <select class="inptinscrip" name="role" id="role" required>
                    <option disabled="">Choisissez</option>
                    <option disabled="client" id="role" name="role">Client</option>
                    <option disabled="Hotelier" id="role" name ="role">Hotelier</option>
                    <option value="Particulier" id="role" name ="role">Particulier</option>
                </select>
                
            </div>
            <button name="btn_Inscription" type="submit">S'inscrire</button>
        </form>
    </div>