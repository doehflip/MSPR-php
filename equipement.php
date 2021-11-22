<?php 

include("./header-footer/header.php");

?>

<h2>Il reste aujourd'hui :</h2>
<div class="palavas">
    <p>Nombre de kayak simple :</p>
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

    } ?>

   
    <p>Nombre de kayak double</p>
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

    } ?>

    <p>Nombre de paddle</p>

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
</div>
<div class="carnon">
    <p>Nombre de kayak simple</p>
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

    } ?>
    <p>Nombre de kayak double</p>
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

    } ?>
    <p>Nombre de paddle</p>
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

    } ?>
</div>
<button>Faire une demande de réservation</button>

<h2>Tarifs</h2>
<img src="./images/seakayaking.jpeg" alt="">
<p>Kayak infos</p>
<img src="./images/single_kayak.jpeg" alt="">
<p>Kayak infos</p>
<img src="./images/standup-paddle-group.jpeg" alt="">
<p>Paddle infos</p>

<?php

include("./header-footer/footer.php");

?>

