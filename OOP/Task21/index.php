<?php
require_once 'CookieControl.php';
try {
//CookieControl::setCookie('name', 'John Doe','/', 'localhost', 1);

//echo CookieControl::getCookie('name').PHP_EOL;
//    echo CookieControl::getCookie('client').PHP_EOL;

 CookieControl::deleteCookie('name');
   //echo CookieControl::isCookiesSet('client');


} catch (Exception $e) {
    echo $e->getMessage();
}

