<?php
// Ecrire la fonction getLike() qui prend en paramètre un array et qui return une string
function getLike(array $array): string {
    if(count($array) === 0){
        return 'Soyez le premier à aimer cette publication';
    } elseif(count($array) === 1){
        return $array[0]. ' aime cette publication '; 
    } elseif(count($array) === 2){
        return $array[0] . ' et ' . $array[1] . ' aiment cette publication '; 
    } elseif(count($array) > 2) {
        $random = array_rand($array);
        return $array[$random] .' et ' . (count($array) -1) . " autres personnes ont aimé cette publication.";
    } 
}
// Créer la data (le array) qui permet de tester la méthode (de 0 à X users): 
$users = ['Vivi', 'Elvina', 'Robin','Paul', 'Paul', 'Tony', 'Jenny'];  // & -> SELECT * FROM user; array[]
// Tester la fonction / la méthode : 
echo getLike($users); 
