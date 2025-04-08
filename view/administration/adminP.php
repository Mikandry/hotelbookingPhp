<?php 
require_once(ROOT .'/view/layout/_header.php');
?>
<div class="containerProfile">
    <!-- Left Side Menu -->
    <div class="left-menu">
        <ul>
            <li><a href="#" id="profile-edit">Modifier Profil</a></li>
            <!-- <li><a href="/?url=nouveauImage">Ajouter des images</a></li> -->
            <li><a href="/?url=adminP">Statistiques</a></li>
            <li>

</li>

            <li><a href="/?url=ajoutArticle">Ajouter des données à votre hôtel</a></li>
        </ul>
    </div>

    <!-- Right Side Content -->
    <!-- <div class="right-contentProfile"> -->
  
        <div class="containerProfile">
        
            <form action="" method="POST" enctype="multipart/form-data">
                <!-- <input type="text" name="idexplore" value="<?= htmlspecialchars($_GET['hotel_id']) ?>"> -->
                <h1>TABLEAU RECAPITULATIF</h1>
                <h3 style="text-align: center;">LISTE DES RESERVATIONS QUE j'AI FAIT</h3> 
              <div class="booking">
              <table>   
                <tr>
                <th>Action</th>
                <th>Nom du client</th>
                    <th>Nombre de personne</th>
                    <th>Date d'Arrivée</th>
                    <th>Date de départ</th>
                    <th>Chambre choisie</th>
                    <th>Email</th>
                    
                </tr>
                
                <tr>
                <?php foreach($stats as $stat): ?>
                    <td>
                        <i class="fas fa-trash"></i>
                        <i ></i>
                        <input type="checkbox" class="fas fa-wrench" name="" id="">

                </td>
                
                    <td><?=$stat->nomClient ?></td>
                    <td><?=$stat->nbrpersonne ?></td>
                    <td><?=$stat->date_debut ?></td>
                    <td><?=$stat->date_fin ?></td>
                    <td><?=$stat->type ?></td>
                    <td><?=$stat->email ?></td>
                    
                </tr>
                <?php endforeach ;?>
            </table>      
              </div> 
              <h3 style="text-align: center;">MES COMMENTAIRES</h3> 
              <table>   
                <tr>
                <th>Action</th>
                <th>Nom du client</th>
                    <th>Contenu</th>
                    <th>Email</th>
                    
                </tr>
                
                <tr>
                <?php foreach($stats as $stat): ?>
                    <td>
                        <i class="fas fa-trash"></i>
                        <i ></i>
                        <input type="checkbox" class="fas fa-wrench" name="" id="">

                </td>
                
                    <td><?=$stat->nomClient ?></td>
                    <td><?=$stat->contenu ?></td>
                    <td><?=$stat->email ?></td>
                    
                    
                </tr>
                <?php endforeach ;?>
            </table>   
              <h3 style="text-align: center;">MES REACTIONS</h3>
              <table>   
                <tr>
                
                <th>Nombre de J'aime</th>
                <th>Total Commentaire</th>
                    
                    
                </tr>
                
                <tr>
                <?php foreach($stats as $stat): ?>
                                    
                    <td><?=$stat->totalcom ?></td>
                    <td><?=$stat->totaljaime ?></td>
                    
                    
                </tr>
                <?php endforeach ;?>
            </table>   
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
<script src="assets/dist/aos.js"></script>
