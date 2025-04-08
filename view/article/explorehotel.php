

<div class="contentArticle">

  <a href="?url=nouveauArticle" class="publierArticle">Publier un article</a>
</div>
<div class="avantarticle">
  <div class="avantarticle_gauche">Les Hotels| 56</div>
  <div class="avantarticle_droite">Tous les posts</div>
</div>


<div class="contentArticle">
  <div class="contentArticle_Dashboard">
    <form method ="post">
    <div class="research">
        <input type="text" class="chercher" name="inptsearch" id="" required>
        <button type="submit"  name="btn_chercher" class="btn_chercher">Chercher</button> <br>
        <a href="">Categories</a>
      
    </div>
    </form>
    <hr> <br>
    <div class="listeCategorie">
      besoin d'une location
    
    </div>
  </div>
  <div class="contentArticle_droite">
    <!-- condition de rechrche  -->
    <?php foreach($AllHotel as $listeHotel): ?>
  <div class="newform">
    <div class="image" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
      <img src="/uploads/img/<?= $listeHotel->image ?>" class="imadedechaquehotel" alt="" srcset="">
      <div class="promotion">
        Promotion : <?= $listeHotel->reduction ?>
      </div>
    </div>
    
    <div class="hotel-info">
      <div class="nomHotel">
        <h3><?= $listeHotel->nom ?></h3>
      </div>
      <div class="etoile">
        <span>⭐ <?= $listeHotel->classe ?> étoiles</span>
      </div>
      <div class="descriptionHotel">
        <p><?= nl2br($listeHotel->hote) ?></p>
      </div>
      <div class="loisir">
        <span>Loisirs : <?= $listeHotel->distraction ?></span>
      </div>
      <div class="reaction">
              <div class="heart">
                <i class="fas fa-heart"></i>
                <span class="nbr">12</span>
              </div>
              <div class="comment">
                <i class="fas fa-comment-dots"></i>
                <span class="nbr">20</span>
              </div>
            </div>
    </div>

    <div class="actions">
    <a href="/?url=reservation" class="button-link">
    
      <button class= "btnreserv" type="submit">Réservation</button>
      
     </a>
      <button type="submit">Demander un devis</button>
    </div>
  </div>
<?php endforeach; ?>


     <!-- fin newwwww  -->
 
     


    
  </div>
</div> 

  