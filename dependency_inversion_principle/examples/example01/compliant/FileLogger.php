<?php 

// Concrete implementation of LoggerInterface for logging messages to a file
class FileLogger implements LoggerInterface
{
    public function log($message)
    {
        // Implementation for logging messages to a file
        echo "Logging message to file: $message\n";
    }
}
