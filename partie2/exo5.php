<?php

class BankAccount {

    private $holder;
    private $sold;
    private $interestRate;
    private $currency;

    public function __construct($constructHolder, $constructSold, $constructInterestRate, $constructCurrency) {
        $this->holder = $constructHolder;
        $this->sold = $constructSold;
        $this->interestRate = $constructInterestRate;
        $this->currency = $constructCurrency;
    }

    public function credit($amount) {
        $this->sold = $this->sold + 1250;
    }

    public function debit($amount) {
        $this->sold = $this->sold - 500;
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

$construct = new BankAccount('Patrick Sohyer', 5000, 20, '€');

?>

<p>Le propriétaire du compte est <?= $construct->getHolder(); ?>, il possède un taux d'intérêt de <?= $construct->getInterestRate(); ?>%. Son compte en banque à un solde de <?= $construct->getSold(); ?><?= $construct->getCurrency(); ?>!</p>

