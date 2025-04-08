<link rel="stylesheet" href="/assets/css/style.css">
<div class="adddarticle">
    <div class="containerProfile">
        <!-- Formulaire principal à gauche -->
        <div class="containernewArticle">
            <h1>Ajouter plus d'images</h1>
            <form method="post" enctype="multipart/form-data">
                <div class="form-groupProfile">
                    <label for="hotel-name">Image 1</label>
                    <input type="file" class="inptnewarticle" id="hotel-name" name="image1" accept="image/*" required>
                </div>
                <div class="form-groupProfile">
                    <label for="hotel-name">Image 2</label>
                    <input type="file" class="inptnewarticle" id="adresse" name="image2" accept="image/*">
                </div>
                <div class="form-groupProfile">
                    <label for="hotel-name">Image 3</label>
                    <input type="file" class="inptnewarticle" id="hotel-name" name="image3" accept="image/*">
                </div>
                <div class="form-groupProfile">
                    <label for="hotel-description">Image 4</label>
                    <input type="file" class="inptnewarticle" id="hotel-description" name="image4" accept="image/*">
                </div>
                <div class="form-groupProfile">
                    <label for="hotel-name">Hotel identification</label>
                    
                    <input type="text" readonly class="inptnewarticle" id="hotel-name" name="hotel_id" value="<?= $captureID->id; ?>">
                </div>
                
                <button type="submit" name="ajoutImages">Ajouter</button>
                <!-- Bouton retour -->
                <button type="button" class="back-button" onclick="window.history.back();">Retour</button>
            </form>
        </div>
        
        <!-- Section de droite (vide ou image) -->
        <div class="side-sectionProfile">
            <img src="/uploads/img/ocean.jpg" alt="Publicité Hôtel" class="side-image"> 
            <p class="desc">Choissisez bien la photo que vous téléchargez ici, car il représente une attraction possible venant des clients pour choisir votre hotels</p>        </div>
    </div>
</div>
