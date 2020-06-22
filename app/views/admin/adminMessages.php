<?php
    include 'app/views/template/headAdmin.php';    
    include 'app/views/template/headerAdmin.php';
?>

        <main class="admin_message">
            
            <h1 class="titre">Liste de message client</h1>
            <table id="messageTable" >
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

        
        <script>
            function asc(){
                $.ajax({
                    url:'index.php?action=adminMessageAsc',
                    type:'GET',
                    success: function(response){
                        $("#messageTable tr:not(:first)").remove();
                        $("#messageTable").append(response);
                    }
                });
            }

            function desc(){
                $.ajax({
                    url:'index.php?action=adminMessageDesc',
                    type:'GET',
                    success: function(response){
                        $("#messageTable tr:not(:first)").remove();
                        $("#messageTable").append(response);
                    }
                });
            }
        </script>
    </body>
</html>
