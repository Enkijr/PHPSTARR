<?php

function view($fichier) {
    ob_start();
    include __DIR__."/views/".$fichier;
    $resultat = ob_get_clean();
    return $resultat;
}
