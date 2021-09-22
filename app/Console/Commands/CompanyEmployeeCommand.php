<?php

namespace App\Console\Commands;

use App\Services\EmployeeService;
use Illuminate\Console\Command;

class CompanyEmployeeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'company:employee {position}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show employee position skills';

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
        $skills = $this->employeeService->getEmployeeSkills($position);

        if (empty($skills)) {
            $this->info("Our company doesn't have position '$position'");
            return 0;
        }

        foreach ($skills as $skill) {
            $this->line(" - $skill");
        }

        return 0;
    }
}
