<?php

interface CreditCardProcessor
{
    public function processCreditCardPayment($amount, $creditCardNumber, $expirationDate, $cvv);
}
