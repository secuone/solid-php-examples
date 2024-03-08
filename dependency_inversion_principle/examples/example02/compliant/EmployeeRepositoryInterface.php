<?php

/**
 * Interface representing an employee repository.
 */
interface EmployeeRepository
{
    public function findEmployeesBornOn(DateTimeInterface $date): array;
}