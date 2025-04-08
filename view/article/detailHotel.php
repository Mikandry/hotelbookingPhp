<link rel="stylesheet" href="/assets/css/styleslidedetail.css">
<style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 300px;
      overflow: hidden;
    }

    .swiper-slide img {
      position: relative;
    width: 100%;
    height: 300px; /* Ajustez selon vos besoins */
    background-image: url('/uploads/img/<?= $detail->fond ?>');
    background-size: cover; /* Recadre l'image tout en la gardant bien proportionnée */
    background-position: top center; /* Assurez-vous que l'image est bien centrée */
    background-repeat: no-repeat; 
    }
  </style>
     
  <!-- design taloha -->
 <div class="containerDetail">
<?php foreach($detailImage as $detail): ?>

  <div class="left" data-aos="fade-down">
            <!-- Image -->
            <div class="image-container">
                <img src="/uploads/img/<?= $detail->fond ?>" alt="Hôtel" class="main-image">
            </div>
            
            <!-- Description -->
            <div class="description" data-aos="flip-right">
                <h2><?= $detail->nom ?></h2>
                <h3> Catégorie de notre hôtel   : <span style="color: yellowgreen; font-weight :bold"> <?= $detail->classe?> </span>  étoiles </h3>
                <p class="pdes"><?= $detail->distraction ?></p>
                <p class="pdes"><?= $detail->prepaiment ?></p>
                <p class="price">À partir de <?= $detail->nuite ?>€</p>

                <div class="contact-info" data-aos="fade-down">
                    <p class="contact typewriter">Veuillez nous appeler directement : <span><?= $detail->telephone ?></span></p>
                    <p class="contact">Ou nous envoyer un mail : <span><?= $detail->email ?></span></p>
                </div>
                
                <!-- Transformation du lien en bouton -->
                <a href="/?url=reservation&hotel_id=<?= htmlspecialchars($_GET['hotel_id']) ?>" class="reservation-btn">Faire une réservation</a>
            </div>
        </div>
</div> 
<div class="explication" data-aos="fade-down">
<p class="explication"><?= $detail->description ?></p>
</div>

        <div class="hotel-details">
            
            <div class="right">
                <h3 class="typewriter">Vue d'ensemble</h3>
                 
    <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="/uploads/img/<?= $detail->image ?>" alt="Image 1"></div>
              <div class="swiper-slide"><img src="/uploads/img/<?= $detail->image2 ?>" alt="Image 1"></div>
              <div class="swiper-slide"><img src="/uploads/img/<?= $detail->image3 ?>" alt="Image 1"></div>
              <div class="swiper-slide"><img src="/uploads/img/<?= $detail->image4 ?>" alt="Image 1"></div>
              
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
  </div>
    

            </div>
        </div>
    <?php endforeach; ?>
    
   
        <div class="comments-section">
        <h3>Commentaires</h3>
        <?php foreach($commentaires as $comment): ?>
            <div class="comment">
                <strong><?=  $comment->nom;?></strong>
                <p><?=  $comment->contenu;?></p> <br>
                <p><?=  $comment->created_at;?></p>
            </div>
        <?php endforeach; ?>
        
        <?php 
            if(isset($_SESSION['user'])) { 
              if (isset($_SESSION['user']->role) == 'Particulier') {
              ?>
           
            <form class="comment-form" method="post">
                <textarea placeholder="Laissez un commentaire..." name= "contenu" required></textarea><br>
                <input type="text" name="note" id="" placeholder="Donner une note ../10"> <br>
                <!-- <input type="text" name="idComment" id="" placeholder="Donner une note ../10"> <br> -->

                <button type="submit" name= "btncomment">Commenter</button>
            </form>
            <?php } ?>
            <?php } ?>
        </div>
        
    </div>
    <!-- Swiper JS -->
  <script src="/assets/js/slideDetail.js"></script>
    <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
    