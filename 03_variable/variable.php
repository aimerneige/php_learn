<?php

    $var_1;

    $var_2 = 1;
    echo $var_2;

    $var_1 = 3;
    echo $var_1;

    unset($var_1);
    // echo $var_1; // error (Undefined variable)

    // $1_var; // error type of name.

    $a = 10;
    $b = $a;
    $b = 5;
    echo $a; // 10
    echo $b; // 5

    $c = 10;
    $d = &$c;
    $d = 5;
    echo $c; // 5
    echo $d; // 5

?>