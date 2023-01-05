<?php

class CurrencyController
{

    public function getAllCurrencies()
    {
        $currenies = Currency::getAll();
        return $currenies;
    }
}
