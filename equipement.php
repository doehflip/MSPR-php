<?php 


include("./header-footer/header.php");

?>
<h1>Nos équipements</h1>
<p class="titre_tableau_stock">Il reste aujourd'hui :</p> <br><br>
<div class="equip_restant">
    <div class="lieu">
        <div class="palavas">   
            <center><h2>Palavas-les-Flots</h2></center>
            <div>
            <p>Nombre de kayak simple :
            <?php 

            require('connect.php');

            $req='SELECT (nb_kayak_s - COUNT(resa_id)) as nb_kayak_s_restant FROM reservation 
            INNER JOIN lieu ON lieu.lieu_id = reservation.fk_resa_lieu
            WHERE lieu_id = ? AND fk_resa_equip = 1';
            $sth=$conn->prepare($req);
            $sth->execute([1]);
            $nombre_kayak_simple = $sth->fetchAll();
            foreach($nombre_kayak_simple as $kayak_simple){
                echo $kayak_simple['nb_kayak_s_restant'];

            } ?> </p>
            
            </div>
            <div>
            <p>Nombre de kayak double : 
            <?php 

            require('connect.php');

            $req='SELECT (nb_kayak_d - COUNT(resa_id)) as nb_kayak_d_restant FROM reservation 
            INNER JOIN lieu ON lieu.lieu_id = reservation.fk_resa_lieu
            WHERE lieu_id = ? AND fk_resa_equip = 2';
            $sth=$conn->prepare($req);
            $sth->execute([1]);
            $nombre_kayak_double = $sth->fetchAll();
            foreach($nombre_kayak_double as $kayak_double){
                echo $kayak_double['nb_kayak_d_restant'];

            } ?></p>
            
            </div>
            <div>
            <p>Nombre de paddle :
            <?php 

            require('connect.php');

            $req='SELECT (nb_paddle - COUNT(resa_id)) as nb_paddle_restant FROM reservation 
            INNER JOIN lieu ON lieu.lieu_id = reservation.fk_resa_lieu
            WHERE lieu_id = ? AND fk_resa_equip = 3';
            $sth=$conn->prepare($req);
            $sth->execute([1]);
            $nombre_paddle = $sth->fetchAll();
            foreach($nombre_paddle as $paddle){
                echo $paddle['nb_paddle_restant'];

            } ?> 
            </p>

            
            </div>
        </div>
        <div class="carnon">
            <center><h2>Carnon</h2></center>
            <div>
            <p>Nombre de kayak simple : 
            <?php 

            require('connect.php');

            $req='SELECT (nb_kayak_s - COUNT(resa_id)) as nb_kayak_s_restant FROM reservation 
            INNER JOIN lieu ON lieu.lieu_id = reservation.fk_resa_lieu
            WHERE lieu_id = ? AND fk_resa_equip = 1';
            $sth=$conn->prepare($req);
            $sth->execute([2]);
            $nombre_kayak_simple = $sth->fetchAll();
            foreach($nombre_kayak_simple as $kayak_simple){
                echo $kayak_simple['nb_kayak_s_restant'];

            } ?></p>
            
            </div>

            <div>
            <p>Nombre de kayak double : 
            <?php 

            require('connect.php');

            $req='SELECT (nb_kayak_d - COUNT(resa_id)) as nb_kayak_d_restant FROM reservation 
            INNER JOIN lieu ON lieu.lieu_id = reservation.fk_resa_lieu
            WHERE lieu_id = ? AND fk_resa_equip = 2';
            $sth=$conn->prepare($req);
            $sth->execute([2]);
            $nombre_kayak_double = $sth->fetchAll();
            foreach($nombre_kayak_double as $kayak_double){
                echo $kayak_double['nb_kayak_d_restant'];

            } ?></p>
            
            </div>

            <div>
            <p>Nombre de paddle : 
            <?php 

            require('connect.php');

            $req='SELECT (nb_paddle - COUNT(resa_id)) as nb_paddle_restant FROM reservation 
            INNER JOIN lieu ON lieu.lieu_id = reservation.fk_resa_lieu
            WHERE lieu_id = ? AND fk_resa_equip = 3';
            $sth=$conn->prepare($req);
            $sth->execute([2]);
            $nombre_paddle = $sth->fetchAll();
            foreach($nombre_paddle as $paddle){
                echo $paddle['nb_paddle_restant'];

            } ?></p>
            
            </div>
        </div>
    </div>
    <div class="bouton">
        <a href="./demande-reserv.php"><button class="reserver">Faire une demande de réservation</button></a>
    </div>
</div>



<h2>Tarifs</h2>
<div class="image">
    <img src="./images/seakayaking.jpeg" alt="">
    <h4>Kayak double :</h4>
    <p>
        <?php 

            require('connect.php');

            $req='SELECT equip_desc, equip_info FROM type_equipement WHERE equip_id = 2';
            $sth=$conn->query($req);
            $desc_kayak_double = $sth->fetchAll();
            foreach($desc_kayak_double as $double_infos){
                echo $double_infos['equip_desc'];?> <br><br> <?php
                echo $double_infos['equip_info'];?> <br><br> <?php

            } 
        ?>
    </p>
    <img src="./images/single_kayak.jpeg" alt="">
    <h4>Kayak simple :</h4>
    <p>
        <?php 

            require('connect.php');

            $req='SELECT equip_desc, equip_info FROM type_equipement WHERE equip_id = 1';
            $sth=$conn->query($req);
            $desc_kayak_double = $sth->fetchAll();
            foreach($desc_kayak_double as $double_infos){
                echo $double_infos['equip_desc'];?> <br><br> <?php
                echo $double_infos['equip_info'];?> <br><br> <?php

            } 
        ?>
    </p>
    <img src="./images/standup-paddle-group.jpeg" alt="">
    <h4>Paddle :</h4>
    <p>
        <?php 

            require('connect.php');

            $req='SELECT equip_desc, equip_info FROM type_equipement WHERE equip_id = 3';
            $sth=$conn->query($req);
            $desc_kayak_double = $sth->fetchAll();
            foreach($desc_kayak_double as $double_infos){
                echo $double_infos['equip_desc'];?> <br><br> <?php
                echo $double_infos['equip_info'];?> <br><br> <?php

            } 
        ?>
    </p>
</div>
<?php

include("./header-footer/footer.php");

?>



