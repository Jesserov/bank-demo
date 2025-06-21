<?php

class SavingsAccount extends BankAccount
{
    private $interestRate;

    public function __construct($accountNumber, $bank, $initialBalance, $interestRate)
    {
        parent::__construct($accountNumber, $bank, $initialBalance);
        $this->interestRate = $interestRate;
    }

    public function applyInterest()
    {
        $interest = $this->balance * $this->interestRate;
        $this->balance += $interest;
        echo "interest applied: N{$interest}, New Balance: N($this->balance}.";
    }

    public function showDetails()
    {
        echo "Savings Account: {$this->accountNumber} | Balance: N($this->balance} | Interest{$this->interestRate}.";
    }
}