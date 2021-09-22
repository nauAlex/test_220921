<?php

namespace App\Entity\Employee;

use App\Entity\Skill\Skill;

class Tester extends BaseEmployee
{
    protected static $skills = [
        Skill::TEST_CODE,
        Skill::COMMUNICATE_WITH_MANAGER,
        Skill::CREATE_TASKS
    ];
}
