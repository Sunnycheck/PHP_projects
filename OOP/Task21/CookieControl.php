<?php

class CookieControl
{
    public static function setCookie(string $cookie, string $value): void
    {
        setcookie($cookie, $value, time() + 3600, "/");
    }

    public static function getCookie(string $cookie): string
    {
        if (isset($_COOKIE[$cookie])) {
            return $_COOKIE[$cookie];
        }


        exit;
    }

    public static function deleteCookie(string $cookie): void
    {
        if (isset($_COOKIE[$cookie])) {
            setCookie($cookie,'', time()-3600, '/');
        }
    }

    public static function isCookiesSet(string $cookie): void
    {
        if(!isset($_COOKIE[$cookie])){
            throw new Exception("Cookie - /$cookie/ - not set");
        }
    }
}