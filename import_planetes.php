<?php

$connexion = mysqli_connect(
    "localhost", // serveur
    "root",      // login mysql sur serveur
    "root",      // mot de passe mysql
    "starwars"       // nom base de données
);
// NETTOYAGE
$resultat = $connexion->query("DELETE FROM planetes");

for ($i = 1; $i <= 6; $i++) {
    $ch = curl_init("https://swapi.dev/api/planets/?page=".$i);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch); 

    $planetes = json_decode($result, true);  
    foreach($planetes["results"] as $planete) {
        print "Insertion des données de ...".$planete["name"]."<br/>";
        $requete = "INSERT INTO planetes (name, diameter, population) VALUES ('".$planete["name"]."',".$planete["diameter"]."',".$planete["population"].")";
        $resultat = $connexion->query($requete);
    }
}
