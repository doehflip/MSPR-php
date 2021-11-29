<?php 
include("./header-footer/header.php");
?>
      Formulaire 
    <form class="form_php"  method="post" action="">
     <div> Nom : <input type="text" name="Nom" placeholder="Entrez votre nom"/> </div>
     <div> Prenom : <input type="text" name="Prenom" placeholder="Entrez votre Prenom"  /> </div>
     <div> Email : <input type="email" name="email" placeholder="Entrer votre Email"  /> </div>
     <div> Telephone :<input type ="tel"name="telephone"placeholder="entrez votre numero de telephone" /> </div>

  
<label for="Equipement ">Equipement</label>

<select name="Equipement" id="equipement-select">
    <option value="">Kayak simple </option>
    <option value="">Kayak double </option>
    <option value="">Padlle </option>
<select>

<label for="lieu select">Choisissez un lieu :</label>

<select name="lieu" id= "choissez lieu">
    <option value="plage">Carnon</option>
    <option value="plage">Palavas</option>
</select>
    <label for="date resa">Date de reservation:</label>

<input type="date" id="start" name="trip-start"
       value="0000-00-00"
       min="2021-01-01" max="2065-12-31">

 <input type="submit" name="Valider" value="Valider" />

    </form>
    <?php 
    if (isset($_POST['Valider'])){ 
      print_r($_POST);
      if(empty($_POST['Nom']) && empty($_POST['Prenom']) && empty($_POST['email']) && empty($_POST['telephone'])){
        echo "Vous n'avez pas completer le formulaire" ; 
      }
      else {
        echo "formulaire completez";
        $requete_insertion = "INSERT INTO reservation VALUES (NULL, ?, ?, ?, ?, ?, 0)";
        require('../utilitaires/connexion.php');
        $sth=$conn->prepare($requete_insertion);
        $parametre_reservation =[$_POST['Nom'] ,$_POST['Prenom'] ,$_POST['email'] ,$_POST['telephone']];
        if(preg_match('/[0-9]{10}/',$_POST['telephone']))
        $sth->execute($parametre_reservation);
        echo "insertion réussie";
        $conn = NULL;
        
      }

    }
?>
 <?php 
include("./header-footer/footer.php");
?>


<<<<<<< HEAD
include("./header-footer/footer.php");

?>
=======
>>>>>>> 8acb86149e47529ec84c6ee938fb3fc9077b3786
