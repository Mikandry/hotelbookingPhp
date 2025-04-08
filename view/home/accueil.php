<!-- style nouveau slide -->
 <link rel="stylesheet" href="/assets/css/stylenewslide.css">
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
				max-height: 40vh;
			}

			.swiper-slide {
				text-align: center;
				font-size: 18px;
				background: #fff;
				display: flex;
				justify-content: center;
				align-items: center;
			}

			.swiper-slide img {
				display: block;
				width: 100%;
				max-height: 60vh;
				object-fit: cover;
			}

			.autoplay-progress {
				position: absolute;
				right: 16px;
				bottom: 16px;
				z-index: 10;
				width: 48px;
				height: 48px;
				display: flex;
				align-items: center;
				justify-content: center;
				font-weight: bold;
				color: var(--swiper-theme-color);
			}

			.autoplay-progress svg {
				--progress: 0;
				position: absolute;
				left: 0;
				top: 0px;
				z-index: 10;
				width: 100%;
				height: 100%;
				stroke-width: 4px;
				stroke: var(--swiper-theme-color);
				fill: none;
				stroke-dashoffset: calc(125.6px * (1 - var(--progress)));
				stroke-dasharray: 125.6;
				transform: rotate(-90deg);
			}
		</style>


<div class="bienvenue" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
    <h1 class="trouverICI typewriter">Trouver votre prochaine destination et séjour ici</h1>
    <h2 class="offres"><marquee>Recherchez des offres sur des hôtels, des sites touristiques, des endroits luxueux et plus encore</marquee></h2>
</div>

<form method="post">
    <!-- <div class="searchallthings">
        <div class="local">
            <i class="fas fa-street-view"></i>
            <input type="text" class="inptxt" name="searchlocaux" placeholder="Lieu">
        </div>
        <div class="dateS">
            <i class="fas fa-calendar-days"></i>
            <input type="text" class="inptxt" name="date" placeholder="Date">
        </div>
        <div class="famille">
            <i class="fas fa-user"></i>
            <select name="famille" class="inptxt">
                <option disabled>Nombre de famille</option>
                <option value="01">01 Adulte - 02 enfants - une maitresse</option>
            </select>
        </div>
        <button type="submit" name="btnsearch" class="btnsearch">Rechercher</button>
    </div> -->
</form>

<!-- <div class="slider-container">
    <div class="slider">
        <?php foreach ($allimageS as $allimage) : ?>
            <div class="slide"><img src="/uploads/img/<?= $allimage->image ?>" alt="Image 3"></div>
        <?php endforeach; ?>
    </div>
    <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
    <button class="next" onclick="moveSlide(1)">&#10095;</button>
</div> -->
<!-- div nouveau slide -->
 <div class="dybo">
 <div class="swiper mySwiper">
			<div class="swiper-wrapper">
            <?php foreach ($allimageS as $allimage) : ?>
				<div class="swiper-slide"><img src="/uploads/img/<?= $allimage->image ?>" alt="Image 3">
				<h3><?= $allimage->nom ?></h3>
			</div>
                <?php endforeach; ?>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-pagination"></div>
			<div class="autoplay-progress">
				<svg viewBox="0 0 48 48">
					<circle cx="24" cy="24" r="20"></circle>
				</svg>
				<span></span>
			</div>
		</div>
 </div>

<div class="contentAccueil">

<!-- les populaires par rapport au like -->
 <h2 class="popu">Les Hôtels les plus populaires </h2>
<div class="popular-hotels" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
<?php foreach ($mostcomments as $mostcom) : ?>
    <div class="popular-hotel">
        <img src="/uploads/img/<?= $mostcom->image ?>" alt="Image 3" alt="Popular Hotel 1" class="hotel-image">
        <div class="hotel-info">
            <h3 class="hotel-name"><?= $mostcom->nom?></h3>
            <p class="hotel-location"><?= $mostcom->adresse ?></p>
            <div class="ratings">
			<!-- <input type="text" name="inptcom" value="<?= $mostcom->id ?>"> -->
			
                <span class="likes">Likes: <?= $mostcom->total_like ?></span>
			
                <span class="comments">Commentaires: <?= $mostcom->total_comment ?></span>
                
               
            </div>
            
            <a href="/?url=detailHotel&hotel_id=<?= $mostcom->chambre_id ?>" class="details-link">Plus de détails</a>
            
        </div>
    </div>
    <?php endforeach; ?>
    
    
    
</div>
<h2 class="popu typewriter">La liste des hôtels sur cette plateforme </h2>
    <div class="griderContent">
        <?php foreach ($AllHotel as $listeHotel) : ?>
            <div class="griddroite" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <img src="/uploads/img/<?= $listeHotel->image ?>" alt="" class="imgcontent">
                <div class="detailImg">
                    <span class="hote"><?= $listeHotel->hote ?></span>
                    <h3 class="localHotel"><?= $listeHotel->nom ?> &nbsp; <?= $listeHotel->adresse ?></h3>
                    <span class="etoile">Étoiles: <?= $listeHotel->classe ?></span>
                    <span class="menuoffrir"><?= $listeHotel->distraction ?></span>
                    <span class="reduction">Reduction : <?= $listeHotel->reduction ?></span>
                    <!-- <span class="remarque"><?= $listeHotel->rembourssement ?></span>
                    <span class="remarque" style="color: blue;"><?= $listeHotel->email ?></span> -->
				
                    <div class="avisetcomment">
                        <span class="nbr"><i class="fas fa-thumbs-up"></i>&nbsp;<?= $listeHotel->total_like ?></span>
						<span class="feedback1"><i class="fas fa-comment"></i><?= $listeHotel->total_com ?> avis</span>
				
                        
						<span class="detailsplus"><a href="/?url=detailHotel&hotel_id=<?= $listeHotel->id ?>" class="plusdetails">Plus de détails</a></span>
                    </div>
                    
                    <div class="tarifs">
                        <!-- <span class="tarif"><?= $listeHotel->prix ?></span> -->
                        <span class="tarif"><?= $listeHotel->nuite ?></span>
                        <span class="tarif">01 chambre</span>
                    </div>
                </div>
				<?php 
            if(isset($_SESSION['user'])) { ?>
                <form  method="post">
                <a href="hotel_id=<?= $listeHotel->id ?>">
                <button type="submit" name="btnlike" class="btnlike" style="background-color: #ffff;">
                    <input type="hidden" name="inptID" value="<?= $listeHotel->id ?>">
             
                   <i class="fas fa-heart" ></i>
                </button>
                </a>
                </form>
				<?php } ?>
            </div>
        <?php endforeach; ?>
    </div>
	<div class="explore-container">
    <div class="explore-block" data-aos="flip-left">
        <img src="/uploads/img/logo.jpeg" alt="Explorer Image" class="explore-image">
    </div>
    <div class="explore-block-text">
        <h2>Explorer plus</h2>
        <p>Découvrez plus de destinations, des hôtels exclusifs et des expériences inoubliables.</p>
		<a href="/?url=exploreHotel">
        <button  class="explore-btn" style="display: block;">Explorer</button>
		</a>
    </div>
</div>
</div>
<script src="/assets/js/slide.js"></script>
<!-- script nouveau slide -->
  <!-- link newslide -->
  <script src="/assets/js/indexnewslide.js">
            </script>
<script>
			const progressCircle = document.querySelector(".autoplay-progress svg");
			const progressContent = document.querySelector(".autoplay-progress span");
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
				on: {
					autoplayTimeLeft(s, time, progress) {
						progressCircle.style.setProperty("--progress", 1 - progress);
						progressContent.textContent = `${Math.ceil(time / 1000)}s`;
					},
				},
			});
		</script>
       

