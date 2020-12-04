<?php
    /**
     * Pour remplacer une phrase par du leet speak dans un fichier php il faut la placer 
     * dans une variable $mot et faire include("leet.php"); et c'est magique ;)
     */
    $mot = strtolower($mot);
    $leet = "";
    $dico = ["a"=> "@", "b"=> "]3", "c"=>"<", "d"=>"[)", "e"=>"3", "f"=> "|=", "g"=>"(_+",
    "h"=>"|-|", "i"=>"!", "j"=>"_/", "k"=>"|<", "l"=>"1", "m"=>"|\/|", "n"=>"|\|", "o"=>"0",
    "p"=>"|*", "q"=>"0_", "r"=>"|2", "s"=>"5", "t"=>"7", "u"=>"|_|", "v"=>"\/","w"=>"\x/", "x"=>"><",
    "y"=>"'/", "z"=>"2"];
    for($i = 0; $i<strlen($mot); $i++){
        if (isset($dico[$mot{$i}])) {
            $leet = $leet.$dico[$mot{$i}];
        }
        else {
            $leet= $leet.$mot{$i};
        }
    }
    echo $leet;
?>
