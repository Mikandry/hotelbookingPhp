<link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/dist/aos.css">
    <link rel="stylesheet" href="/assets/css/styleslidedetail.css">
    <link
      rel="stylesheet"
      href="assets/fontawesome-free-6.0.0-web/css/all.min.css"
    />
<div class="containerInscription">
        <h1 >Inscription pour Hotelier</h1>
        <?php if(isset($message)){ ?>
            <label class="typewriter" style="color : red">
                <?php echo $message; ?>
            </label>
        <?php } ?>

        <!-- inscription reussie -->
        <?php if(isset($reussi)){ ?>
            <label class="typewriter" style="color : green">
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
                <label for="role">Vous voulez reserver ou promouvoir votre hotel?</label>
                <!-- <input type="text" id="role" name="role" required> -->
                <select class="inptinscrip" name="role" id="role" required>
                    <option disabled="">Choisissez</option>
                    <!-- <option value="client" id="role" name="role">Client</option> -->
                    <option value="Hotelier" id="role" name ="role">Hotelier</option>
                    <option value="Hotelier" id="role" name ="role">Particulier</option>
                    <!-- <option value="Admin" id="role" name ="role">Admin</option> -->
                </select>
                
            </div>
            <button name="btn_Inscription" type="submit">S'inscrire</button>
        </form>
        <a href="/?url=connexionP" style= "color:blue";>Inscription pour particulier</a>
    </div>