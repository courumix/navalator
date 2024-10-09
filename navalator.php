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
    $grille[$l][$c]=1;
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

#$grilleJ1 = initialisegrille();
#affichetab($grilleJ1, 10, 10);
#positionnetorpilleur($grilleJ1);
#affichetab($grilleJ1,10 ,10);

?>