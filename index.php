<?php
// Récupération de la requête
$request = $_SERVER['REQUEST_URI'];
// Nettoyage du début de l'URL
$request = str_replace("/routeur/", "", $request);
require_once("view.php");

switch($request) {
    case "qui":
        // Ici partie "contrôleur"

        // Génération de la vue
        print view("etudiants.php");
        break;
    case "quand":
        // Ici partie "contrôleur"

        // Génération de la vue
        print view("agenda.php");
        break;
    case "où":
        // Ici partie "contrôleur"

        // Génération de la vue
        print view("salles.php");
        break;
    default:
        // Ici partie "contrôleur"

        // Génération de la vue
        print "Bienvenue !";
    break;
}

