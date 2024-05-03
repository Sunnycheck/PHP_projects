<?php
declare(strict_types=1);

require_once __DIR__ . "/BankAccount.php";

$accNumber = "UA1111111111";
$initBalance = 10;

$request = 8;
// Object init

//(можна писати весь код в одному try, не обов'язоково нову конструкцію робити для кожної команди)
try {
    $account0 = new BankAccount($accNumber, $initBalance);
    echo $account0->getAccountNumber() . PHP_EOL;
    echo $account0->getBalance() . PHP_EOL;

    $account0->setAccountNumber("Uasd3434535");

    $account0->setBalance(5);
    echo $account0->getBalance() . PHP_EOL;

    $account0->addFunds(10);
    echo $account0->getBalance() . PHP_EOL;

    $account0->withdrawFunds($request);
    echo $account0->getBalance() . PHP_EOL;;

} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
//Set or change account number
//try {
//
//} catch (Exception $e) {
//    echo $e->getMessage() . PHP_EOL;
//
//}
////Set or change balance
//try {
//
//} catch (Exception $e) {
//    echo $e->getMessage() . PHP_EOL;
//}
//
////Add funds
//try {
//
//} catch (Exception $error) {
//    echo $error->getMessage() . PHP_EOL;
//}
//
////Withdraw funds
//
//try {
//
//
//} catch (Exception $e) {
//    echo $e->getMessage() . PHP_EOL;
//}


//echo $account0->getBalance() . PHP_EOL;
//echo $account0->getAccountNumber() . PHP_EOL;