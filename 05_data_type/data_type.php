<?php

    $a = 'abc123.1.1';
    $b = '123.1abc.1';
    echo $a + $b; // 123.1
    echo (float)$a; // 0
    echo (float)$b; // 123.1

    $var_a = 12;
    var_dump(is_int($var_a));    // bool(true)
    var_dump(is_string($var_a)); // bool(false)

    echo gettype($var_a); // integer

    $num = 3.14;
    echo (int)$num; // 3
    echo gettype($num); // double
    settype($num, int);
    echo $num; // 3
    echo gettype($num); // integer
    
?>