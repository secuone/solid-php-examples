<?php

/**
 * Interface representing an email sender.
 */
interface EmailSenderInterface
{
    public function send(EmailInterface $email): void;
}
