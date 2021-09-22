<?php

namespace App\Entity\Employee;

use App\Entity\Skill\Skill;

class Designer extends BaseEmployee
{
    protected static $skills = [
        Skill::DRAW,
        Skill::COMMUNICATE_WITH_MANAGER
    ];
}
