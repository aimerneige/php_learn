# Control Structures

## if

```php
if ($a > 12) {
    // do something when $a > 12
}
```

```php
if ($a > 12) {
    // do something when $a > 12
}
else {
    // do something when $a <= 12
}
```

```php
if ($a > 12) {
    // do something when $a > 12
}
else if ($a > 5) {
    // do something when $a > 5 and $a <= 12
}
else {
    // do something when $a <= 5
}
```

```php
if ($a > 12) {
    // do something when $a > 12
}
elseif ($a > 5) {
    // do something when $a > 5 and $a <= 12
}
else {
    // do something when $a <= 5
}
```

## switch

```php
switch ($a) {
    case 1:
        // do something when $a == 1
        break;
    case 2:
        // do something when $a == 2
        break;
    case 3:
        // do something when $a == 3
        break;
    case 4:
        // do something when $a == 4
        break;
    default:
        // do something when $a is not match all of above
        break;
}
```

## while

```php
$i = 1;
while ($i <= 10) {
    echo $i++;
}
```

```php
$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;
```

## do-while

```php
$i = 0;
do {
    echo $i;
} while ($i > 0);
```

## foreach

```php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
// $arr is now array(2, 4, 6, 8)
unset($value); // break the reference with the last element
```

## for

```php
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
```

```php
for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}
```

```php
$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}
```

```php
for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
```

## break

```php
$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
foreach ($arr as $val) {
    if ($val == 'stop') {
        break;    /* You could also write 'break 1;' here. */
    }
    echo "$val<br />\n";
}
```

```php
$i = 0;
while (++$i) {
    switch ($i) {
        case 5:
            echo "At 5<br />\n";
            break 1;  /* Exit only the switch. */
        case 10:
            echo "At 10; quitting<br />\n";
            break 2;  /* Exit the switch and the while. */
        default:
            break;
    }
}
```

## continue

```php
foreach ($arr as $key => $value) {
    if (!($key % 2)) { // skip even members
        continue;
    }
    do_something_odd($value);
}
```

```php
$i = 0;
while ($i++ < 5) {
    echo "Outer<br />\n";
    while (1) {
        echo "Middle<br />\n";
        while (1) {
            echo "Inner<br />\n";
            continue 3;
        }
        echo "This never gets output.<br />\n";
    }
    echo "Neither does this.<br />\n";
}
```
