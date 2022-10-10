<?php

$fruits = ["りんご" => 300, "みかん" => 150, "もも" => 3000];
$f_kosu = [3,4,1];


function goukei($name,$tanka, $kosu) {

    $goukei = $tanka*$kosu;
    return $name."は".$goukei."です。";
}


$i = 0;

foreach ($fruits as $key => $value) {

    echo goukei($key,$value,$f_kosu[$i]);
    echo'<br>';
    $i++;
}


?>