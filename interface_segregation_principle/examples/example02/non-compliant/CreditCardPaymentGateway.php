<?php

final class CreditCardPaymentGateway implements PaymentProcessor
{
    public function processCreditCardPayment($amount, $creditCardNumber, $expirationDate, $cvv)
    {
        echo "Processing Credit Card payment of $amount\n";
    }

    public function processPayPalPayment($amount, $email, $password)
    {
        throw new Exception('Not implemented');
    }
}
