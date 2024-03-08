<?php

class BirthdayGreeter
{
    private $employeeRepository;
    private $clock;

    public function __construct(EmployeeRepository $employeeRepository, Clock $clock) {
        $this->employeeRepository = $employeeRepository;
        $this->clock = $clock;
    }

    public function sendGreetings()
    {
        $today = $this->clock->monthDay();
        $employees = $this->employeeRepository->findEmployeesBornOn($today);
        
        foreach ($employees as $employee)
        {
            $email = $this->emailFor($employee);
            (new EmailSender())->send($email);
        }
    }

    private function emailFor(Employee $employee)
    {
        $message = sprintf("Happy birthday, dear %s!", $employee->getFirstName());
        return new Email($employee->getEmail(), "Happy birthday!", $message);
    }
}
