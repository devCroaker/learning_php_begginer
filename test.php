<?php
function fibs_fizz_buzz($n) {
    $sequence = array();
    for ($i = 0; $i < $n; $i++) {
        switch ($i) {
            case 0:
            case 1:
                $sequence[$i] = 1;
                break;
            default:
                $sequence[$i] = $sequence[$i-1] + $sequence[$i-2];
        }
    }
    
    foreach ($sequence as $s => $v) {
        if (($sequence[$s] % 3 == 0) and ($sequence[$s] % 5 == 0)) {
            $sequence[$s] = 'FizzBuzz';
        } elseif ($sequence[$s] % 3 == 0) {
            $sequence[$s] = 'Fizz';
        } elseif ($sequence[$s] % 5 == 0) {
            $sequence[$s] = 'Buzz';
        }
    }
    return $sequence;
}

print_r(fibs_fizz_buzz(5));

?>