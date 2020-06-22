
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Article</title>
<?php
    include 'template/head.php';
    include 'template/header.php';
    $image = $produit['image'];
?>
        <!-----contenue de la page article----->
        <main class="container"> 
            <!------ la première section "description" de l'article-->    
            <section class="description">
                <div class="img_article">
                    <img src="<?php echo $image; ?>" alt="bière">
                </div>
                <div class="prospectus">
                <?php 
                    $nom = $produit['nom'];
                    
                    // $brasseur_nom = $brasseur['nom'];
                    // $contenance = $contenance['nom'];
                    // $degre = $produit['degre'];
                    $description = $produit['description'];
                    $histoire_brasseur = $brasseur['histoire'];
                    //$categorie = $produit['categorie'];
                ?>
                    <h2><?php echo $nom; ?></h2><br>
                    <p><?php echo $description; ?></p>
                    <table>
                        <?php if($brasseur && $brasseur['nom'] != 'Ignorer'){ 
                            $brasseur_nom = $brasseur['nom']; 
                            $origine = $brasseur_pays['nom_pays'];
                            //var_dump($brasseur_pays); ?> 
                        <tr>
                            <td>
                                Brasseur
                            </td>
                            <td>
                                <?php echo $brasseur_nom; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Origine
                            </td>
                            <td>
                                <?php echo $origine; ?>
                            </td>
                        </tr>
                        <?php } ?>
                        <?php if($contenance && $contenance['nom'] != 'Ignorer'){ 
                            $contenance = $contenance['nom']; ?> 
                        <tr>
                            <td>
                                Contenance
                            </td>
                            <td>
                                <?php echo $contenance; ?>
                            </td>
                        </tr>
                        <?php } ?>
                        <?php if(!empty($produit['degre'])){ 
                             $degre = $produit['degre']; ?>
                        <tr>
                            <td>
                                Degré d'alcool
                            </td>
                            <td>
                                <?php echo $degre; ?>
                            </td>
                        </tr>
                        <?php } ?>                    
                    </table>
                </div>
            </section>

            <!------ la deuxième section "notices" de l'article-->
            <section class="notices">
                <ul class="notices_hd">
                    <li class="notices_hd1 active">DESCRIPTION</li>
                    <?php if($brasseur && $brasseur['nom'] != 'Ignorer'){ ?>
                    <li class="notices_hd2">BRASSEUR</li>
                    <?php } ?>
                </ul>
                <ul class="notices_bd">
                    <li class="notices_bd1 active">
                        <?php echo $description; ?>
                    </li>
                    <?php if($brasseur && $brasseur['nom'] != 'Ignorer'){ ?>
                    <li class="notices_bd2">
                        <?php echo $histoire_brasseur; ?>
                    </li>
                    <?php } ?>
                </ul>   
                
            </section>


        </main>

        <?php
        include 'template/footer.php';
        ?>
        
        <!----- jQuery ----->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

        <!-------- chargement de la fiche script --------->
        <script type="text/javascript" src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/js/modal.js"></script>
        <!-----jQuery de la partie "notices" -->            
        <script>
            $(function()
            {
                $('.notices_hd1').on('click',function(){
                    $('.notices_bd1, .notices_hd1').addClass('active');
                    $('.notices_bd2, .notices_hd2').removeClass('active');
                });
                $('.notices_hd2').on('click',function(){
                    $('.notices_bd2, .notices_hd2').addClass('active');
                    $('.notices_bd1, .notices_hd1').removeClass('active');
                });

            });
            
        </script>
    </body>
</html>