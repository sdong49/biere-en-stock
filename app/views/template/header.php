
    <body>     
        <!-------tête de page------->
        <header>
            <!--la couche gris quand la boite modal apparut-->
            <div class="hidebg" id="hidebg"></div>
            <!------bandeau contact tout en haut-->
            <div class="haut">    
                <ul class="contact-header">
                    <li><img src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/images/location.png" alt="icone_location" > Rue de Prat Lann 56000 VANNES</li>
                    <li><img src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/images/tel.png" alt="icone_tel" > 02 22 22 22 22</li>
                    <li><img src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/images/email.png" alt="icone_email"><a href="mailto:name@email.com"> contact@gmail.com</a></li>
                </ul> 
            </div>
              <!--deuxième partie de la tête de page "logo" "munu principal" "compte"-->
            <div class="nav">
                <!------logo------>
                <div class="gouche_nav">
                    <a href="/stagiaires/saiyin-dong/biere_en_stock/accueil"><img src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/images/logo_c.jpg" alt="logo-bière en stock"></a>                    
                </div>
                <div class="droite_nav"> 
                    <!--menuprincipal-->
                    <nav class="menuprincipal">
                        <input type="checkbox" id="menu-mobile" role="button">
                        <label for="menu-mobile" class="menu-mobile">
                            <img src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/images/menuburger.png" alt="icone-menu-burger">
                        </label>
                        <ul>
                            <li><a href="/stagiaires/saiyin-dong/biere_en_stock/accueil" class="active">Accueil</a></li>
                            <li><a href="/stagiaires/saiyin-dong/biere_en_stock/produit">Produits</a></li>
                            <li><a href="/stagiaires/saiyin-dong/biere_en_stock/contact">Contact</a></li>
                        </ul>
                    </nav>
                    <!----compte---->
                    <div class="compte">                
                        <img src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/images/compte_c.png" alt="mon-compte" onclick="openModal();">
                        <!----- Modal connexion------>
                        <div class="modal" id="modal"> 
                            
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <div class="close" onclick="closeModal();">X</div>
                                <h4 class="modal-title">Connectez-vous</h4>
                            </div>                                        
                            <!-- Modal body -->
                            <div class="modal-body">
                                <form>
                                    <div>
                                        <label for="emailins" >Adresse email</label>
                                        <input type="text" name="emailins" placeholder="Votre adresse email" id="emailins" required/>
                                    </div>
                                    <div class="connecte_mdp">
                                        <label for="pwd">Mot de passe</label>
                                        <input type="text" name="pwd" placeholder="Votre mot de passe" id="pwd" required/>
                                    </div>
                                    <p><a href="index.php?action=inscription">Vous n'avez pas vous inscirit ?</a></p>
                                    <input type="submit" value="Connecter" class="bouton-connecter" id="btn-connecter"> 
                                    <input type="reset" value="Annuler" class="bouton-connecter">          
                                </form>
                            </div>                                                                                                        
                        </div>            
                    </div>
                </div>                          
            </div>
           
        </header>