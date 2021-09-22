<?php

namespace App\Console\Commands;

use App\Services\EmployeeService;
use Illuminate\Console\Command;

class EmployeeAbilityCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'employee:can {position} {skill}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verifies employee position ability to skill';

    /**
     * @var EmployeeService $employeeService
     */
    private $employeeService;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(EmployeeService $employeeService)
    {
        parent::__construct();

        $this->employeeService = $employeeService;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $position = $this->argument('position');
        $skill = $this->argument('skill');

        $this->info($this->employeeService->canEmployee($position, $skill) ? 'true' : 'false');

        return 0;
    }
}
