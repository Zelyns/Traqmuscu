<?php

function ajouter($email, $mdp, $nom, $age, $poids ,$taille){
    require("connexion.php"); 
 
    
    if(isset($access)) {
        
        $req = $access->prepare("INSERT INTO membres (email, mdp, nom, age, poids, taille) VALUES(:email, :mdp, :nom, :age, :poids, :taille)");
        
        $req->bindParam(':email', $email);
        $req->bindParam(':mdp', $mdp);
        $req->bindParam(':nom', $nom);
        $req->bindParam(':age', $age);
        $req->bindParam(':poids', $poids);
        $req->bindParam(':taille', $taille);
        
        $req->execute();
        $req->closeCursor();
    } else {
        
        echo "Erreur de connexion à la base de données.";
    }
}
function getMembres($email,$mdp){
    require("connexion.php");
    if(isset($access)){
        $req = $access->prepare("SELECT * FROM membres WHERE email = ? AND mdp = ?");
        $req->execute(array($email,$mdp));
        $data = $req->fetch();
        return $data;
        $req->closeCursor();
    }
}