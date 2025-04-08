<?php 
require_once(ROOT .'/view/layout/_header.php');
?>
<div class="containerProfile">
    <!-- Left Side Menu -->
    <div class="left-menu">
        <ul>
            <li><a href="#" id="profile-edit">Modifier Profil</a></li>
            <li><a href="/?url=nouveauImage">Ajouter des images</a></li>
            <li><a href="/?url=admin">Statistiques</a></li>
       
            </li>
            <li><a href="/?url=ajoutArticle">Ajouter des données à votre hôtel</a></li>
        </ul>
    </div>

    <!-- Right Side Content -->
    <div class="right-contentProfile">
<!--     
        <div class="containerProfile"> -->
        <link rel="stylesheet" href="/assets/css/style.css">
<div class="adddarticle">
<div class="containernewArticle">
        <h1>Ajouter des images ou un nouveau Hotel</h1>
        <form  method="post" enctype="multipart/form-data">
            <div class="form-groupProfile">
                <label for="hotel-name">Nom de l'hotel</label>
                <input type="text" class="inptnewarticle" id="hotel-name" name="titre" required >
            </div>
            <div class="form-groupProfile">
                <label for="hotel-name">Adresse</label>
                <input type="text" class="inptnewarticle" id="adresse" name="adresse" required >
            </div>
            <div class="form-groupProfile">
                <label for="hotel-name">Hote</label>
                <input type="text" class="inptnewarticle" id="hotel-name" name="hote" required >
            </div>
            <div class="form-groupProfile">
                <label for="hotel-description">Description de l'Hôtel</label>
                <textarea class="inptnewarticle" id="hotel-description" name="description" required ></textarea>
            </div>
            <div class="form-groupProfile">
                <label for="hotel-name">Categorie( ***)</label>
                <input type="text" class="inptnewarticle" id="hotel-name" name="classe" required >
            </div>
            <div class="form-groupProfile">
                <label for="hotel-name">distraction</label>
                <input type="text" class="inptnewarticle" id="hotel-name" name="distraction" required >
            </div>
            <div class="form-groupProfile">
                <label for="hotel-name">Pré paiement</label>
                <input type="text" class="inptnewarticle" id="hotel-name" name="paiment" required  >
            </div>
            <div class="form-groupProfile">
                <label for="hotel-name">reduction</label>
                <input type="text" class="inptnewarticle" id="hotel-name" name="reduction" required >
            </div>
            <div class="form-groupProfile">
                <label for="hotel-name">rembourssement</label>
                <input type="text" class="inptnewarticle" id="hotel-name" name="rembourssement" required >
            </div>
            <div class="form-groupProfile">
                <label for="hotel-name">Prix Total</label>
                <input type="text" class="inptnewarticle" id="hotel-name" name="prix" required >
            </div>
            <div class="form-groupProfile">
                <label for="hotel-name">chambre Id</label>
                <input type="text" readonly class="inptnewarticle" id="hotel-name" name="chambreID" value="" >
            </div>
            <div class="form-groupProfile">
                <label for="hotel-name">Email de contact</label>
                <input type="text" class="inptnewarticle" id="email" name="email" required >
            </div>
            <div class="form-groupProfile">
                <label for="hotel-name">Telephone pour plus de contact</label>
                <input type="text" class="inptnewarticle" id="phone" name="phone"  required>
            </div>
            <div class="form-groupProfile">
                <label for="hotel-price">Prix par Nuit (€)</label>
                <input  class="inptnewarticle" type="number" id="hotel-price" name="nuite" required >
            </div>
            <div class="form-groupProfile">
                <label for="hotel-price">User Identification</label>
                <input  class="inptnewarticle" readonly type="text" id="hotel-price" name="user_id" value="<?= $_SESSION['user']->id ?>" >
            </div>
            <div class="form-groupProfile">
                <label for="hotel-image">Image de l'Hôtel</label>
                <input type="file" id="hotel-image" name="image" accept="image/*" required >
            </div>
            <button type="submit" name ="ajoutArticle">Ajouter</button>
            
            <!-- <button onclick="location.href='/?url=connexion'"  type="submit">Ajouter plus de photo</button> -->
             <a href="/?url=nouveauImage">
                
                 <button name="btnAjoutImage"  type="button">Ajouter plus de photo</button>
             </a>
        </form>
    </div>
</div>

            
        </div>
    <!-- </div> -->
</div>

<script>
    document.getElementById("profile-edit").addEventListener("click", function(e) {
        e.preventDefault();
        document.querySelector(".containerProfile").style.display = 'block'; // Show profile form
        // Hide other views if needed
    });
</script>







<!-- ancien -->
