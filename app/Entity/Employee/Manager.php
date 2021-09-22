<?php

namespace App\Entity\Employee;

use App\Entity\Skill\Skill;

class Manager extends BaseEmployee
{
    protected static $skills = [
        Skill::CREATE_TASKS
    ];
}
