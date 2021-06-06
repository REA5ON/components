Flash
=
Installation:
-
>Copy Flash.php to folder with classes in your project

Usage:
-
+ Connect the session at the beginning of the file. 
+ The flashMessage method writes a message to the session if name and string was passed.
+ Display a message using the same flashMessage method 
if you pass the message name as an argument and if there is one in the session.

```php
class Flash {

    public static function flashMessage(string $name, string $string = '') {
        if(isset($_SESSION[$name]) && $_SESSION[$name] !== '') { //show message
            $session = $_SESSION[$name];
            unset($_SESSION[$name]);
            echo $session;
        } else {
            $_SESSION[$name] = $string; //writing message
        }
    }
}
```
If you want to set message 'Done':
-
```php
Flash::flashMessage('success', 'Done!'); //save to $_SESSION flash message ['name' => 'string'];

```
If want to check and return message:
-
```php
Flash::flashMessage('success'); //check $_SESSION for key 'success' and show value;
```

