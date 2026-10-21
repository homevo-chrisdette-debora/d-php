<?php

function afficherAuteur(string $emailAuteur, array $utilisateurs): string
{
    foreach ($utilisateurs as $utilisateur) {
        if ($emailAuteur === $utilisateur['email']) {
            return $utilisateur['nom'] . ' (' . $utilisateur['age'] . ' ans)';
        }
    }
}

function recette_est_valide(array $recette = []): bool
{
    $recette_est_valide = false;
    if (array_key_exists('statut', $recette) && is_bool ($recette['statut'])) {
        $recette_est_valide = $recette['statut'];
    } 
    return  $recette_est_valide;
}

function obtenirRecettes(array $recettes): array
{
    $recettesValides = [];

    foreach ($recettes as $recette) {
        if (recette_est_valide($recette)) {
            $recettesValides[] = $recette;
        }
    }

    return $recettesValides;
}
