<?php

/**
 * Class representing an employee repository.
 */
final class MemoryEmployeeRepository implements EmployeeRepositoryInterface
{
    private $employees = [];

    public function findEmployeesBornOn(DateTimeInterface $date): array
    {
        $employeesBornOnDate = [];
        foreach ($this->employees as $employee) {
            if ($employee->getBirthDate()->format('md') === $date->format('md')) {
                $employeesBornOnDate[] = $employee;
            }
        }
        return $employeesBornOnDate;
    }
}
