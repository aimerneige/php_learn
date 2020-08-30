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

## Operator

- Arithmetic operators
- Assignment operators
- Comparison operators
- Increment/Decrement operators
- Logical operators
- String operators
- Array operators
- Conditional assignment operators
- Bitwise Operators

### Arithmetic Operators

| operator | Name           | Example     | Result                                  |
| -------- | -------------- | ----------- | --------------------------------------- |
| +        | Addition       | `$x + $y;`  | Sum of $x and $y                        |
| -        | Subtraction    | `$x - $y;`  | Difference of $x and $y                 |
| \*       | Multiplication | `$x * $y;`  | Product of $x and $y                    |
| /        | Division       | `$x / $y;`  | Quotient of $x and $y                   |
| %        | Modulus        | `$x % $y;`  | Remainder of $x divided by $y           |
| \*\*     | Exponentiation | `$x ** $y;` | Result of raising $x to the $y'th power |

### Assignment Operators

| operator | Same to    | Description                                                           |
| -------- | ---------- | --------------------------------------------------------------------- |
| x = y    | x = y      | The left operand gets set to the value of the expression on the right |
| x += y   | x = x + y  | Addition                                                              |
| x -= y   | x = x - y  | Subtraction                                                           |
| x \*= y  | x = x \* y | Multiplication                                                        |
| x /= y   | x = x / y  | Division                                                              |
| x %= y   | x = x % y  | Modulus                                                               |

### Comparison Operators

| operator | Name                     | Example      | Result                                                                                                                                            |
| -------- | ------------------------ | ------------ | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| ==       | Equal                    | `$x == $y;`  | Returns true if $x is equal to $y                                                                                                                 |
| ===      | Identical                | `$x === $y;` | Returns true if $x is equal to $y, and they are of the same type                                                                                  |
| !=       | Not equal                | `$x != $y`   | Returns true if $x is not equal to $y                                                                                                             |
| <>       | Not equal                | `$x <> $y;`  | Returns true if $x is not equal to $y                                                                                                             |
| !==      | Not identical            | `$x !== $y;` | Returns true if $x is not equal to $y, or they are not of the same type                                                                           |
| >        | Greater than             | `$x > $y;`   | Returns true if $x is greater than $y                                                                                                             |
| <        | Less than                | `$x < $y;`   | Returns true if $x is less than $y                                                                                                                |
| >=       | Greater than or equal to | `$x >= $y;`  | Returns true if $x is greater than or equal to $y                                                                                                 |
| <=       | Less than or equal to    | `$x <= $y;`  | Returns true if $x is less than or equal to $y                                                                                                    |
| <=>      | Spaceship                | `$x <=> $y;` | Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7. |

```php
$a = '123';
$b = 123;
var_dump($a == $b);   // bool(true)
var_dump($a === $b);  // bool(false)
```

### Increment / Decrement Operators

| Operator | Name           | Description                           |
| -------- | -------------- | ------------------------------------- |
| ++\$x    | Pre-increment  | Increments $x by one, then returns $x |
| \$x++    | Post-increment | Returns $x, then increments $x by one |
| --\$x    | Pre-decrement  | Decrements $x by one, then returns $x |
| \$x--    | Post-decrement | Returns $x, then decrements $x by one |

### Logical Operators

| Operator | Name | Example      | Result                                        |
| -------- | ---- | ------------ | --------------------------------------------- |
| and      | And  | `$x and $y;` | True if both $x and $y are true               |
| or       | Or   | `$x or $y;`  | True if either $x or $y is true               |
| xor      | Xor  | `$x xor $y;` | True if either $x or $y is true, but not both |
| &&       | And  | `$x && $y;`  | True if both $x and $y are true               |
| \|\|     | Or   | `$x || $y;`  | True if either $x or $y is true               |
| !        | Not  | `!$x;`       | True if \$x is not true                       |

### String Operation

| Operator | Name                     | Example           | Result                           |
| -------- | ------------------------ | ----------------- | -------------------------------- |
| .        | Concatenation            | `$txt1 . $txt2;`  | Concatenation of $txt1 and $txt2 |
| .=       | Concatenation assignment | `$txt1 .= $txt2;` | Appends $txt2 to $txt1           |

### Array Operators

| Operator | Name         | Example      | Result                                                                                          |
| -------- | ------------ | ------------ | ----------------------------------------------------------------------------------------------- |
| +        | Union        | `$x + $y;`   | Union of $x and $y                                                                              |
| ==       | Equality     | `$x == $y;`  | Returns true if $x and $y have the same key/value pairs                                         |
| ===      | Identity     | `$x === $y;` | Returns true if $x and $y have the same key/value pairs in the same order and of the same types |
| !=       | Inequality   | `$x != $y;`  | Returns true if $x is not equal to $y                                                           |
| <>       | Inequality   | `$x <> $y;`  | Returns true if $x is not equal to $y                                                           |
| !==      | Non-identity | `$x !== $y;` | Returns true if $x is not identical to $y                                                       |

### Conditional Assignment Operators

| Operator | Name            | Example                       | Result                                                                                                                                                                  |
| -------- | --------------- | ----------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| ?:       | Ternary         | `$x = expr1 ? expr2 : expr3;` | Returns the value of $x. The value of $x is expr2 if expr1 = TRUE. The value of \$x is expr3 if expr1 = FALSE                                                           |
| ??       | Null coalescing | `$x = expr1 ?? expr2;`        | Returns the value of $x. The value of $x is expr1 if expr1 exists, and is not NULL. If expr1 does not exist, or is NULL, the value of \$x is expr2. Introduced in PHP 7 |

```php
$a = 12;
$b = 0;
@($a / $b); // will not show the error message
```

### Bitwise Operators

| Operator | Name               | Example     | Result                                                                        |
| -------- | ------------------ | ----------- | ----------------------------------------------------------------------------- |
| &        | And                | `$a & $b;`  | Bits that are set in both $a and $b are set.                                  |
| \|       | Or (inclusive or)  | `$a | $b;`  | Bits that are set in either $a or $b are set.                                 |
| ^        | Xor (exclusive or) | `$a ^ $b;`  | Bits that are set in $a or $b but not both are set.                           |
| ~        | Not                | `~ $a;`     | Bits that are set in \$a are not set, and vice versa.                         |
| <<       | Shift left         | `$a << $b;` | Shift the bits of $a $b steps to the left (each step means "multiply by two") |
| >>       | Shift right        | `$a >> $b;` | Shift the bits of $a $b steps to the right (each step means "divide by two")  |
