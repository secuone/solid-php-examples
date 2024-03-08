<?php

class CreditCardPaymentGateway implements CreditCardProcessor
{
    public function processCreditCardPayment($amount, $creditCardNumber, $expirationDate, $cvv)
    {
        echo "Processing credit card payment of $amount\n";
    }
}
