<?php

class PayPalPaymentGateway implements PayPalProcessor
{
    public function processPayPalPayment($amount, $email, $password)
    {
        echo "Processing PayPal payment of $amount\n";
    }
}