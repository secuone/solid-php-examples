<?php

class EmployeeRepository {
    private $employees = [];

    public function findEmployeesBornOn($date)
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
