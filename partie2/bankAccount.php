<?php

class BankAccount {

    private $holder;
    private $sold;
    private $interestRate;
    private $currency;

    public function setHolder($newHolder) {
        $this->holder = $newHolder;
    }

    public function setSold($newSold) {
        $this->sold = $newSold;
    }

    public function setInterestRate($newInterestRate) {
        $this->interestRate = $newInterestRate;
    }

    public function setCurrency($newCurrency) {
        $this->currency = $newCurrency;
    }

    public function credit($amount) {
        $this->sold = $this->sold + 100;
    }

    public function debit($amount) {
        $this->sold = $this->sold - 10;
    }

    public function getHolder() {
        return $this->holder;
    }

    public function getSold() {
        return $this->sold;
    }

    public function getInterestRate() {
        return $this->interestRate;
    }
    
    public function getCurrency() {
        return $this->currency;
    }
}

$bankAccount = new BankAccount();
$bankAccount->setHolder('Patrick Sohyer');
$bankAccount->setSold(5000);
$bankAccount->setInterestRate(10);
$bankAccount->setCurrency('€');
?>

<p>Le propriétaire du compte est <?= $bankAccount->getHolder(); ?>, il possère un taux d'intérêt de <?= $bankAccount->getInterestRate(); ?>%. Son compte en banque à un solde de <?= $bankAccount->getSold(); ?><?= $bankAccount->getCurrency(); ?>!</p>
