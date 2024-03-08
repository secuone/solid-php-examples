<?php

final class PaypalPaymentGateway implements PaymentProcessor
{
    public function processCreditCardPayment($amount, $creditCardNumber, $expirationDate, $cvv)
    {
        throw new Exception('Not implemented');
    }

    public function processPayPalPayment($amount, $email, $password)
    {
        echo "Processing PayPal payment of $amount\n";
    }
}
