<?php
/** 
 * Permet de sécuriser une chaîne de caractères
 * @param $string
 * @return string 
 * */
function str_secur($str) {
    return trim (htmlspecialchars($str));
}
/** 
 * Debug plus lisible des différentes variables 
 * @param $var

*/


function debug($var){
    echo'<pre>';
    var_dump($var);
    echo '</pre>';
}