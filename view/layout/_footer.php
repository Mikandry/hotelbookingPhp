 <!-- footer -->
 <footer class="footer" data-aos="zoom-in-down">
      <div class="footer_left">
        <div class="footer_left_about">
          <span>ABOUT</span>
          <div class="footer_left_about_comment">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ullam
            consectetur recusandae ea suscipit veniam delectus at nesciunt porro
            reprehenderit.
          </div>
          <div class="footer_left_about_icon">
            <span>SOCIAL</span> <br />
            <br />
            <i class="fab fa-instagram-square social_icon"></i>
            <i class="fab fa-twitter social_icon"></i>
            <i class="fab fa-facebook social_icon"></i>
            <i class="fab fa-linkedin social_icon"></i>
            <i class="fab fa-pinterest social_icon"></i>
            <i class="fab fa-pied-piper social_icon"></i>
          </div>
        </div>
        <div class="footer_left_company">
          <h3>COMPANY</h3>
          <?php foreach($AllHotel as $listeHotel) : ?>
            <a href="" class="footer_left_company_about_us"><?= $listeHotel->nom ?></a>
            <?php endforeach; ?>

          
          
        </div>
        <div class="footer_left_creative">
        <h3>Adresse</h3>
        <?php foreach($AllHotel as $listeHotel) : ?>
            <a href="" class="footer_left_company_about_us"><?= $listeHotel->adresse ?></a>
            <?php endforeach; ?>
          
          
        </div>
      </div>
      <div class="footer_right">
  <h3 class="footer_right_title">LES PLUS DE LIKE</h3>
  <?php foreach ($mostlike as $likely) : ?>
    <div class="footer_right_item">
      <div class="footer_right_img1">
        <!-- Partie Image -->
        <div class="footer_right_img1_itself">
          <img
            src="uploads/img/<?= $likely->image ?>"
            alt=""
            class="footer_right_img1_itself_image"
          />
        </div>

        <!-- Partie Commentaire -->
        <div class="footer_right_img1_comment">
          <h4 class="footer_right_img1_comment_h1">
            <span><?= $likely->nom ?></span>
          </h4>
          <span><?= $likely->adresse ?></span>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
       
        
      </div>
    </footer>
    <h3
      style="background: rgb(45, 45, 114); text-align: center"
      class="footcopy"
    >
      Copyright 2024 , tous droits réservés au developpeur
    </h3>
    <script src="assets/dist/aos.js"></script>
    <!-- <script src="assets/js/index.js"></script> -->
    <script src="assets/fontawesome-free-6.0.0-web/js/all.js"></script>
    <script>
      AOS.init();
    </script>
    
  </body>
</html>
