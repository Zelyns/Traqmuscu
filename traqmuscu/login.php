<?php
session_start();
    require("./view/header.php");
    require("./view/footer.php");
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
                
                <input type="submit" class="btn btn-primary" name="envoyer" value="Se connecter"> <a href="./inscription.php">Inscription</a>

            </div>
            <div class="col-md-3"></div>
            

        </div>
    </div>
</body>
</html>

<?php

if(isset($_POST['envoyer'])){
    if(!empty($_POST['email']) AND !empty($_POST['mdp'])){
        $email = htmlspecialchars($_POST['email']);
        $mdp =htmlspecialchars($_POST['mdp']);

        $membres = getMembres($email, $mdp);
        
        if($membres){
            
            $_SESSION['dhdTbzzoP5654'] = $membres;
            header("Location: /traqmuscu/index.php");

        }
       else
        {
            echo " Probleme de connection !";
        }
    }
}

?>
