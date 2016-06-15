<?php
function find_answer($a, $b, $c){
    $d = ($b * $b) - (4 * $a * $c);
    if($d > 0) {
        $x1 = (-$b + sqrt($d))/(2 * $a);
        $x2 = (-$b - sqrt($d))/(2 * $a);
        echo "Если дискриминант больше нуля, то X1=".$x1.", X2=".$x2;
    }
    elseif($d == 0){
        $x =(-$b + sqrt($d))/(2 * $a);
        echo "Если дискриминант равен нулю, то X=".$x;
    }
    else {
        echo "Дискриминант меньше нуля, корней нет";    
    }
}
$s = find_answer(0, 0, 0);
echo $s;
?>