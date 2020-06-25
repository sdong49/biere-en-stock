
<?php
    include 'app/views/template/headAdmin.php';    
    include 'app/views/template/headerAdmin.php';
?>
    <main>

        <p class="titre_admin">Gestion des articles</p>
        <a href="index.php?action=admin_ajout" class="bouton_admin">Ajouter un article</a>
        <div class="liste_article">
        <!-- boucle -->
        <?php 
            foreach($produits as $produit){ 
                $categorie_id = (int)$produit['categorie_id'];
                $categorieManager = new \Projet\Models\Admin\CategorieManager();
                $categorie = $categorieManager->getCategorieById($categorie_id);
                //var_dump($categorie);
                //var_dump($produit);
                ?>
                <div class="article_de_admin">                
                    <p class="nom_article"><?php echo $produit['nom']; ?></p>
                    <p class="categorie_article"><?php echo $categorie['nom']; ?></p>
                    <p class="img_admin"><img src="<?php echo $produit['image']; ?>" class="img_admin" alt="bière"></p>
                    <div class="option">
                        <a href="index.php?action=admin_supprimer&id=<?php echo $produit['id']; ?>" onclick="javascript:return supprimer()">Supprimer</a>
                        <a href="index.php?action=admin_edition&id=<?php echo $produit['id']; ?>" >Editer</a>
                    </div>                     
                </div>
        <?php } ?>
        </div>
            <script> 
                function supprimer() { 
                    let msg = "Voulez-vous supprimer ce produit?\n\nMerci de confirmer！"; 
                    if (confirm(msg)==true){ 
                        return true; 
                    }else{ 
                        return false; 
                    } 
                } 
            </script> 
            
    </main>
    <?php
        include 'app/views/template/footer.php';
    ?>
    
</body>
</html>