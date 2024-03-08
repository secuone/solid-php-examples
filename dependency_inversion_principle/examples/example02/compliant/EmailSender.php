<?php

/**
 * Class responsible for sending emails.
 */
final class EmailSender implements EmailSenderInterface {
    /**
     * Sends an email.
     *
     * @param EmailInterface $email The email to be sent.
     * @return void
     */
    public function send(EmailInterface $email): void {
        // Logic for sending the email
    }
}
