<?php 

include("./header-footer/header.php");

?>

<h2>Il reste aujourd'hui :</h2>
<div class="palavas">
    <p>Nombre de kayak simple</p>

    <?php 

    require('connect.php');

    
    $req='SELECT (nb_kayak_s - COUNT("resa_id")) AS kayak_s_restant FROM "reservations", "lieu" WHERE "fk_equip_resa" = 3 AND "fk_resa_lieu" = 1';
    $sth=$conn->prepare();


    ?>
    <p>Nombre de kayak double</p>
    <p>Nombre de paddle</p>
</div>
<div class="carnon">
    <p>Nombre de kayak simple</p>
    <p>Nombre de kayak double</p>
    <p>Nombre de paddle</p>
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

