<?php

final class EmailFactory implements EmailFactoryInterface
{
    private $email;

    public function __construct(EmailInterface $email)
    {
        $this->email = $email;
    }

    public function createEmail(string $to, string $subject, string $message): EmailInterface
    {
        return new $this->email($to, $subject, $message);
    }
}