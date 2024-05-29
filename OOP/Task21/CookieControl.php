<?php

class CookieControl
{
    public static function setCookie(string $cookie, string $value, string $path, string $domain, bool $security): void
    {
        setcookie($cookie, $value, time() + 3600, $path, $domain, $security);
    }

    public static function getCookie(string $cookie): ?string
    {
        return $_COOKIE[$cookie] ?? null;


    }

    public static function deleteCookie(string $cookie): void
    {
        if (!isset($_COOKIE[$cookie])) {
            return;
        } else {
            setCookie($cookie, '', time() - 3600);
        }


    }

    public static function isCookiesSet(string $cookie): bool
    {
        return isset($_COOKIE[$cookie]);


    }
}