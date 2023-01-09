<?php

namespace App\Console\Commands;

use App\Console\Commands\Support\UserCreation;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class InstallerCommand extends Command
{

    use UserCreation;
    private const INSTALLER='Mintreu|Installer:- ';
    private bool $canRun = false;
    private array $bag = [];
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:install';

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
    private function getLogo()
    {
        $this->info("


            _         _
           (_)       | |
 _ __ ___   _  _ __  | |_  _ __  ___  _   _
| '_ ` _ \ | || '_ \ | __|| '__|/ _ \| | | |
| | | | | || || | | || |_ | |  |  __/| |_| |
|_| |_| |_||_||_| |_| \__||_|   \___| \__,_|




        ");
    }




    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {


        $this->getLogo();
        $this->warn(self::INSTALLER.' initializing!');
        // waiting for 2 seconds
        $this->info(self::INSTALLER.' Please Wait!');
//        sleep(2);
//        $this->info(self::INSTALLER.' loading 10%');
//        sleep(2);
//        $this->info(self::INSTALLER.' loading 30%');
//        sleep(2);
//        $this->info(self::INSTALLER.' loading 70%');
//        sleep(2);
//        $this->info(self::INSTALLER.' loading 99%');

        if ($this->confirm(self::INSTALLER.'Do you wish to continue?', true)) {
            $this->canRun = true;
            $this->info("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n
            \n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n");
            // waiting for 2 seconds
            $this->warn(self::INSTALLER.'Please wait...');
            sleep(2);
            if (App::version() > 9) {
                $this->bag[] = ['Laravel', 'Pass [' . App::version() . ']', 'OK'];
            } else {
                $this->canRun = false;
                $this->bag[] = ['Laravel', 'Fail', 'Minimum Laravel : v.9 And Currently have :' . App::version()];
            }
            if (DB::connection()->getDatabaseName()) {
                $this->bag[] = ['Database', 'Active [' . DB::connection()->getDatabaseName() . ']', 'OK'];
            } else {
                $this->canRun = false;
                $this->bag[] = ['Database', 'InActive', 'Check Your DB Credentials'];
            }

            //Display Table
            $this->table(
                ['Attribute', 'Status', 'Recommendation'],
                $this->bag
            );
            // waiting for 2 seconds
            $this->warn(self::INSTALLER.'Please wait...');
            sleep(2);
            if ($this->canRun) {
                $this->warn(self::INSTALLER."Preparation Complete...");
                $this->info(self::INSTALLER."Starting...");

                if ($this->confirm(self::INSTALLER.'Do You Wish To ReCache New Changes...?', true)) {
                    // waiting for 2 seconds
                    $this->warn(self::INSTALLER.'Please wait...');
                    sleep(2);
                    // cached new changes
                    $this->warn(self::INSTALLER.'Optimizing & Caches new changes...');
                    $optimize = $this->call('optimize:clear');
                    $this->info($optimize);
                }

                if ($this->confirm(self::INSTALLER.'Do You Wish To Migrate All Tables', true)) {
                    // waiting for 2 seconds
                    $this->warn(self::INSTALLER.'Please wait...');
                    sleep(2);
                    // running `php artisan migrate`
                    $this->warn(self::INSTALLER.'Migrating all tables into database...');
                    $migrate = $this->call('migrate:fresh');
                    $this->info($migrate);
                }

                if ($this->confirm(self::INSTALLER.' Do You Wish To Create A Super Admin', true)) {
                    // waiting for 2 seconds
                    $this->warn(self::INSTALLER.'Please wait...');
                    sleep(2);
//                    $this->createFilamentUser();

                    $this->createSilentUser();
                }

                if ($this->confirm(self::INSTALLER."Do You Wish To Seed Dummy Records", true)) {
                    // waiting for 2 seconds
                    $this->warn(self::INSTALLER.' Please wait...');
                    sleep(2);
                    // running `php artisan db:seed`
                    $this->warn(self::INSTALLER.'seeding basic data for artistic kickstart...');
                    $result = $this->call('db:seed');
                    $this->info($result);
                }

                //                if($this->confirm(self::INSTALLER."Do You Wish To Symlink Storage Directory?"))
                //                {
                //                    // waiting for 2 seconds
                //                    $this->warn(self::INSTALLER.'Please wait...');
                //                    sleep(2);
                //                    // running `php artisan storage:link`
                //                    $this->warn(self::INSTALLER.'Linking Storage directory...');
                //                    $result = $this->call('storage:link');
                //                    $this->info($result);
                //                }
                //
                //                if($this->confirm(self::INSTALLER."Do You Wish To Dumping Composer For Auto loading Everything ?"))
                //                {
                //                    // waiting for 2 seconds
                //                    $this->warn(self::INSTALLER.'Please wait...');
                //                    sleep(2);
                //                    // running `composer dump-autoload`
                //                    $this->warn('Step: Composer Autoload...');
                //                    $result = shell_exec('composer dump-autoload');
                //                    $this->info($result);
                //                }
                // waiting for 2 seconds
                
                $this->storageLink();
                
                $this->warn(self::INSTALLER.'Please wait...');
                sleep(2);
                $this->warn(self::INSTALLER.'Finalizing Installation...');
                sleep(2);
                $this->info('-----------------------------');
                $this->info(self::INSTALLER.'Congratulations!');
                $this->info( 'The installation has been finished and you can now use '.config('app.name'));
            } else {
                $this->error(self::INSTALLER."Please Correct The Laravel Version And Database Credentials for installation...");
            }
        }
    }
    
    
     private function storageLink()
    {
        if ($this->confirm("iotron: Do You Wish To Symlink Storage Directory?", true)) {
            // waiting for 2 seconds
            $this->warn('iotron: Please wait...');
            sleep(2);
            // running `php artisan storage:link`
            $this->warn('iotron: Linking Storage directory...');
            if (is_dir(public_path('storage'))) {
                rmdir(public_path('storage'));
            }

            $result = $this->call('storage:link');
            $this->info((string) $result);
        }
    }
    
    
}
