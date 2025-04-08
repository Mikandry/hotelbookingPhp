<link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/dist/aos.css">
    <link rel="stylesheet" href="/assets/css/styleslidedetail.css">
    <link
      rel="stylesheet"
      href="assets/fontawesome-free-6.0.0-web/css/all.min.css"
    />
<?php 
if (isset ($_GET['message'])){?>
<h3 style= "text-align: center" ;> Inscription avec succes</h3>
<?php }?>

<?php
        if(isset($message)){ ?>
          <h3 style="color: red; text-align: center;">
            <?php echo $message ?>  </h3>
       <?php  }  ?>



<div class="frmcnxion">
    <div class="container">
        <div class="form-container">
            <h1>Enregistrer votre Email</h1>
            <form method ="post">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input  class ="entrer" name="email" type="email" id="email">
                </div>
                <div class="input-group">
                    <label for="password">Mot de Passe</label>
                    <input class ="entrer" name="password" type="password" id="password" required>
                </div>
                <button type="submit" name="btnLog" class="btnLog">Découvrir</button>
                <p class="signup">Vous n'avez pas encore enregistrer votre email?   <a href="/?url=inscriptionP">S'inscrire'</a></p>
            </form>
        </div>
    </div>
</div>
