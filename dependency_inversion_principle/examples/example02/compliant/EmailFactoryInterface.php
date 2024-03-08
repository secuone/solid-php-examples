<?php

interface EmailFactoryInterface
{
    public function createEmail(string $to, string $subject, string $message): EmailInterface;
}
