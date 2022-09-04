<?php

for($i=1; $i <=100; $i++) {

    $txt = $i;

    if($i%3 === 0 && ($i%5 === 0)) {

        $txt = "FizzBuzz!!";

    }

    else if ($i%3 === 0) {

        $txt = "Fizz!";
            
    }
    else if ($i%5 === 0) {

        $txt = "Buzz!";
    }

    echo $txt;
    echo '<br>';

}


?>