<?php

namespace App\Console\Commands\Tools;

use App\Console\Commands\Tools\Support\Reset\hasDbReseter;
use Illuminate\Console\Command;

class ResetCommand extends Command
{
   // use hasDbReseter;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mintreu-app:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('System Reset Started..');
        $this->clearAndOptimizeSystem();
        $this->clearAllRecords();
        $this->clearStorageAndTemp();
        $this->verifyCoreSystemFiles();
        $this->reInstallSystem();
        $this->info('System Reset Finish..');
        return true;
    }

    private function clearAndOptimizeSystem()
    {
//        $this->warn('Optimizing & Caches new changes...');
//        $optimize = $this->call('optimize:clear');
//        $this->info($optimize);
    }

    private function clearAllRecords()
    {
        $this->resetDB();
    }

    private function clearStorageAndTemp()
    {
    }

    private function verifyCoreSystemFiles()
    {
    }

    private function reInstallSystem()
    {
    }



}
