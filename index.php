<?php

require_once 'src/bankaccount.php';
require_once 'src/savingsaccount.php';
require_once 'src/currentaccount.php';

$accountOne = new SavingsAccount("0114116070", "GTB", 100000, 0.05);
$accountTwo = new CurrentAccount("0229399139", "Access Bank", 5000, 2000);

$accountOne->deposit(2000);
$accountOne->applyInterest();
$accountOne->showDetails();

echo "<br>";

$accountTwo->withdraw(6000);
echo "<br>";
$accountTwo->withdraw(2000);
echo "<br>";
$accountTwo->deposit(3000);
echo "<br>";
$accountTwo->showDetails();