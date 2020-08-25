# Variable

## Use

### Define

```php
$var_name;
```

### Assignment

```php
$var_name = 1;
```

### Access

```php
echo $var_name;
```

### Edit

```php
$var_name = 1;
```

### Delete

```php
unset($var_name);
```

## Name

1. Must started with `$`
2. Must use **letter**, **number** and **underscore "_"**. But the number can't be at the first.
3. You can use chinese character but **it is not recommend**.

```php
$var_001; // right
$_var; // right
$1var; // error
$中文; // right but not recommend
```

## System variable

```php
$_GET;
$_POST;
$_REQUEST;
$GLOBALS;
$_SERVER;
$_SESSION;
$_COOKIE;
$_ENV;
$_FILES;
```

## Variable variable

If a variable with the value of another variable. Just use `$$`.

As you have a variable `var_b`, and a variable `var_a`. The variable `var_a` has the value `'var_b'`, use `$$var_a` to access `var_b`;

```php
$var_a = 'var_b'
$var_b = 'I am fine.'

echo $$var_a; // You will get 'I am fine.'
```

## Pass Value

### pass by value

```php
$a = 10;
$b = $a;
$b = 5;
echo $a; // 10
echo $b; // 5
```

### pass by reference

```php
$a = 10;
$b = &$a;
$b = 5;
echo $a; // 5
echo $b; // 5
```

