<?php
    
    include 'app/views/template/headAdmin.php';    
    include 'app/views/template/headerAdmin.php';
?>
        <main class="admin_article_ajout">
            <h1 class="titre">Ajout de l'article</h1>
            <a href="index.php?action=admin" class="bouton">Retour</a>
            <form action="" class="form_ajout" method="post">
                <div class="champ_ajout">
                    <label for="title">Title</label><br>
                    <input type="text" name="title">
                </div>

                <div class="champ_ajout">
                    <label for="description">Description</label><br>
                    <textarea name="description" id="" ></textarea>
                </div>

                <div class="champ_ajout">
                    <label for="image">Image</label><br>
                    <input type="text" name="image">
                </div>

                <div class="champ_ajout">
                    <label for="categorie">Catégorie</label>
                    <select name="categorie" class="selection_gauche">
                        <?php foreach($liste_categories as $categorie){ ?>
                            <option value ="<?php echo $categorie['id']; ?>"><?php echo $categorie['nom']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                
                <div class="champ_ajout">
                    <label for="brasseur">Brasseur</label>
                    <select name="brasseur">
                        <?php foreach($liste_brasseurs as $brasseur){ ?>
                            <option value ="<?php echo $brasseur['id']; ?>"><?php echo $brasseur['nom']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                
                <div class="champ_ajout">
                    <label for="contenance">Contenance</label>
                    <select name="contenance" class="selection_gauche">
                        <?php foreach($liste_contenances as $contenance){ ?>
                            <option value ="<?php echo $contenance['id']; ?>"><?php echo $contenance['nom']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            
                <div class="champ_ajout">
                    <label for="degre">Degré</label>
                    <input type="text" name="degre" class="degre">
                </div>
                <input type="hidden" name="ajout_produit" value="true">
                <button type="submit" class="envoi_ajout">Envoyer</button>
                
            </form>
        
        </main>
        <?php
            include 'app/views/template/footer.php';
        ?>
    
    </body>
</html>
