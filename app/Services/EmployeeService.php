<?php

namespace App\Services;

use App\Entity\Employee\BaseEmployee;

class EmployeeService
{
    const CONSOLE_SIGNATURE_ENTITY = [
        'tester' => \App\Entity\Employee\Tester::class,
        'designer' => \App\Entity\Employee\Designer::class,
        'programmer' => \App\Entity\Employee\Programmer::class,
        'manager' => \App\Entity\Employee\Manager::class
    ];

    /**
     * @param string $position
     * @return array
     */
    public function getEmployeeSkills(string $position): array
    {
        if (empty(self::CONSOLE_SIGNATURE_ENTITY[$position])) {
            return [];
        }

        /**
         * @var BaseEmployee $entity
         */
        $entity = self::CONSOLE_SIGNATURE_ENTITY[$position];
        return $entity::getSkills();
    }

    /**
     * @param string $position
     * @param string $skill
     * @return bool
     */
    public function canEmployee(string $position, string $skill): bool
    {
        if (empty(self::CONSOLE_SIGNATURE_ENTITY[$position])) {
            return false;
        }

        /**
         * @var BaseEmployee $entity
         */
        $entity = self::CONSOLE_SIGNATURE_ENTITY[$position];
        return $entity::can($skill);
    }
}
