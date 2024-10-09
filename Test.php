<?php

function positionneporteavion(&$grille){
    $l = (int)readline("Sur quelle ligne voulez vous positionner le porte avion ? : ");
    $c = (int)readline("Sur quelle colonne voulez vous positionner le porte avion ? : ");
    $position = readline("voulez-vous postionner le porte avion en horizontal ? (o/n) : ");
    if($position == "o"){
        if($grille[$l][$c] == "." and $grille[$l][$c+1] == "." and $grille[$l][$c+2] == "." and $grille[$l][$c+3] == "." and $grille[$l][$c+4] == "."){
            $grille[$l][$c] = "H";
            $grille[$l][$c+1] = "P";
            $grille[$l][$c+2] = "P";
            $grille[$l][$c+3] = "P";
            $grille[$l][$c+4] = "P";
        }
        else{
            echo "vous ne pouvez pas placer votre bateau ici\n";
        }
    }
    elseif($position == "n"){
        if($grille[$l][$c] == "." and $grille[$l+1][$c] == "." and $grille[$l+2][$c] == "." and $grille[$l+3][$c] == "." and $grille[$l+4][$c] == "."){
            $grille[$l][$c] = "H";
            $grille[$l+1][$c] = "P";
            $grille[$l+2][$c] = "P";
            $grille[$l+3][$c] = "P";
            $grille[$l+4][$c] = "P";
        }
        else{
            echo "vous ne pouvez pas placer votre bateau ici\n";
        }
    }
}

?>