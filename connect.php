<?php
$user = "root";
$pass = "root";
try {
    $conn = new PDO('mysql:host=localhost;dbname=camargue_nautisme', $user, $pass);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>