<?php
    include 'app/views/template/headAdmin.php';
?>

<main class="admin_login">
    <div class="login" id="login">                                                          
        <div class="login-header">
            <h4 class="login-title">Connectez-vous</h4>
        </div>                       
        <div class="login-body">
            <form action ="", method="post">
                <div style="background-color:red;">
                    <?php
                        if(isset($errorMessage))
                            echo $errorMessage."<br><br>";
                    ?>
                </div>
                <label for="nom-utilisateur" class="objet">Identifiant</label>
                <input type="text" name="nom-utilisateur" placeholder="Votre adresse email" id="emailins" required/><br>
                <span id="erreuremailins"></span><br>
                <label for="password"class="objet" >Mot de passe</label>
                <input type="password" name="password" placeholder="Votre mot de passe" id="pwd" required/><br>
                <span id="erreurpasswordins"></span><br>
                <input type="submit" name="connecter"value="Connecter" class="bouton-connecter" id="btn-connecter"> 
                <input type="reset" value="Annuler" class="bouton-connecter">          
            </form>
        </div>
    </div>
</main>