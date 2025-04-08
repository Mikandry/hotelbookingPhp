<div class="containernewArticle">
        <h1>Ajouter des chambres </h1>
        <form  method="post" enctype="multipart/form-data">
        
            <div class="form-groupProfile">
                <label for="hotel-name">Identification de L'hotel</label>
                <!-- <input type="text" class="inptnewarticle" id="hotel-name" name="titre"  value=""> -->
                
                <!-- <input type="text" class="inptnewarticle" id="hotel-name" name="hotel_id"  value="<?=$all->id;?>"> -->
                
                <input type="text" readonly class="inptnewarticle" id="hotel-name" name="hotel_id"  value="<?=$captureID->id;?>">
                
            </div>
            
            <div class="form-groupProfile">
                <label for="hotel-name">Type de la Chambre</label>
                
                <input type="text" class="inptnewarticle" id="hotel-name" name="type" required >
            </div>
            <div class="form-groupProfile">
                <label for="hotel-name">Prix de la chambre</label>
                <input type="text" class="inptnewarticle" id="hotel-name" name="prix" required >
            </div>
            <div class="form-groupProfile">
                <label for="hotel-description">Capacité d'accueil de la chambre</label>
                <input type="text" class="inptnewarticle" id="hotel-name" name="capacite" required >
            </div>
            <div class="form-groupProfile">
                <label for="hotel-name">Disponibilité</label>
                <input type="text" class="inptnewarticle" id="hotel-name" name="disponibilite" value="1" ></input>
            </div>
            <div class="form-groupProfile">
                <label for="hotel-name">Image de la chambre (en cours....)</label>
                <input type="file" class="inptnewarticle" id="hotel-description" name="image1" accept="image/*">
                <input type="file" class="inptnewarticle" id="hotel-description" name="image2" accept="image/*">
                <input type="file" class="inptnewarticle" id="hotel-description" name="image3" accept="image/*">
            </div>
            
            <button type="submit" name ="ajoutChambre">Ajouter</button>
            
           
        </form>
    </div>
