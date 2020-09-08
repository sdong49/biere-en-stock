<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Créer votre compte</title>

<?php
    include 'template/head.php';
    include 'template/header.php';
?>
        <main class="container_inscription">
            <h1 class="titre_instription">Créer un compte</h1>
            <form method="post" action="app/models/RegisterManager.php" class="form-inscription" >
                <h2>Informations du compte</h2>
                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" name="email" class="form-control" id="email" required/>
                </div>

                <div class="form-group">
                    <label for="address">Adresse</label>
                    <input type="text" name="address" class="form-control" id="address"/>
                </div>
                <ul id="adresse_liste">      
                </ul>

                <div class="form-group">
                  <label for="pwd">Mot de passe</label>
                  <input type="password" name="pwd" class="form-control" id="pwd" required/>
                  
                </div>
                <div class="form-group">
                    <label for="pwd">Confirmez le mot de passe</label>
                    <input type="password" class="form-control" id="pwd" >
                </div>
                <input type="submit" class="btn" value="Inscrivez"id="btn-inscription">
            </form>
        
        </main>

    <?php
        include 'template/footer.php'
    ?>
  
    </body>
</html>