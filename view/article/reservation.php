<?php 
if (isset ($_GET['message'])){?>
<h3 style= "text-align: center" ;> Reservation avec succes</h3>
<?php }?>

<?php
        if(isset($message)){ ?>
          <h3 style="color: red; text-align: center">
            <?php echo $message ?>  </h3>
       <?php  }  ?>
       <div class="containerReservation">
    <?php 
        if (isset($_SESSION['user'])) { ?>
    
    <form action="" method="POST">
        <h1>Réservez votre chambre</h1>
        
        <!-- Champs utilisateur caché -->
        <div class="form-group">
            <input type="hidden" id="guest-name" name="guest_name" value="<?= $_SESSION['user']->id; ?>">
        </div>
        
        <!-- Date d'arrivée -->
        <div class="form-groupReservation">
            <label for="check-in">Date d'Arrivée</label>
            <input class="inptreservation" type="date" id="check-in" name="check_in" required>
        </div>
        
        <!-- Date de départ -->
        <div class="form-groupReservation">
            <label for="check-out">Date de Départ</label>
            <input class="inptreservation" type="date" id="check-out" name="check_out" required>
        </div>
        
        <!-- Nombre de personnes -->
        <div class="form-groupReservation">
            <label for="num-guests">Nombre de Personnes</label>
            <input class="inptreservation" type="number" id="num-guests" name="num_guests" min="1" required>
        </div>
        
        <!-- Demandes spéciales -->
        <!-- <div class="form-groupReservation">
            <label for="special-requests">Demande Spéciale</label>
            <textarea class="inptreservation" id="special-requests" name="special_requests"></textarea>
        </div> -->
        
        <!-- Tableau des chambres -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type de chambre</th>
                    <th>Capacité</th>
                    <th>Disponibilité</th>
                    <th>Selectionner</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($places as $place) : ?>
                <tr class="trcheck">
                    <td><?=$place->id?></td>
                    <td><?=$place->type?></td>
                    <td><?=$place->capacite?></td>
                    <td><?=$place->disponibilite == 0 ? 'Indisponible' : 'Disponible'?></td>
                    <td>
                        <input type="radio" name="chambre_id" value="<?= $place->id ?>" 
                               <?php if ($place->disponibilite == 0) echo 'disabled'; ?>>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Bouton de réservation -->
        <button type="submit" name="btnreserver">Réserver</button>
    </form>

    <?php 
        } else {
            header('LOCATION: /?url=connexion');
        }
    ?>
</div>
