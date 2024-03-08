<?php

// Usage of SomeService class with a FileLogger instance
$fileLogger = new FileLogger();
$service = new SomeService($fileLogger);
$service->doSomething();
