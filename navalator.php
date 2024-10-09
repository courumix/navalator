<?php
function affichetab($tab,$m,$n){
    for($i=0;$i<$m;$i++){
        for($j=0;$j<$n;$j++){
            echo $tab[$i][$j]." ";
        }       
    echo "\n";
    }
    echo "------------\n";
}

function initialisegrille(){
    for($i=0;$i<10;$i++){
        for($j=0;$j<10;$j++){
            $grille[$i][$j]=".";
        }
    }
    return $grille;
}

function tire($l,$c,&$grille){
    if($grille[$l][$c] == "H" or "T" or "C" or "c" or "P"){
        echo "Toucher";
        $grille[$l][$c] = "X";
    }
    elseif($grille[$l][$c] != "H" or "T" or "C" or "c" or "P"){
        echo "Plouf";
        $grille[$l][$c] = "O";
    }
}

function positionnetorpilleur(&$grille){
    $l = (int)readline("Sur quelle ligne voulez vous positionner le torpilleur ? : ");
    $c = (int)readline("Sur quelle colonne voulez vous positionner le torpilleur ? : ");
    $position = readline("voulez-vous postionner le torpilleur en horizontal ? (o/n) : ");
    if($position == "o"){
        if($grille[$l][$c] == "." and $grille[$l][$c+1] == "."){
            $grille[$l][$c] = "H";
            $grille[$l][$c+1] = "T";
        }
        else{
            echo "vous ne pouvez pas placer votre bateau ici\n";
        }
    }
    elseif($position == "n"){
        if($grille[$l][$c] == "." and $grille[$l+1][$c] == "."){
            $grille[$l][$c] = "H";
            $grille[$l+1][$c] = "T";
        }
        else{
            echo "vous ne pouvez pas placer votre bateau ici\n";
        }
    }
}

function positionnecontretorpilleur(&$grille){
    $l = (int)readline("Sur quelle ligne voulez vous positionner le contre-torpilleur ? : ");
    $c = (int)readline("Sur quelle colonne voulez vous positionner le contre-torpilleur ? : ");
    $position = readline("voulez-vous postionner le contre-torpilleur en horizontal ? (o/n) : ");
    if($position == "o"){
        if($grille[$l][$c] == "." and $grille[$l][$c+1] == "." and $grille[$l][$c+2] == "."){
            $grille[$l][$c] = "H";
            $grille[$l][$c+1] = "c";
            $grille[$l][$c+2] = "c";
        }
        else{
            echo "vous ne pouvez pas placer votre bateau ici\n";
        }
    }
    elseif($position == "n"){
        if($grille[$l][$c] == "." and $grille[$l+1][$c] == "." and $grille[$l+2][$c] == "."){
            $grille[$l][$c] = "H";
            $grille[$l+1][$c] = "c";
            $grille[$l+2][$c] = "c";
        }
        else{
            echo "vous ne pouvez pas placer votre bateau ici\n";
        }
    }
}

function positionnecroiseur(&$grille){
    $l = (int)readline("Sur quelle ligne voulez vous positionner le croiseur ? : ");
    $c = (int)readline("Sur quelle colonne voulez vous positionner le croiseur ? : ");
    $position = readline("voulez-vous postionner le croiseur en horizontal ? (o/n) : ");
    if($position == "o"){
        if($grille[$l][$c] == "." and $grille[$l][$c+1] == "." and $grille[$l][$c+2] == "." and $grille[$l][$c+3] == "."){
            $grille[$l][$c] = "H";
            $grille[$l][$c+1] = "C";
            $grille[$l][$c+2] = "C";
            $grille[$l][$c+3] = "C";
        }
        else{
            echo "vous ne pouvez pas placer votre bateau ici\n";
        }
    }
    elseif($position == "n"){
        if($grille[$l][$c] == "." and $grille[$l+1][$c] == "." and $grille[$l+3][$c] == "." and $grille[$l+3][$c] == "."){
            $grille[$l][$c] = "H";
            $grille[$l+1][$c] = "C";
            $grille[$l+2][$c] = "C";
            $grille[$l+3][$c] = "C";
        }
        else{
            echo "vous ne pouvez pas placer votre bateau ici\n";
        }
    }
}

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

#$grilleJ1 = initialisegrille();
#affichetab($grilleJ1, 10, 10);
#positionnetorpilleur($grilleJ1);
#affichetab($grilleJ1,10 ,10);

?>