Validate
=
Installation:
-
>Copy file Validate.php to folder with your classes
>
>Insert instance of databases in ```__construct(PDO $getInstance);```

Validation methods:
-
```php
/*
$source - input data
$items - array with validate setting
*/
check($source, $items[]);
```

```php
addError($error); // add error
```

```php
errors(); // get all errors
```

```php
passed(); // if you want to finish validation use passed()
```

You can use the existing cases or create new:
-
|Cases|Description|
  |:---|:----|
  | min | Check that a string has at least a certain number of characters |
  | max | Check that a string has at most a certain number of characters |
  | matches | Check that a string must be matches |
  | unique | Check that the given array contains unique values |
  | email | Check that a string is a valid e-mail address |
  