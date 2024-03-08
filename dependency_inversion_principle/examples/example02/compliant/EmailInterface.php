<?php

interface EmailInterface
{
    public function getTo(): string;
    public function getSubject(): string;
    public function getMessage(): string;
}