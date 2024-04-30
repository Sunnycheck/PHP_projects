<?php
declare(strict_types=1);

require_once __DIR__ . "/BankAccount.php";

$accNumber = "UA1111111111";
$initBalance = 10;
// Object init
try {
    $account0 = new BankAccount($accNumber, $initBalance);
    echo $account0->getAccountNumber() . PHP_EOL;
    echo $account0->getBalance() . PHP_EOL;

} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
//Set or change account number
try {
    $account0->setAccountNumber("U");
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;

}
//Set or change balance
try {
    $account0->setBalance(-1);
    echo $account0->getBalance() . PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}

//Add funds
try {
    $account0->addFunds(0);
    echo $account0->getBalance() . PHP_EOL;;
} catch (Exception $error) {
    echo $error->getMessage() . PHP_EOL;
}

//Withdraw funds
$request = 8;
try {

    $account0->withdrawFunds($request);
    echo $account0->getBalance() . PHP_EOL;;
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}


//echo $account0->getBalance() . PHP_EOL;
//echo $account0->getAccountNumber() . PHP_EOL;