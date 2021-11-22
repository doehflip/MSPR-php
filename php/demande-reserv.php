<html>
  <head>
    <title>Formulaire  PHP/MySQL</title>
  <link rel="stylesheet" href="../css-js/style.css"/>
</head>
  <body> 
      Formulaire 
    <form class="form_php"  method="post" action="controller.php">
     <div> Name : <input type="text" name="name" placeholder="Entrez votre nom"/> </div>
     <div> Prenom : <input type="text" name="Prenom" placeholder="Entrez votre Prenom"  /> </div>
     <div> Email : <input type="email" name="email" placeholder="Entrer votre Email"  /> </div>
     <div> Telephone :<input type ="telephone"name="telephone"placeholder="entrez votre numero de telephone" /> </div>

     <div>
  <input type="radio" id="kayak simple " name="equipement" value="kayak simple">
         
  <label for="kayak simple">kayak simple </label>
</div>

<div>
  <input type="radio" id="dewey" name="equipement" value="kayak double">
  <label for="kayak">kayak double </label>
</div>

<div>
  <input type="radio" id="louie" name="equipement" value="paddle">
  <label for="paddle">Paddle</label>
</div>

<label for="date resa">Date de reservation:</label>

<input type="date" id="start" name="trip-start"
       value="0000-00-00"
       min="2021-01-01" max="2065-12-31">

 <input type="submit" name="Valider" value="Validez" />
    </form>
  </body>
</html>
<?php
 define("ROOT",dirname($_server['PHP_SELF']));
 echo ROOT;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"]; 
    $email = $_POST["email"];
    
    if (!isset($name)){
      die(" entrez votre nom");
    }
    if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
      die(" entrez votre adresse e-mail");
    }
    
    print "Salut " . $name . "!, votre adresse e-mail est ". $email;
  }
?>