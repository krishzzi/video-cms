<?php


class Installer
{

    private string $checkFile;
    private string $rootPath;


    public function __construct()
    {
        $this->checkFile = __DIR__.'/composer.lock';
        $this->rootPath = __DIR__.DIRECTORY_SEPARATOR;
        if(!$this->complete())
        {
            $this->install();
        }
    }


    public function install()
    {
        $this->setMessage('Preparing Installation');
//        if($this->hasExtension())
//        {
//            chdir($this->rootPath);
//            $this->setMessage('Installation Started');
//            $argc = shell_exec('composer install');
//            sleep(10);
//        }
//
//        if(!$this->complete())
//        {
//            $this->watch();
//        }
//
//        \Illuminate\Support\Facades\Artisan::call('app:install');

        $user = \App\Models\User::find(1);


        die('Now You Can Use Your Application');

    }

    private function watch()
    {
        if(!$this->complete())
        {
            self::sleep(20);
            $this->watch();
        }
        echo 'Installation Successfully Finished!, <br> Refresh And Start Using Your Application';

    }

    private static function sleep(int $seconds)
    {
        sleep($seconds);
    }

    public function complete(): bool
    {
        return file_exists($this->autoloader);
    }



    public function setMessage($message,$error=false)
    {
        $color = '#4CAF50';
        if($error)
        {
            $color = 'red';
        }

        if(is_string($message))
        {
            if(PHP_SAPI === 'cli')
            {
                echo "\e[92m $message \n\e[0m";
            }else{
                ob_start();
                echo "<h3 style='color: ".$color."'>".$message ."</h3>";
                ob_end_flush();
            }

        }else{
            foreach ($message as $msg)
            {
                if(PHP_SAPI === 'cli')
                {
                    echo "\e[92m $msg \n\e[0m";
                }else{
                    ob_start();
                    echo "<h3 style='color: ".$color."'>".$msg ."</h3>";
                    ob_end_flush();
                }
            }
        }

        if($error){die();}
    }

    /**
     * @return bool
     */
    private function hasExtension() :bool
    {
        if (!version_compare(PHP_VERSION, '7.4.0', '>=')) {
            $this->setMessage('I am at least PHP version 7.4.0, my version: ' . PHP_VERSION . "\n");
            $this->setMessage('Installation Process Stopped!',true);
        }
        if (!extension_loaded('bcmath')) {
            $this->setMessage('BCMath extension not found');
            $this->setMessage('Installation Process Stopped!',true);
        }
        if (!extension_loaded('fileinfo')) {
            $this->setMessage('FILE INFO extension not found');
            $this->setMessage('Installation Process Stopped!',true);
        }
        if (!extension_loaded('openssl')) {
            $this->setMessage('OpenSSL extension not found');
            $this->setMessage('Installation Process Stopped!',true);
        }
        if (!extension_loaded('pdo')) {
            $this->setMessage('PDO extension not found');
            $this->setMessage('Installation Process Stopped!',true);
        }
        return true;
    }


}




// To Do
$installer = new Installer();


if($installer->hasAutoload() !== true)
{
    $installer->install();
}
