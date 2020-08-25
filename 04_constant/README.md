# Constant

## Define

### use function

```php
define('PI', 3.1415926535);
```

### use const

> You can use this after php `5.3`.

```php
const PI 3.1415926535;
```

## Notice

1. Don't use `$`. If you use `$`, it means for variable.
2. Must use **letter**, **number** and **underscore "_"**. But the number can't be at the first.
3. Always use Upper Letter.
4. `define` and `const` are not same and has difference on access permission.
5. On default, the `case_insensitive` are false.
6. You can use some special name with `define`. But it will need different way to access.

## Special Name

```php
define('-_-', 'what the fuck of this?'); // right
// const -_- = 'what the fuck of this?'; // error
// echo -_-; // error
echo constant('-_-');
```

## Access

```php
const PI 3.1415926535;
echo PI;
```

## Delete

You can't delete a constant.

## System Constant

```php
PHP_VERSION;
PHP_INT_SIZE;
PHP_INT_MAX;
__DIR__;
__FILE__;
__LINE__;
__NAMESPACE__;
__CLASS__;
__METHOD__;
```
