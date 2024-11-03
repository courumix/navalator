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

function tire($l,$c,&$blindgrille, $grille, &$point){
        if($blindgrille[$l-1][$c-1] != "X" and $blindgrille[$l-1][$c-1] != "O"){
            if($grille[$l-1][$c-1] == "H" or $grille[$l-1][$c-1] == "T" or $grille[$l-1][$c-1] == "C" or $grille[$l-1][$c-1] == "c" or $grille[$l-1][$c-1] == "P"){
                echo "Toucher vous pouvez rejouer\n";
                $blindgrille[$l-1][$c-1] = "X";
                $point = $point + 1;
                return false;
            }
            else{
                echo "Plouf\n";
                $blindgrille[$l-1][$c-1] = "O";
                return true;
            }
        }
        else if($blindgrille[$l-1][$c-1] == "X" or $blindgrille[$l-1][$c-1] == "O"){
            echo "Vous ne pouvez pas tirer deux fois au même endroit\n";
            return false;
        }
}

function positionnetorpilleur(&$grille){
    $placé = false;
    while ($placé == false){
        $l = (int)readline("Sur quelle ligne voulez vous positionner le torpilleur ? : ") -1;
        $c = (int)readline("Sur quelle colonne voulez vous positionner le torpilleur ? : ") -1;
        $position = "none";
        while($position != "o" and $position != "n"){
            $position = readline("voulez-vous postionner le torpilleur en horizontal ? (o/n) : ");
            if($position != "o" and $position != "n"){
            echo"vous devez entrez o ou n \n";
            }
        }
        if($position == "o"){
            if($grille[$l][$c] == "." and $grille[$l][$c+1] == "."){
                $grille[$l][$c] = "H";
                $grille[$l][$c+1] = "T";
                $placé = true;
            }
            else{
                echo "vous ne pouvez pas placer votre bateau ici\n";
            }
        }
        elseif($position == "n"){
            if($grille[$l][$c] == "." and $grille[$l+1][$c] == "."){
                $grille[$l][$c] = "H";
                $grille[$l+1][$c] = "T";
                $placé = true;
            }
            else{
                echo "vous ne pouvez pas placer votre bateau ici\n";
            }
        }
    }
}

function positionnecontretorpilleur(&$grille){
    $placé = false;
    while($placé == false){
    $l = (int)readline("Sur quelle ligne voulez vous positionner le contre-torpilleur ? : ") -1;
    $c = (int)readline("Sur quelle colonne voulez vous positionner le contre-torpilleur ? : ") -1;
    $position = "none";
    while($position != "o" and $position != "n"){
        $position = readline("voulez-vous postionner le torpilleur en horizontal ? (o/n) : ");
        if($position != "o" and $position != "n"){
        echo"vous devez entrez o ou n\n";
        }
    }
    if($position == "o"){
        if($grille[$l][$c] == "." and $grille[$l][$c+1] == "." and $grille[$l][$c+2] == "."){
            $grille[$l][$c] = "H";
            $grille[$l][$c+1] = "c";
            $grille[$l][$c+2] = "c";
            $placé = true;
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
            $placé = true;
        }
        else{
            echo "vous ne pouvez pas placer votre bateau ici\n";
        }
    }
    }
}

function positionnecroiseur(&$grille){
    $placé = false;
    while($placé == false){
    $l = (int)readline("Sur quelle ligne voulez vous positionner le croiseur ? : ") -1;
    $c = (int)readline("Sur quelle colonne voulez vous positionner le croiseur ? : ") -1;
    $position = "none";
    while($position != "o" and $position != "n"){
        $position = readline("voulez-vous postionner le torpilleur en horizontal ? (o/n) : ");
        if($position != "o" and $position != "n"){
        echo"vous devez entrez o ou n\n";
        }
    }
    if($position == "o"){
        if($grille[$l][$c] == "." and $grille[$l][$c+1] == "." and $grille[$l][$c+2] == "." and $grille[$l][$c+3] == "."){
            $grille[$l][$c] = "H";
            $grille[$l][$c+1] = "C";
            $grille[$l][$c+2] = "C";
            $grille[$l][$c+3] = "C";
            $placé = true;
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
            $placé = true;
        }
        else{
            echo "vous ne pouvez pas placer votre bateau ici\n";
        }
    }
    }
}

function positionneporteavion(&$grille){
    $placé = false;
    while($placé == false){
    $l = (int)readline("Sur quelle ligne voulez vous positionner le porte avion ? : ") -1;
    $c = (int)readline("Sur quelle colonne voulez vous positionner le porte avion ? : ") -1;
    $position = "none";
    while($position != "o" and $position != "n"){
        $position = readline("voulez-vous postionner le torpilleur en horizontal ? (o/n) : ");
        if($position != "o" and $position != "n"){
        echo"vous devez entrez o ou n\n";
        }
    }
    if($position == "o"){
        if($grille[$l][$c] == "." and $grille[$l][$c+1] == "." and $grille[$l][$c+2] == "." and $grille[$l][$c+3] == "." and $grille[$l][$c+4] == "."){
            $grille[$l][$c] = "H";
            $grille[$l][$c+1] = "P";
            $grille[$l][$c+2] = "P";
            $grille[$l][$c+3] = "P";
            $grille[$l][$c+4] = "P";
            $placé = true;
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
            $placé = true;
        }
        else{
            echo "vous ne pouvez pas placer votre bateau ici\n";
        }
    }
    }
}

$jeu = true;

while ($jeu){
    $TabJ1 = initialisegrille();
    $TabJ2 = initialisegrille();
    $BlindTabJ1 = initialisegrille();
    $BlindTabJ2 = initialisegrille();
    $pointJ1 = 0;
    $pointJ2 = 0;
    echo"voici le tableau du J1 : \n";
    affichetab($TabJ1,10,10);
    echo"voici le tableu du J2 : \n";
    affichetab($TabJ2,10,10);
    readline("J1 tapez sur entrez quand vous êtes prêts à installer vos bateaux (J2 ne doit pas regarder) : \n");
    positionnetorpilleur($TabJ1);
    echo"voici votre plan de jeu actuel : \n";
    affichetab($TabJ1,10,10);
    positionnecontretorpilleur($TabJ1);
    echo"voici votre plan de jeu actuel : \n";
    affichetab($TabJ1,10,10);
    positionnecontretorpilleur($TabJ1);
    echo"voici votre plan de jeu actuel : \n";
    affichetab($TabJ1,10,10);
    positionnecroiseur($TabJ1);
    echo"voici votre plan de jeu actuel : \n";
    affichetab($TabJ1,10,10);
    positionneporteavion($TabJ1);
    echo"voici votre plan de jeu actuel : \n";
    affichetab($TabJ1,10,10);
    readline("J1 tapez sur entrez pour laisser la place à J2 : \n");
    echo".\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n";
    readline("J2 tapez sur entrez quand vous êtes prêts à installer vos bateaux (J1 ne doit pas regarder) : \n");
    positionnetorpilleur($TabJ2);
    echo"voici votre plan de jeu actuel : \n";
    affichetab($TabJ2,10,10);
    positionnecontretorpilleur($TabJ2);
    echo"voici votre plan de jeu actuel : \n";
    affichetab($TabJ2,10,10);
    positionnecontretorpilleur($TabJ2);
    echo"voici votre plan de jeu actuel : \n";
    affichetab($TabJ2,10,10);
    positionnecroiseur($TabJ2);
    echo"voici votre plan de jeu actuel : \n";
    affichetab($TabJ2,10,10);
    positionneporteavion($TabJ2);
    echo"voici votre plan de jeu actuel : \n";
    affichetab($TabJ2,10,10);
    readline("J2 tapez sur entrez pour laisser la place à J1 : \n");
    echo".\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n";
    while($pointJ1 < 17 or $pointJ2 < 17){
        $verif = false;
        while ($verif != true){
            echo"voici le terrain de vôtre adversaire\n";
            affichetab($BlindTabJ2,10,10);
            echo"J1 à vous de tiré\n";
            $l = (int)readline("Sur quelle ligne voulez vous tiré ? : ");
            $c = (int)readline("Sur quelle colonne voulez vous tiré ? : ");
            if ($l < 1 or $l > 10){
                echo"la valeur n'est pas correct\n";
                $verif = false;
            }
            else{
                $verif = tire($l,$c,$BlindTabJ2,$TabJ2,$pointJ1);
            }
        }
        echo"voici le nouveau terrain de vôtre adversaire\n";
        affichetab($BlindTabJ2,10,10);
        if ($pointJ1 >= 17){
            break;
        }
        readline("J1 tapez sur entrez pour laisser la place à J2 : \n");
        echo".\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n";
        $verif = false;
        while ($verif != true){
            echo"voici le terrain de vôtre adversaire\n";
            affichetab($BlindTabJ1,10,10);
            echo"J2 à vous de tiré\n";
            $l = (int)readline("Sur quelle ligne voulez vous tiré ? : ");
            $c = (int)readline("Sur quelle colonne voulez vous tiré ? : ");
            if ($l < 1 or $l > 10){
                echo"la valeur n'est pas correct\n";
                $verif = false;
            }
            else{
                $verif = tire($l,$c,$BlindTabJ1,$TabJ1,$pointJ2);
            }
        }
        echo"voici le nouveau terrain de vôtre adversaire\n";
        affichetab($BlindTabJ1,10,10);
        if ($pointJ2 >= 17){
            break;
        }
        readline("J2 tapez sur entrez pour laisser la place à J1 : \n");
        echo".\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n.\n";
    }
    if($pointJ1 > $pointJ2){
        echo "le J1 à gagné";
    }
    else{
        echo "le J2 à gagné";
    }
    $jeu = false;
}

?>