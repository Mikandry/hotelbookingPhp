
<div class="containerProfile">
    <!-- Left Side Menu -->
    <div class="left-menu">
        <ul>
            <li><a href="/?url=profile" id="profile-edit">Modifier Profil</a></li>
            <li><a href="/?url=nouveauImage">Ajouter des images</a></li>
            <li><a href="/?url=admin">Statistiques</a></li>
       
            </li>
            <a href="/?url=gestionHotel">Ajouter Chambre</a></li>
            </li>
            <li><a href="/?url=ajoutArticle">Ajouter des données à votre hôtel</a></li>
            <li><a href="#">Liste des chambres</a></li>
        </ul>
    </div>

    <!-- Right Side Content -->
    <div class="right-contentProfile">
    <h1>Modifier votre Profil</h1>
        <div class="containerProfile">
             
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-groupProfile">
                    <label for="hotel-name">Nom de l'Hôtel</label>
                    <input class="inptmodifArticle" type="text" id="hotel-name" name="hotel_name">
                    <input class="inptmodifArticle" type="hidden" id="hotel-name" name="hotel_id" value="<?= $_SESSION['user']->id?>">
                </div>
                <div class="form-groupProfile">
                    <label for="hotel-description">Description de l'Hôtel</label>
                    <textarea class="inptmodifArticle" id="hotel-description" name="hotel_description" ></textarea>
                </div>
                <div class="form-groupProfile">
                    <label for="hotel-price">Prix par Nuit (€)</label>
                    <input class="inptmodifArticle" type="number" id="hotel-price" name="hotel_price" >
                </div>
                <div class="form-groupProfile">
                    <label for="hotel-image">email disponible de l'Hôtel</label>
                    <input class="inptmodifArticle" type="email" id="hotel-image" name="email" accept="image/*" >
                </div>
                <button type="submit" name="btnupdate">Mettre à Jour</button>
                <a href="/?url=ajoutArticle">Skip</a>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById("profile-edit").addEventListener("click", function(e) {
        e.preventDefault();
        document.querySelector(".containerProfile").style.display = 'block'; // Show profile form
        // Hide other views if needed
    });
</script>

