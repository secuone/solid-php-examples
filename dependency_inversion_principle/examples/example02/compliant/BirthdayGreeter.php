<?php

final class BirthdayGreeter
{
    private $employeeRepository;
    private $clock;
    private $emailSender;

    public function __construct(EmployeeRepositoryInterface $employeeRepository, ClockInterface $clock, EmailSenderInterface $emailSender)
    {
        $this->employeeRepository = $employeeRepository;
        $this->clock = $clock;
        $this->emailSender = $emailSender;
    }

    public function sendGreetings(): void {
        $today = $this->clock->monthDay();
        $employees = $this->employeeRepository->findEmployeesBornOn($today);
        
        foreach ($employees as $employee) {
            $email = $this->emailFor($employee);
            $this->emailSender->send($email);
        }
    }

    private function emailFor(Employee $employee): EmailInterface {
        $message = sprintf("Happy birthday, dear %s!", $employee->getFirstName());
        return $this->emailFactory->createEmail($employee->getEmail(), "Happy birthday!", $message);
    }
}