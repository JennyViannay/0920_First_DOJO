<?php

// Ecrire la fonction getLike() qui prend en paramètre un array et qui return une string
function getLike($users) : String
{
    // RAPPEL : Les messages suivants doivent s'afficher 
    // selon s'il y a 0, 1, 2, ou supérieur à 2 users dans le tableaux d'entrée 
    // OK "Soyez le premier à aimer cette publication" = 0 
    // OK "Simon aime cette publication" = 1 
    // ---------------------------------------------------
    // "Simon et Arthur aiment cette publication" = 2 
    // "Simon et X autres personnes ont aimé cette publication." > 2 
    $nbUsers = count($users);
    if($nbUsers == 0) {
        return "Soyez le premier à aimer cette publication";
    }
    elseif($nbUsers == 1) {
        return  $users[0]." aime cette publication";
    }
    elseif($nbUsers == 2) {
        return  $users[0]. " et " .$users[1] ." aiment cette publication";
    }
    else {
        // array_rand($users) est égale à un index du tableau $users
        // écrire $users[array_rand($users)] revient au même que d'écrire $users[INDEX];
        return  $users[array_rand($users)]. " et " .($nbUsers - 1) ." aiment cette publication";
    }
}

$users = ['Sten','Sandrine','Lisa','Nico','Vara']; // Créer la data qui permet de tester la méthode

// Tester la fonction
echo getLike($users);
