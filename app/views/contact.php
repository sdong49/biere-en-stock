<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Contactez-nous</title>
<?php
    include 'template/head.php';
    include 'template/header.php';
?>
        <main>
            <!--------------formulaire-------------->
                <p class="titre">Formulaire de contact</p>
                <div class="info_contact">
                    <p>Vous ne trouvez pas la réponse que vous cherchez ? Notre service client est là pour vous aider, de 9h à 18h du lundi au vendredi.</p>
                    <p>APPELEZ-NOUS au 02 22 22 22 22 (prix d’un appel local).</p>
                    <p>Vous pouvez également nous contacter par email en remplissant le formulaire ci-dessous.</p>
                </div>
                <?php if(isset($message)){
                         if(array_key_exists("ok",$message)){ ?>
                            <div class="message_succes">
                                <?php echo $message['ok']; ?>
                         </div>
                         <?php
                         }
                          if(array_key_exists("nok",$message)){ ?>
                            <div class="message_non_succes">
                                <?php echo  $message['nok']; ?>
                            </div>
                         <?php }

                    }?>
                <form method="POST" action="" class="formulaire">
                    <fieldset>
                        <legend>Vos coordonnées</legend>
                            <div class="gerne">
                                <input type="radio" name="m." value="m." id="m."/>
                                <label for="m.">M.</label>
                                <input type="radio" name="mme" value="mme" id="mme"/>
                                <label for="mme">Mme</label>
                            </div>
                            <div class="colonnes">
                                <div class="colonne">
                                    <div>
                                        <label for="nom">Votre nom*</label>
                                        <input type="text" name="nom" id="nom" required/>
                                    </div>
                                    <div>
                                        <label for="email">Votre email*</label>
                                        <input type="text" name="email"  id="email" required/>
                                    </div>
                                </div>
                                <div class="colonne">
                                    <div>
                                        <label for="prenom">Votre prénom*</label>
                                        <input type="text" name="prenom" id="prenom" required/>
                                    </div>
                                    <div>
                                        <label for="tel">Votre téléphone*</label>
                                        <input type="tel" name="tel" id="tel" required/>
                                    </div>
                                </div> 
                            </div>              
                            <p class="adresse">
                                <label for="adresse">Votre adresse</label>
                                <textarea name="address" rows="2"  id="address" onkeyup="getAddress()"></textarea>
                                <ul id="address_list"></ul>                                
                            </p> 
                    </fieldset>
                    <fieldset>
                        <legend>Vos messages*</legend>
                        <p class="message">
                                <textarea name="message" rows="10" required></textarea>
                        </p>
                    </fieldset>
                    <p>
                        * champs obligatoires
                        S'il s'agit d’une question sur une commande, 
                        pensez-bien à indiquer son numéro dans la rubrique 
                        « N° de commande » du formulaire.
                    </p>
                    <p class="bouton-contact">
                        <input type="submit" name="envoiContact" value="Envoyer"> 
                    </p>
                </form>
                <div class="acces">  
                        <p>Trouvrez-nous sur la carte</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2687.92019771653!2d-2.7750422848950493!3d47.647117579187416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48101c1ee7bc3d91%3A0xa622fa4c9bf9c44c!2sLyc%C3%A9e%20G%C3%A9n%C3%A9ral%20et%20technologique%20Alain%20Rene%20Lesage!5e0!3m2!1sfr!2sfr!4v1574709778102!5m2!1sfr!2sfr" width="800" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>    
        </main>

        <?php
        include 'template/footer.php';
        ?>
        
        <!----- jQuery ----->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

        <!-------- chargement de la fiche script --------->
        <script type="text/javascript" src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/js/modal.js"></script>

        <script type="text/javascript" src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/js/geoapi.js"></script>
        

   </body>
</html>