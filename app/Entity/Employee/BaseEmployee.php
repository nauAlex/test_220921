<?php

namespace App\Entity\Employee;

abstract class BaseEmployee implements EmployeeInterface
{
    protected static $skills;

    public static function getSkills(): array
    {
        return static::$skills;
    }

    public static function can(string $skill): bool
    {
        return \in_array($skill, static::$skills);
    }
}
