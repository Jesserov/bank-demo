<?php

class BankAccount
{
    protected $accountNumber;
    protected $balance;
    protected $bank;

    public function __construct($accountNumber, $bank, $initialBalance = 0)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
        $this->bank = $bank;
    }


    public function deposit($amount)
    {
        $this->balance += $amount;
        echo "Deposited N{$amount}, New Balance: N{$this->balance}";
        echo "<br>";
    }

    public function withdraw($amount)
    {
        if ($amount > $this->balance) {
            echo "Insufficient funds.";
            echo "<br>";
        } else {
            $this->balance -= $amount;
            echo "withdrew N{$amount}, New Balance: N{$this->balance}";
        }
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function showDetails()
    {
        echo "Account: {$this->accountNumber} | Balance: N{$this->balance}";
        echo "<br>";
    }
}

