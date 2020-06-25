<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Accueil bière en stock</title>
<?php
    include 'template/head.php';
    include 'template/header.php';
?>
    
        <main class="container">
            <!-----------slider-------------->
            <div id="slider" class="slider">             
                <div id="wrapper" class="slide">
                </div>            
            </div>
            <!----------partie produit----------->
            <section class="produit">
                <h2>Nos produits</h2>
                <div class="types-produit">
                    <article class="type">
                        <figure>
                            <img src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/images/bouteille.png" alt="bière en bouteille" class="photo-titre">                       
                            <a href="/stagiaires/saiyin-dong/biere_en_stock/produit/categorie/1"class="bouton-info"><div class="mask">Bouteilles</div></a>                   
                        </figure>  
                    </article>
                    <article class="type">
                            <figure>
                                <img src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/images/fut.png" alt="fût de bière" class="photo-titre">                       
                                <a href="/stagiaires/saiyin-dong/biere_en_stock/produit/categorie/2"class="bouton-info"><div class="mask">Fûts</div></a>                  
                            </figure>  
                    </article>
                    <article class="type">
                            <figure>
                                <img src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/images/assortiment.png" alt="assortoment de bière" class="photo-titre">                       
                                <a href="/stagiaires/saiyin-dong/biere_en_stock/produit/categorie/4"class="bouton-info"><div class="mask">Assortiments</div></a>                   
                            </figure>  
                    </article>               
                    <article class="type">
                            <figure>
                                <img src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/images/tireuse.png" alt="tireuse à bière" class="photo-titre">                       
                                <a href="/stagiaires/saiyin-dong/biere_en_stock/produit/categorie/5"class="bouton-info"><div class="mask">Tireuse</div></a>                    
                            </figure>  
                    </article>
                </div>
            </section>
            <section class="session_actu">
                <h2>Découvrez le monde de la bière</h2>
                <div class="actus">
                    <article class="actu">
                        <div class="media">
                            <img src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/images/festival.jpg" alt="festival-biere-lyon">
                        </div>
                        <div class="bloc-actu">
                                <h3>Titre 1</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Quisque sapien velit, aliquet eget commodo nec 
                                    <br>
                                </p>
                                <a href="#"class="bouton">Je découvre</a>            
                        </div> 
                        
                    </article>
                    <article class="actu"> 
                        <div class="media">
                            <img src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/images/accueil_actu_02.jpg" alt="festival-biere-lyon">
                        </div>
                        <div class="bloc-actu">
                            <h3>Titre 2</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Quisque sapien velit, aliquet eget commodo nec                            
                            </p>
                            <a href="#"class="bouton">Je découvre</a>            
                        </div>                   
                    </article>
                    <article class="actu">
                        <div class="media">
                            <img src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/images/accueil_actu_01.jpg" alt="une-biere-ecolo-a-base-dinvendus-de-pain">
                        </div>
                        <div class="bloc-actu">
                                <h3>Titre 3</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Quisque sapien velit, aliquet eget commodo nec
                                    <br>
                                </p>
                                <a href="#"class="bouton">Je découvre</a>            
                        </div> 
                        
                    </article>
                    <article class="actu">
                        <div class="media">
                            <img src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/images/festival.jpg" alt="festival-biere-lyon">
                        </div>
                        <div class="bloc-actu">
                                <h3>Titre 4</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Quisque sapien velit, aliquet eget commodo nec 
                                    <br>
                                </p>
                                <a href="#"class="bouton">Je découvre</a>            
                        </div> 
                        
                    </article>
                </div>
            </sectiion>
        </main>

        <?php
        include 'template/footer.php';
        ?>

        <!----- jQuery ----->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

        <!-------- chargement de la fiche script Slider --------->
        <script type="text/javascript" src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/js/slider.js"></script>
        <script type="text/javascript" src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/js/modal.js"></script>
    
    </body>
</html>