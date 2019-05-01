<?php
$x = 1;


while ($x <= 100) {
    if ($x%3 == 0 and $x%5 ==0 ) {
        echo "$x: Fizz Buzz! <br/>";
    }

    elseif($x%3 == 0){
        echo "$x: Fizz! <br/>";
    }

    elseif ($x%5 == 0){
        echo "$x: Buzz! <br/>";
    }

    else
        echo "$x <br/>";

    $x++;
    
}

?>