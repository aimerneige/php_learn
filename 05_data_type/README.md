# Data Type

## Type

1. int / integer
2. float / double
3. string
4. bool / boolean
5. object
6. array
7. resource
8. NULL

### int / integer

```php
$a = 110b;  // BIN
$a = 0120;  // OCT
$a = 120;   // DEC
$a = 0x120; // HEX
```

> On default, php will convert all of the number into DEC.

```php
decbin(); // DEX to BIN
dechex(); // DEC tO HEX
dechex(); // DEC to HEX
bindec(); // BIN to DCE
// more like these
```

### float / double

```php
$num = 3.14;
$num = 1.24e10;  // science
```

```php
$num_1 = 0.7;
$num_2 = 2.1;
$num_3 = $num_2 / 3;
var_dump($num_3 == $num_1); // bool(false)
```

### bool / boolean

```php
$b_1 = true;
$b_2 = true;
```

```php
empty(); // weather the data is null
isset(); // weather the data exist
```

## Convert

1. Auto convert
2. Force convert

```php
$a = 'abc123.1.1';
$b = '123.1abc.1';
echo $a + $b; // auto convert
```

```php
$a = 'abc123.1.1';
$b = '123.1abc.1';
echo (float)$a; // force convert
echo (float)$b; // force convert
```

## Type Check

```php
$var_a = 12;
var_dump(is_int($var_a));    // bool(true)
var_dump(is_string($var_a)); // bool(false)
```

## Get Type

```php
gettype($var_name);
```

## Set Type

```php
settype($var_name, type);
```

`settype` will change the data, but for the force convert, it will just copy the value and output the changed result and will not change the var itself.

```php
$num = 3.14;
echo (int)$num;
echo gettype($num);
settype($num, int);
echo $num;
echo gettype($num);
```
