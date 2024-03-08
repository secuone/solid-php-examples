<?php

interface PaymentProcessor 
{
    public function processCreditCardPayment($amount, $creditCardNumber, $expirationDate, $cvv);
    public function processPayPalPayment($amount, $email, $password);
}
