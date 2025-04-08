
<div class="containerProfile">
    <!-- Left Side Menu -->
    <div class="left-menu">
        <ul>
            <!-- <li><a href="/?url=profileP" id="profile-edit">Modifier Profil</a></li> -->
            <!-- <li><a href="/?url=nouveauImage">Ajouter des images</a></li> -->
            <li><a href="/?url=adminPP">Statistiques</a></li>
       
            </li>
            <!-- <li><a href="/?url=ajoutArticle">Ajouter des données à votre hôtel</a></li> -->
        </ul>
    </div>

    <!-- Right Side Content -->
    <div class="right-contentProfile">
    <h1>Modifier votre Profil</h1>
        <div class="containerProfile">
             
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-groupProfile">
                    <label for="hotel-name">Votre nom</label>
                    <input class="inptmodifArticle" type="text" id="hotel-name" name="hotel_name">
                    <input class="inptmodifArticle" type="hidden" id="hotel-name" name="hotel_id" value="<?= $_SESSION['user']->id?>">
                </div>
                <div class="form-groupProfile">
                    <label for="hotel-description">Votre Email</label>
                    <input type ="text" class="inptmodifArticle" id="hotel-description" name="hotel_description" ></input>
                </div>
                
                
                <button type="submit" name="btnupdate">Mettre à Jour</button>
                <!-- <a href="/?url=ajoutArticle">Skip</a> -->
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

