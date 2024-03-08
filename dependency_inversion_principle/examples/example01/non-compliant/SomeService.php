<?php

class SomeService
{
    private $logger;

    public function __construct()
    {
        // Dependencia directa de la implementación concreta
        $this->logger = new FileLogger();
    }

    public function doSomething()
    {
        // Perform some important operation
        $this->logger->log("Something important happened.");
    }
}
