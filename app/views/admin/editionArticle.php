<?php
    $produit_categorie_id = (int)$produit['categorie_id']; 
    $produit_brasseur_id = (int)$produit['brasseur_id']; 
    $produit_contenance_id = (int)$produit['contenance_id']; 
   
    include 'app/views/template/headAdmin.php';    
    include 'app/views/template/headerAdmin.php';

?>
    <main>
        <h1 class="titre_admin">Edition de l'article</h1>
        <a href="index.php?action=admin" class="bouton_admin">Retour</a>
        <h2 class="titre_edition"><?php echo $produit['nom']; ?></h2>
        <form action="" class="form_article" method="post">
            <div class="champ_article">
                <label for="title">Title</label><br>
                <input type="text" name="title" value="<?php echo $produit['nom']; ?>" >
            </div>

            <div class="champ_article">
                <label for="description">Description</label><br>
                <textarea name="description" ><?php echo $produit['description']; ?></textarea>
            </div>

            <div class="champ_article">
                <label for="image">Image</label><br>
                <input type="text" name="image" value="<?php echo $produit['image']; ?>" >
            </div>

            <div class="champ_article">
                <label for="categorie">Catégorie</label>
                <select name="categorie" class="selection_gauche">
                    <?php foreach($liste_categories as $categorie){ ?>
                        <?php if($produit_categorie_id == $categorie['id']){ ?>
                            <option value ="<?php echo $categorie['id']; ?>" selected><?php echo $categorie['nom']; ?></option>
                        <?php }else{ ?>
                            <option value ="<?php echo $categorie['id']; ?>"><?php echo $categorie['nom']; ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>

            <div class="champ_article">
                <label for="brasseur">Brasseur</label>
                <select name="brasseur">
                    <?php foreach($liste_brasseurs as $brasseur){ ?>
                        <?php if($produit_brasseur_id == $brasseur['id']){ ?>
                            <option value ="<?php echo $brasseur['id']; ?>" selected><?php echo $brasseur['nom']; ?></option>
                        <?php }else{ ?>
                            <option value ="<?php echo $brasseur['id']; ?>"><?php echo $brasseur['nom']; ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
            
            <div class="champ_article">
                <label for="contenance">Contenance</label>
                <select name="contenance" class="selection_gauche">
                    <?php foreach($liste_contenances as $contenance){ ?>
                        <?php if($produit_contenance_id == $contenance['id']){ ?>
                            <option value ="<?php echo $contenance['id']; ?>" selected><?php echo $contenance['nom']; ?></option>
                        <?php }else{ ?>
                            <option value ="<?php echo $contenance['id']; ?>"><?php echo $contenance['nom']; ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
            <div class="champ_article">
                <label for="degre">Degré</label>
                <input type="text" name="degre" class="degre" value="<?php echo $produit['degre']; ?>">
            </div>
            <input type="hidden" name="id_produit" value="<?php echo $produit['id']; ?>">
            <button type="submit" class="envoi_article">Envoyer</button>
        </form>  
    </main>
    <?php
        include 'app/views/template/footer.php';
    ?>
   
</body>
</html>
