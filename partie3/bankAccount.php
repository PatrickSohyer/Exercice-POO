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
