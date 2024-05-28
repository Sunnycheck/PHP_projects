<?php
require_once 'CookieControl.php';
try {
//    CookieControl::setCookie('name', 'John Doe');
//    CookieControl::setCookie('client', 'mozilla');
//
//
//
//    echo CookieControl::getCookie('name').PHP_EOL;
//    echo CookieControl::getCookie('client').PHP_EOL;

   CookieControl::deleteCookie('name');
    CookieControl::isCookiesSet('name');


} catch (Exception $e) {
    echo $e->getMessage();
}

