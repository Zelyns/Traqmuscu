<?php
    require("./view/header.php");
    
    require("commandes.php");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login - shopER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <br>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">

                <form method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" style="width: 80%">
                    
                </div>
                <div class="mb-3">
                    <label for="motdepasse" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control"  name="mdp" style="width: 80%">
                </div>
                <div class="mb-3">
                    <label for="motdepasse" class="form-label">Nom</label>
                    <input type="text" class="form-control"  name="nom" style="width: 80%">
                </div>
            
                <div class="mb-3">
                    <label for="motdepasse" class="form-label">Age</label>
                    <input type="string" class="form-control"  name="age" style="width: 80%">
                </div>
                <div class="mb-3">
                    <label for="motdepasse" class="form-label">Poids</label>
                    <input type="string" class="form-control"  name="poids" style="width: 80%">
                </div>
                <div class="mb-3">
                    <label for="motdepasse" class="form-label">taille</label>
                    <input type="string" class="form-control"  name="taille" style="width: 80%">
                </div>
                
                <input type="submit" class="btn btn-primary" name="envoyer" value="Envoyer" href="login.php"> 
            </div>
            <div class="col-md-3"></div>
            

        </div>
    </div>
</body>
</html>

<?php

if(isset($_POST['envoyer']))
{
  if(isset($_POST['email']) AND isset($_POST['mdp']) AND isset($_POST['nom']) AND isset($_POST['age']) AND isset($_POST['poids']) AND isset($_POST['taille']))
  {
  if(!empty($_POST['email']) AND !empty($_POST['mdp']) AND !empty($_POST['nom']) AND !empty($_POST['age']) AND !empty($_POST['poids']) AND !empty($_POST['taille']))
      {
          $email = htmlspecialchars(strip_tags($_POST['email']));

          $mdp = htmlspecialchars(strip_tags($_POST['mdp']));
          
          $nom = htmlspecialchars(strip_tags($_POST['nom']));
          
          $age = htmlspecialchars(strip_tags($_POST['age']));
          
          $poids = htmlspecialchars(strip_tags($_POST['poids']));

          $taille = htmlspecialchars(strip_tags($_POST['taille']));
          
        
        try 
        {
          ajouter($email, $mdp, $nom, $age, $poids, $taille);
         
        } 
        catch (Exception $e) 
        {
            var_dump($e->getMessage()) ;
        }

      }
  }
}

?>