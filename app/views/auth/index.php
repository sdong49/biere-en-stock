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
                <div class="errormessage">
                    <?php
                        if(isset($errorMessage))
                            echo $errorMessage;
                    ?>
                </div>
                <div>
                    <label for="nom-utilisateur">Identifiant</label>
                    <input type="text" name="nom-utilisateur" placeholder="Votre adresse email" id="nom-utilisateur" required/>
                </div>

                <div class="admin_login_mdp">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" placeholder="Votre mot de passe" id="password" required/>
                </div>

                <div>
                    <input type="submit" name="connecter"value="Connecter" class="bouton-connecter" id="btn-connecter">
                    <input type="reset" value="Annuler" class="bouton-connecter">
                </div>
            </form>
        </div>
    </div>
</main>