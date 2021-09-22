<?php

namespace App\Entity\Employee;

use App\Entity\Skill\Skill;

class Programmer extends BaseEmployee
{
    protected static $skills = [
        Skill::WRITE_CODE,
        Skill::TEST_CODE,
        Skill::COMMUNICATE_WITH_MANAGER
    ];
}
