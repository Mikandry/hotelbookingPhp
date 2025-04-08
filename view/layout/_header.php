<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation hotel</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/dist/aos.css">
    <link rel="stylesheet" href="/assets/css/styleslidedetail.css">
    <link
      rel="stylesheet"
      href="assets/fontawesome-free-6.0.0-web/css/all.min.css"
    />
<!-- </head> -->
 <!-- <button onclick="location.href='delete-profile.php'" -->
<body>
    <header>
		<nav class="nav">
			<div class="leftlogo">
				<a href="/?url=accueil"><span class="leftlogo_logo">Hotelreservation.mg</span></a>
			</div>
			<div class="rightsetting">
        <?php 
      if (isset($_SESSION['user']) && $_SESSION['user']->role == 'Hotelier') {
        ?>
				<a href="/?url=connexion" class="ajoutEtablissement">Ajouter vos établissements</a>
        <?php } ?>
				<a href="/?url=accueil" class="ajoutEtablissement">Accueil</a>
				<form >
        <div class="rightsetting_boutton">
					
          <?php if(isset($_SESSION['user'])){  
            if ($_SESSION['user']->role =='Hotelier'){
            ?> 
               <a href="?url=profile"><span style="color : green"> <?= $_SESSION['user']->nom ?></span></a>
          <?php
          }
            elseif($_SESSION['user']->role =='Particulier'){
              ?>
              <a href="?url=profileP"><span style="color : green"> <?= $_SESSION['user']->nom ?></span></a>
           <?php }
           elseif($_SESSION['user']->role =='Admin'){
            ?>
            <a href="?url=dashboard"><span style="color : green"> <?= $_SESSION['user']->nom ?></span></a>
         <?php }
            else{
              echo 'non reconnu';
            }
            ?>   

            <!-- <a href="?url=profile"><span style="color : green"> <?= $_SESSION['user']->nom ?></span></a> -->
           
            &nbsp;&nbsp;
            <a href="/?url=deconnexion" class="authentifier">deconnexion
            <i class="fas fa-user-large-slash"></i>
            </a>
          <?php }else{ ?>
            <!-- <a href="/?url=connexion" class="authentifier">S'authentifier</a> -->
            <div class="header_option">
              <span style="font-size: 1.3rem">S'authentifier</span>
              <div class="header_option_content">
                <a href="/?url=connexionP">Particulier</a>

                <a href="/?url=connexion">Client</a>

                <!-- <a href="home">Admin</a> -->

                <a href="/?url=inscription">Inscription</a>

                <!-- <a href="/?url=profile">Profile</a> -->
              </div>
            </div>
            <i class="fas fa-user-check"></i>
            <?php } ?>
				</div>
        </form>
        
			</div>
		</nav>
        <div class="moyendetransport">
            <a href="" class="transp"> <i class="fas fa-bed"></i> &nbsp;Hébérgements</a>
            <a href="https://madagascarairlines.com/index.html" target="_blank" class="transp"><i class="fas fa-plane"></i> &nbsp;Vols</a>
            <a href="https://www.madevasion.com/location-voiture-madagascar" target="_blank" class="transp"><i class="fas fa-car"></i> &nbsp;Locations de voiture</a>
            <a href="" class="transp"><i class="fab fa-forumbee"></i> &nbsp;Attractions</a>
            <a href="" class="transp"> <i class="fas fa-coins"></i> &nbsp;Tarifs taxi</a>
        </div>
	</header>