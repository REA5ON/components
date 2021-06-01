<?php

class Flash {

    public static function flashMessage($name, $string = '') {
        if(isset($_SESSION[$name]) && $_SESSION[$name] !== '') {
            $session = $_SESSION[$name];
            unset($_SESSION[$name]);
            echo $session;
        } else {
            $_SESSION[$name] = $string;
        }
    }
}
