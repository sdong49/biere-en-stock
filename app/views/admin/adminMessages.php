<?php
    include 'app/views/template/headAdmin.php';    
    include 'app/views/template/headerAdmin.php';
?>

        <main>            
            <h1 class="titre_admin">Liste de message client</h1>
            <table id="messageTable" class="message_table" >
                <tr>
                    <th class="info"><span class="left" onclick="asc()">↑</span>Nom<span class="right" onclick="desc()">↓</span></th>
                    <th class="info">Prénom</th>
                    <th class="info">E-mail</th>
                    <th class="info">Téléphone</th>
                    <th class="info">Adresse</th>
                    <th>Message</th>   
                </tr>
                <?php 
                    foreach($messages as $message){ ?>
                        <tr>
                            <td><?php echo $message['nom']; ?></td>
                            <td><?php echo $message['prenom']; ?></td>
                            <td><?php echo $message['email']; ?></td>
                            <td><?php echo $message['phone']; ?></td>
                            <td><?php echo $message['adresse']; ?></td>
                            <td><?php echo $message['message']; ?></td>
                <?php } ?>            
            </table>
        </main>

        <?php
            include 'app/views/template/footer.php';
        ?>

<!--        <script type="text/javascript" src="app/public/js/sortByName.js"></script>-->
        <script type="text/javascript" src="http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/app/public/js/sortByName.js"></script>
    </body>
</html>
