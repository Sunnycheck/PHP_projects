<?php

class BankAccount
{
    private string $accountNumber;
    private int $balance;

    public function __construct(string $accountNumber, int $balance = 0)
    {
        $this->setAccountNumber($accountNumber);
        $this->setBalance($balance);
    }

    /**
     * @param string $accountNumber
     */
    public function setAccountNumber(string $accountNumber): void
    {
        if (strlen($accountNumber) < 6 || strlen($accountNumber) > 12) {
            throw new Exception("Account number is invalid");
        }
        $this->accountNumber = $accountNumber;
    }

    /**
     * @param int $balance
     */
    public function setBalance(int $balance): void
    {
        if ($balance < 0) {
            throw new Exception("Balance can't be negative");
        }
        $this->balance = $balance;
    }

    /**
     * @return string
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    /**
     * @return int
     */
    public function getBalance(): int
    {
        return $this->balance;
    }

    public function addFunds(int $amount): void
    {
        if ($amount <= 0) {
            throw new Exception("Invalid value to add funds");
        }
        $this->balance += $amount;
    }

    public function withdrawFunds(int $request): void
    {
        if ($request <= 0) {
            throw new Exception("Please, enter valid amount");
        }
        if ($request > $this->balance) {
            throw new Exception("Insufficient funds");
        }
        $this->balance -= $request;
    }


}