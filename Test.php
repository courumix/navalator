<?php

function positionneporteavions(&$grille): void {
    $l = (int)readline("Sur quelle ligne voulez vous positionner le torpilleur ? : ");
    $c = (int)readline("Sur quelle colonne voulez vous positionner le torpilleur ? : ");
    $longueur_porteavions = 5; // longueur du porte avions

    if ($l < 0 || $l >= count($grille) || $c < 0 || $c >= count($grille[0])) {
        echo "Coordonnées en dehors du tableau\n";
        return;
    }

    $position = readline("Voulez-vous positionner le torpilleur en horizontal (o) ou vertical (n)? : ");

    // Valider les espaces suffisants y eviter les colisions
    if ($position == "o") { // Horizontal
        if ($c + $longueur_porteavions > count($grille[0])) {
            echo "Le bateau dépasse de la grille.\n";
            return;
        }
        for ($i = 0; $i < $longueur_porteavions; $i++) {
            if ($grille[$l][$c + $i] != ".") {
                echo "Il y a déjà un bateau à cet endroit.\n";
                return;
            }
        }
        // Placer le bateau de manière horizontale
        for ($i = 0; $i < $longueur_porteavions; $i++) {
            $grille[$l][$c + $i] = "T";
        }
    } elseif ($position == "n") { // Vertical
        if ($l + $longueur_porteavions > count($grille)) {
            echo "Le bateau dépasse de la grille.\n";
            return;
        }
        for ($i = 0; $i < $longueur_porteavions; $i++) {
            if ($grille[$l + $i][$c] != ".") {
                echo "Il y a déjà un bateau à cet endroit.\n";
                return;
            }
        }
        // Placer le bateau de manière verticale
        for ($i = 0; $i < $longueur_porteavions; $i++) {
            $grille[$l + $i][$c] = "P";
        }
    } else {
        echo "Choix invalide. Veuillez entrer 'o' ou 'n'.\n";
        return;
    }

    echo "Le bateau a été placé avec succès!\n";
}
