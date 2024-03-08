<?php

interface PayPalProcessor
{
    public function processPayPalPayment($amount, $email, $password);
}
