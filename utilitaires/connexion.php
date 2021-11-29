<?php
$user = "root";
$pass = "";

try {
    $conn = new PDO('mysql:host=localhost;dbname=camarague_nautisme', $user, $pass);
    //echo"Connection OK";
    //$dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>