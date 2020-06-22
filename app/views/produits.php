<!DOCTYPE html>
<html lang="fr">
    <head>
    <base href="<=basePath>">
        <title>Nos produits</title>

<?php
    include 'template/head.php';
    include 'template/header.php';
?>
        <!----- le contenue de la page produit----->
        <main class="container">
            <!------menu catégorie-->
            <ul class="sousmenu">
                <li class="btn_cat"><a href="/stagiaires/saiyin-dong/biere_en_stock/produit" class="btn_cat">Tous nos produits</a></li>
                <li><a href="/stagiaires/saiyin-dong/biere_en_stock/produit/categorie/1" class="btn_cat">Bouteilles</a></li>
                <li><a href="/stagiaires/saiyin-dong/biere_en_stock/produit/categorie/2" class="btn_cat">Fûts</a></li>
                <li><a href="/stagiaires/saiyin-dong/biere_en_stock/produit/categorie/4" class="btn_cat">Assortiments</a></li>   
                <li><a href="/stagiaires/saiyin-dong/biere_en_stock/produit/categorie/5" class="btn_cat">Tireuses</a></li>   
            </ul>
            <!------la section catégorie------>
            <?php 
                if(isset($cat)){
                    $cat_nom = $cat['nom'];
                    $cat_description = $cat['description'];
                    $cat_image = $cat['image'];?>
                    <section class="categorie">
                        <div class="categorie_l">
                            <img src="<?php echo $cat_image; ?>" alt="biere assortiment fût">                                                                                    
                        </div>
                        <div class="categorie_r">
                            <h2><?php echo $cat_nom; ?></h2><br>
                            <p><?php echo $cat_description; ?></p>
                        </div>
                    </section>
               <?php }else{ // pas de categorie ?>
                        <section class="categorie">
                            <div class="categorie_l">
                                <img src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/images/page_produit_20.jpg" alt="tous nos produits">
                            </div>
                            <div class="categorie_r">
                                <h2>Tous nos produits</h2><br>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget 
                                    commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat sem at mauris suscipit porta. 
                                    Cras metus velit, elementum sed pellentesque a, pharetra eu eros. Etiam facilisis placerat euismod.
                                    Nam faucibus neque arcu, quis accumsan leo tincidunt varius. 
                                </p>
                            </div>
                        </section>
              <?php } ?>
    
            <section class="articles_produit">
            <?php
            // echo "<pre>";
            //  var_dump($produits); 
            //  echo "</pre>";
                foreach($produits as $produit){
                    $id = $produit['id'];
                    $nom = $produit['nom'];
                    $image = $produit['image'];
                    
                    $categorieFront = new \Projet\Models\Front\CategorieManager();
                    $cat = $categorieFront->getCategorieById($produit['categorie_id']);

             ?>
                <article class="bloc_articles_produit">
                    <a href="/stagiaires/saiyin-dong/biere_en_stock/produit/<?php echo $id; ?>">
                    <img src=<?php echo ($image)?$image : "http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/images/page_produit_02.jpg";?> alt="bouteille 02">
                    <p><?php echo $nom; ?></p>
                    <p><?php echo $cat['nom']; ?></p>
                    </a>
                </article>
                <?php } ?>
            </section>
        </main>

        <?php
        include 'template/footer.php';
        ?>
        
        <!----- jQuery ----->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

        <!-------- chargement de la fiche script --------->
        <script type="text/javascript" src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/js/modal.js"></script>
       

    </body>
</html> 