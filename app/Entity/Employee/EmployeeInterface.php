<?php

namespace App\Entity\Employee;

interface EmployeeInterface
{
    public static function getSkills(): array;
    public static function can(string $skill): bool;
}
