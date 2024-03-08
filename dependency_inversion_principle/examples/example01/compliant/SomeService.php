<?php

class SomeService {
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function doSomething()
    {
        // Perform some important operation
        $this->logger->log("Something important happened.");
    }
}
